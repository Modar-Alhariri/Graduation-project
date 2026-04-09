<?php
class DepartmentModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getDepartmentsCount(){
    $this->db->query("SELECT COUNT(*) as total FROM departments");
    return $this->db->single()->total;
}
public function getAllDepartments(){

    $this->db->query("
        SELECT 
            d.id,
            d.name AS department_name,
            c.name AS college_name,
            COUNT(m.id) AS majors_count
        FROM departments d 
        LEFT JOIN colleges c ON d.college_id = c.id
        LEFT JOIN majors m ON m.department_id = d.id
        GROUP BY d.id
        ORDER BY d.id DESC
    ");

    return $this->db->resultSet();
}
public function addDepartment($data){

    
    $this->db->query("SELECT COUNT(*) as count FROM departments WHERE name = :name");
    $this->db->bind(':name', $data['name']);

    if($this->db->single()->count > 0){
        return false;
    }

    $this->db->query("
        INSERT INTO departments (name, college_id, description)
        VALUES (:name, :college_id, :description)
    ");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':college_id', $data['college_id']);
    $this->db->bind(':description', $data['description']);

    return $this->db->execute();
}
public function updateDepartment($data){

    // منع التكرار
    $this->db->query("
        SELECT COUNT(*) as count 
        FROM departments 
        WHERE name = :name 
        AND college_id = :college_id
        AND id != :id
    ");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':college_id', $data['college_id']);
    $this->db->bind(':id', $data['id']);

    $result = $this->db->single();

    if($result && $result->count > 0){
        return "duplicate";
    }

    // التحديث
    $this->db->query("
        UPDATE departments 
        SET name = :name,
            college_id = :college_id,
            description = :description
        WHERE id = :id
    ");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':college_id', $data['college_id']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':id', $data['id']);

    if($this->db->execute()){
        return "success";
    }

    return "error";
}
public function deleteDepartment($id){
    // تحقق من وجود تخصصات مرتبطة
    $this->db->query("SELECT COUNT(*) as count FROM majors WHERE department_id = :id");
    $this->db->bind(':id', $id);
    if($this->db->single()->count > 0){
        return false; // لا يمكن الحذف
    }

    // حذف القسم
    $this->db->query("DELETE FROM departments WHERE id = :id");
    $this->db->bind(':id', $id);
    return $this->db->execute();
}
}