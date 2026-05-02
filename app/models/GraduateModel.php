<?php
class GraduateModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getEmploymentRatesLast6Months() {
    $this->db->query("
        SELECT MONTHNAME(employment_date) AS month, COUNT(*) AS total
        FROM graduates
        WHERE employment_date >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
        GROUP BY MONTH(employment_date)
        ORDER BY MONTH(employment_date)
    ");
    return $this->db->resultSet(); 
}
    public function getNewRegistrationsLast6Months() {
    $this->db->query("
        SELECT 
            m.month_num,
            MONTHNAME(DATE_SUB(CURDATE(), INTERVAL (5 - m.idx) MONTH)) AS month_name,
            
            (SELECT COUNT(*) 
             FROM graduates g 
             WHERE MONTH(g.created_at) = m.month_num 
             AND g.created_at >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
            ) AS graduates,
            
            (SELECT COUNT(*) 
             FROM companies c 
             WHERE MONTH(c.created_at) = m.month_num 
             AND c.created_at >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
            ) AS companies
        FROM (
            SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 5 MONTH)) AS month_num, 0 AS idx
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 4 MONTH)), 1
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 3 MONTH)), 2
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 2 MONTH)), 3
            UNION SELECT MONTH(DATE_SUB(CURDATE(), INTERVAL 1 MONTH)), 4
            UNION SELECT MONTH(CURDATE()), 5
        ) m
        ORDER BY m.idx
    ");

    return $this->db->resultSet(); // مصفوفة من الصفوف جاهزة للاستخدام
}
    public function getGraduatesInfo() {
        // query to get graduates info name from users table and major from majors table and 3 skills from skills table and all from graduates table
        $this->db->query("
            SELECT u.name, m.name AS major, g.*,
                (SELECT GROUP_CONCAT(s.name SEPARATOR ', ') 
                 FROM skills s 
                 JOIN graduate_skills gs ON s.id = gs.skill_id 
                 WHERE gs.graduate_id = g.id) AS skills
            FROM graduates g
            JOIN users u ON g.user_id = u.user_id
            JOIN majors m ON g.major_id = m.id 
            ");

        return $this->db->resultSet();  
       
    }
    public function completeGraduateProfile($data)  {
        $this->db->query("INSERT INTO graduates (user_id, major_id, graduate_id, graduation_year, gpa, phone, address, employment_status, employment_date, created_at) VALUES (:user_id, :major_id, :graduate_id, :graduation_year, :gpa, :phone, :address, :employment_status, :employment_date, NOW())");
        $this->db->bind(":user_id",$data["user_id"]);
        $this->db->bind(":major_id",$data["major_id"]);
        $this->db->bind(":graduate_id",$data["graduate_id"]);
        $this->db->bind(":graduation_year",$data["graduation_year"]);
        $this->db->bind(":gpa",$data["gpa"]);
        $this->db->bind(":phone",$data["phone"]);
        $this->db->bind(":address",$data["address"]);
        $this->db->bind(":employment_status",$data["employment_status"] ? $data["employment_status"] : "searching");
        $this->db->bind(":employment_date",$data["employment_date"] ? $data["employment_date"] : null);

            if($this->db->execute()){
            $this->db->query("UPDATE users SET profile_completed = 1 WHERE user_id = :user_id");
            $this->db->bind(":user_id", $data["user_id"]);
            if($this->db->execute()){
                // profile completed successfully
                $_SESSION['flash_success'] = "تم إكمال الملف الشخصي بنجاح!";
                return true;
            }
            else{
                // failed to update user profile status
                $_SESSION['flash_error'] = "حدث خطأ أثناء إكمال الملف الشخصي.";
                return false;
            }
        }
        else{   
            $_SESSION['flash_error'] = "2حدث خطأ أثناء إكمال الملف الشخصي.";

            return false;
        }
    }
    public function getGraduateIdByUserId($user_id) {
        $this->db->query("SELECT id FROM graduates WHERE user_id = :user_id");
        $this->db->bind(":user_id", $user_id);
        $row = $this->db->single();
        return $row ? $row->id : null;
}        
    public function getCV($user_id) {
        $this->db->query("SELECT cv_file  AS cv  FROM graduates WHERE id = :user_id");  
        $this->db->bind(":user_id", $user_id);
        return $this->db->single();
    }
    public function getCV_info($user_id){
        $this->db->query("SELECT cv_file  AS cv  FROM graduates WHERE user_id = :user_id");  
        $this->db->bind(":user_id", $user_id);
        return $this->db->single();
    }
    public function updateCV($user_id, $cv_file) {
        $this->db->query("UPDATE graduates SET cv_file = :cv_file WHERE user_id = :user_id");
        $this->db->bind(":cv_file", $cv_file);
        $this->db->bind(":user_id", $user_id);
        return $this->db->execute();
    }
   public function getGraduateInfo($user_id) {

    $this->db->query("
        SELECT 
            u.name,
            u.email,
            m.name AS major,
            c.name AS college,
            d.name AS department,
            g.*,

            GROUP_CONCAT(DISTINCT s.name SEPARATOR ', ') AS skills,
            GROUP_CONCAT(DISTINCT co.title SEPARATOR ', ') AS courses

        FROM graduates g

        JOIN users u ON g.user_id = u.user_id

        JOIN majors m ON g.major_id = m.id
        JOIN departments d ON m.department_id = d.id
        JOIN colleges c ON d.college_id = c.id

        LEFT JOIN graduate_skills gs ON gs.graduate_id = g.id
        LEFT JOIN skills s ON s.id = gs.skill_id

        LEFT JOIN courses co ON co.graduate_id = g.id

        WHERE g.user_id = :user_id

        GROUP BY g.id
    ");

    $this->db->bind(":user_id", $user_id);

    return $this->db->single();
}
   public function updateGraduateProfile($data) {
    // save name and email in user table and phone and address in graduate table 
    $this->db->query("UPDATE users SET name = :name, email = :email WHERE user_id = :user_id");
    $this->db->bind(":name", $data["full_name"]);
    $this->db->bind(":email", $data["email"]);
    $this->db->bind(":user_id", $_SESSION["user_id"]);
    if($this->db->execute()){
        $this->db->query("UPDATE graduates SET phone = :phone, address = :address WHERE user_id = :user_id");
        $this->db->bind(":phone", $data["phone"]);
        $this->db->bind(":address", $data["address"]);
        $this->db->bind(":user_id", $_SESSION["user_id"]);
        if($this->db->execute()){
           
            return true;
        }
        else{
           
            return false;
        }
    }
    else{
        
        return false;
    }
   }
  public function getGraduatesBySkills($jobSkills, $limit = 20)
{
    if (empty($jobSkills)) {
        return [];
    }

    $placeholders = implode(',', array_fill(0, count($jobSkills), '?'));

    $sql = "
        SELECT 
            g.id,
            g.user_id,
            u.name,
            u.email,

            GROUP_CONCAT(DISTINCT LOWER(s.name)) AS skills,

            COUNT(DISTINCT s.id) AS match_count

        FROM graduates g

        INNER JOIN users u 
            ON u.user_id = g.user_id

        INNER JOIN graduate_skills gs 
            ON gs.graduate_id = g.id

        INNER JOIN skills s 
            ON s.id = gs.skill_id

        WHERE LOWER(s.name) IN ($placeholders)

        GROUP BY g.id, g.user_id, u.name, u.email

        ORDER BY match_count DESC

        LIMIT $limit
    ";

    $this->db->query($sql);

    foreach ($jobSkills as $i => $skill) {
        $this->db->bind($i + 1, strtolower(trim($skill)));
    }

    return $this->db->resultSet();
}

}