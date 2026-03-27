<?php
class User extends Model{

public function __construct()
{
     parent::__construct();
}
    public function FindByEmail($email) {
         $this->db->query("SELECT * FROM users WHERE email = :email");
         $this->db->bind(':email', $email);
         return $this->db->single();
        
    }

    public function FindRole($role_id) {
        $this->db->query("SELECT role_name from roles 
         WHERE role_id = :role_id");

         $this->db->bind(":role_id" ,$role_id);
         return $this->db->single();
        
    }

    public function Register($data)  {
    $this->db->query("INSERT INTO users (name,email,password,role_id)
                      VALUES (:name,:email,:password,:role_id)");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':role_id', $data['role_id']);

    return $this->db->execute();
    }

//   Dashbosrd content

//      getTotalUsers()
//      getTotalCopanies()
//      getTotalJobs()
//      getActiveUsers()
 public function getGraduatesCount(){
    $this->db->query("SELECT COUNT(*) as total FROM users WHERE role_id = 2");
    return $this->db->single()->total;
}
 public function getctiveUsersCount(){
    $this->db->query("SELECT COUNT(*) as total FROM users WHERE status = 'active'");
    return $this->db->single()->total;
}

}