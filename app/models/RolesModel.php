<?php
class RolesModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getAllRoles(){
    $this->db->query("
        SELECT r.role_id, r.role_name, COUNT(u.user_id) as users_count
        FROM roles r
        LEFT JOIN users u ON r.role_id = u.role_id
        GROUP BY r.role_id, r.role_name
    ");
    return $this->db->resultSet();
}
public function addRole($name){
    if ($this->roleExists($name)) {
        $_SESSION['flash_error'] = "هذا الدور موجود مسبقًا";
    }
    else{
    $this->db->query("INSERT INTO roles (role_name) VALUES (:name)");
    $this->db->bind(':name', $name);
    return $this->db->execute();
    }
}
public function updateRole($id, $name){
    if ($this->roleExists($name)) {
        $_SESSION['flash_error'] = "هذا الدور موجود مسبقًا";
    }
    else{
    $this->db->query("
        UPDATE roles 
        SET role_name = :name
        WHERE role_id = :id
    ");

    $this->db->bind(':name', $name);
    $this->db->bind(':id', $id);

    return $this->db->execute();
    }
}
// function to prevent adding same role many times 
public function roleExists($name){
    $this->db->query("SELECT COUNT(*) as count FROM roles WHERE role_name = :name");
    $this->db->bind(':name', $name);

    $row = $this->db->single();
    return $row->count > 0;
}
public function deleteRole($id){

    // check if any user in this role 
    $this->db->query("SELECT COUNT(*) as count FROM users WHERE role_id = :id");
    $this->db->bind(':id', $id);
    $row = $this->db->single();

    if($row->count > 0){
        return false;  // deject delete action
    }

    // delete
    $this->db->query("DELETE FROM roles WHERE role_id = :id");
    $this->db->bind(':id', $id);

    return $this->db->execute();
}
}