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
function isProfileCompleted()  {
    $this->db->query("SELECT profile_completed FROM users WHERE user_id = :id");
    $this->db->bind(':id', $_SESSION['user_id']);
    return $this->db->single();
}


// user managment quiries 
function getAllUsers(){
    $this->db->query(" SELECT u.user_id, u.name, u.email, u.status, r.role_name
            FROM users u
            LEFT JOIN roles r ON u.role_id = r.role_id
           ");
    return $this->db->resultSet();
}
public function addUser($data) {
        $this->db->query("
            INSERT INTO users (name,email,password,role_id,status,created_at)
            VALUES (:name,:email,:password,:role_id,'نشط',NOW())
        ");
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role_id', $data['role_id']);
        return $this->db->execute(); // return true or false 
    }
public function updateUser($data){

    $this->db->query("
        UPDATE users 
        SET name = :name,
            email = :email,
            role_id = :role_id
        WHERE user_id = :id
    ");

    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':role_id', $data['role_id']);
    $this->db->bind(':id', $data['id']);

    return $this->db->execute();
}
public function deleteUser($id){
    $this->db->query("DELETE FROM users WHERE user_id = :id");
    $this->db->bind(':id', $id);
    return $this->db->execute(); 
}
public function markProfileComplete($user_id)
{
    $this->db->query("UPDATE users 
        SET profile_completed = 1
        WHERE user_id = :user_id");

    $this->db->bind(':user_id', $user_id);

    return $this->db->execute();
}

}