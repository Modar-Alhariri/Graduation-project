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
}