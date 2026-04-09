<?php
class MajorsModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getMajorsCount(){
    $this->db->query("SELECT COUNT(*) as total FROM majors");
    return $this->db->single()->total;
}
 public function getAllMajors(){
        $this->db->query("
            SELECT 
                m.id,
                m.name AS major_name,
                d.name AS department_name,
                COUNT(g.id) AS graduates_count
            FROM majors m
            LEFT JOIN departments d ON m.department_id = d.id
            LEFT JOIN graduates g ON g.major_id = m.id
            GROUP BY m.id
            ORDER BY m.id DESC
        ");
        return $this->db->resultSet();
    }
    public function addMajor($data){
    // check redendunt
    $this->db->query("SELECT COUNT(*) as count 
                      FROM majors 
                      WHERE name = :name AND department_id = :dep_id");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':dep_id', $data['department_id']);

    if($this->db->single()->count > 0){
        return false; //  redendunt data
    }

    
    $this->db->query("INSERT INTO majors (name, department_id) VALUES (:name, :dep_id)");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':dep_id', $data['department_id']);

    return $this->db->execute();
}
public function updateMajor($data){
    // التحقق من عدم التكرار داخل نفس القسم
    $this->db->query("
        SELECT COUNT(*) as count
        FROM majors
        WHERE name = :name AND department_id = :dep_id AND id != :id
    ");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':dep_id', $data['department_id']);
    $this->db->bind(':id', $data['id']);

    if($this->db->single()->count > 0){
        return false;
    }

    // تحديث التخصص
    $this->db->query("
        UPDATE majors
        SET name = :name, department_id = :dep_id
        WHERE id = :id
    ");
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':dep_id', $data['department_id']);
    $this->db->bind(':id', $data['id']);

    return $this->db->execute();
}
public function deleteMajor($id){
   
    $this->db->query("SELECT COUNT(*) as count FROM graduates WHERE major_id = :id");
    $this->db->bind(':id', $id);
    if($this->db->single()->count > 0){
        return false;
    }

  
    $this->db->query("DELETE FROM majors WHERE id = :id");
    $this->db->bind(':id', $id);
    return $this->db->execute();
}
}