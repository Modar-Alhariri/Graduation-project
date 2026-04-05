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
}