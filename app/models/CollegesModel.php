<?php
class CollegesModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getCollegesCount(){
    $this->db->query("SELECT COUNT(*) as total FROM colleges");
    return $this->db->single()->total;
}
// public function addCollege($data){
//     $this->db->query("
//         INSERT INTO colleges (name, description)
//         VALUES (:name, :description)
//     ");

//     $this->db->bind(':name', $data['name']);
//     $this->db->bind(':description', $data['description']);

//     return $this->db->execute();
// }
public function addCollege($data){
    
    $this->db->query("SELECT COUNT(*) as count FROM colleges WHERE name = :name");
    $this->db->bind(':name', $data['name']);
    $row = $this->db->single();

    if($row->count > 0){
        return false; 
    }

    
    $this->db->query("
        INSERT INTO colleges (name, description)
        VALUES (:name, :description)
    ");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':description', $data['description']);

    return $this->db->execute();
}
public function getAllColleges(){
    $this->db->query("
        SELECT 
            col.id,
            col.name AS college_name,
            COUNT(d.id) AS departments_count
        FROM colleges col
        LEFT JOIN departments d ON d.college_id = col.id
        GROUP BY col.id
        ORDER BY col.id DESC
    ");

    return $this->db->resultSet();
}
}