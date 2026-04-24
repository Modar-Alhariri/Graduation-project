<?php
class Applications extends Model{
public function __construct()
{
    return parent::__construct();
}
function getApplecations() {
    // get count of applacations depending on company id 
    $this->db->query("SELECT COUNT(*) as total FROM applications WHERE company_id = :company_id");
    $this->db->bind(':company_id', $_SESSION['company_id']);
     $row = $this->db->single();
    return $row->total;
}
function getAcceptedApplications(){
    $this->db->query("SELECT COUNT(*) as total FROM applications WHERE company_id = :company_id AND status = 'accepted'");
    $this->db->bind(':company_id', $_SESSION['company_id']);
    $row = $this->db->single();
    return $row->total;
}
function getRejectedApplications(){
    $this->db->query("SELECT COUNT(*) as total FROM applications WHERE company_id = :company_id AND status = 'rejected'");
    $this->db->bind(':company_id', $_SESSION['company_id']);
    $row = $this->db->single();
    return $row->total;
}
public function getApplicationsCount($company_id) {
    $this->db->query("
        SELECT COUNT(*) as total FROM applications a
        JOIN jobs j ON a.job_id = j.id
        WHERE j.company_id = :company_id
        AND j.deadline >= CURDATE()
    ");
    $this->db->bind(':company_id', (int)$company_id);
    return $this->db->single()->total;  
}
// get all applications for a company with details of the job and the graduate
// name and email form users table
// phone number from graduates table
public function getAllApplicationsByCompany($company_id) {
    $this->db->query("
        SELECT a.*, j.title as job_title, u.name as graduate_name, u.email as graduate_email, g.phone as graduate_phone
        FROM applications a
        JOIN jobs j ON a.job_id = j.id
        JOIN users u ON a.graduate_id = u.user_id
        JOIN graduates g ON a.graduate_id = g.id
        WHERE j.company_id = :company_id
        ORDER BY a.applied_at DESC
    ");
    $this->db->bind(':company_id', (int)$company_id);
    return $this->db->resultSet();

}

public function getMyApplicationsCount($graduate_id) {
    $this->db->query("SELECT COUNT(*) as total FROM applications WHERE graduate_id = :graduate_id");
    $this->db->bind(':graduate_id', (int)$graduate_id);
    return $this->db->single()->total;  
}
public function getMyApplications($graduate_id) {
    $this->db->query("
        SELECT a.*, j.title as job_title, c.company_name as company_name
        FROM applications a
        JOIN jobs j ON a.job_id = j.id
        JOIN companies c ON j.company_id = c.id
        WHERE a.graduate_id = :graduate_id
        ORDER BY a.applied_at DESC
    ");
    $this->db->bind(':graduate_id', (int)$graduate_id);
    return $this->db->resultSet();
}
//  function to apply for a job
public function apply($data) {
    $this->db->query("
        INSERT INTO applications 
        (job_id , graduate_id , company_id, cv_link, status, applied_at) 
        VALUES (:job_id, :graduate_id, :company_id, :cv, 'pending', NOW())
    ");

    $this->db->bind(":job_id", $data["job_id"]);
    $this->db->bind(":graduate_id", $data["graduate_id"]);
    $this->db->bind(":company_id", $data["company_id"]);
    $this->db->bind(":cv", $data["cv"]);

    return $this->db->execute();
}
}