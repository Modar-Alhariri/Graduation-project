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
public function updateCollege($data){

    // تحقق من التكرار (مع استثناء نفس الكلية)
    $this->db->query("
        SELECT COUNT(*) as count 
        FROM colleges 
        WHERE name = :name AND id != :id
    ");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':id', $data['id']);

    $row = $this->db->single();

    if($row->count > 0){
        return false;
    }

    // تحديث البيانات
    $this->db->query("
        UPDATE colleges 
        SET name = :name, description = :description
        WHERE id = :id
    ");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':id', $data['id']);

    return $this->db->execute();
}
public function deleteCollege($id){

    // تحقق هل الكلية مرتبطة بأقسام
    $this->db->query("SELECT COUNT(*) as count FROM departments WHERE college_id = :id");
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    if($row->count > 0){
        return false; // ❌ لا تحذف
    }

    // حذف الكلية
    $this->db->query("DELETE FROM colleges WHERE id = :id");
    $this->db->bind(':id', $id);

    return $this->db->execute();
}

}