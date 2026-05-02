<?php
class JobsModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getJobsCount(){ 
        $this->db->query(
            "SELECT COUNT(*) as total 
            FROM jobs"); return $this->db->single()->total;
            }

    public function getmyJobsCount($company_id){
    $this->db->query("
        SELECT COUNT(*) as total 
        FROM jobs 
        WHERE company_id = :company_id
    ");
    $this->db->bind(':company_id', $company_id);
    return $this->db->single()->total;
}
//   get 6 latest jobs for company dashboard with applied count for each job
public function getLatestJobsWithApplications($company_id, $limit = 4) {
    $this->db->query("
        SELECT j.id, j.title, j.deadline,
        (SELECT COUNT(*) FROM applications a WHERE a.job_id = j.id) as applications_count
        FROM jobs j
        WHERE j.company_id = :company_id
        ORDER BY j.deadline DESC
        LIMIT $limit
    ");
    $this->db->bind(':company_id', $company_id);
   
    return $this->db->resultSet();
}
public function createJob($data) {
  
        $this->db->query("
            INSERT INTO jobs 
            (company_id, title, description, skills, job_type, location, salary, deadline)
            VALUES 
            (:company_id, :title, :description,:skills , :job_type, :location, :salary, :deadline)
        ");

        $this->db->bind(':company_id', (int)$data['company_id']);
        $this->db->bind(':title', trim($data['title']));
        $this->db->bind(':description', trim($data['description']));
        $this->db->bind(':skills', trim($data['skills']));
        $this->db->bind(':job_type', $data['job_type']);
        $this->db->bind(':location', trim($data['location']));
        $this->db->bind(':salary', $data['salary'] ?: null);
        $this->db->bind(':deadline', $data['deadline']);

        return $this->db->execute();

    
}
public function updateJob($data) {


        $this->db->query("
            UPDATE jobs SET
                title = :title,
                description = :description,
                skills = :skills,
                job_type = :job_type,
                location = :location,
                salary = :salary,
                deadline = :deadline
            WHERE id = :id
        ");

        // Bind values
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':skills', $data['skills']);
        $this->db->bind(':job_type', $data['job_type']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':deadline', $data['deadline']);

        return $this->db->execute();

    
}
public function deleteJob($id) {

    $this->db->query("DELETE FROM jobs WHERE id = :id");
    $this->db->bind(':id', (int)$id);

    return $this->db->execute();
}
//  get avtive jobs for company dashboard
public function getActiveJobs($company_id) {
    $this->db->query("
        SELECT  COUNT(*) as total FROM jobs 
        WHERE company_id = :company_id 
        AND deadline >= CURDATE()
        ORDER BY deadline ASC
    ");
    $this->db->bind(':company_id', (int)$company_id);
    return $this->db->single()->total;
}
// get number of holded jobs from applications table where status is holded and company id is the same as session company id
public function getJobsHoldingApplications($company_id) {
    $this->db->query("
        SELECT COUNT(DISTINCT j.id) as total FROM jobs j
        JOIN applications a ON a.job_id = j.id
        WHERE j.company_id = :company_id 
        AND a.status = 'holded'
    ");
    $this->db->bind(':company_id', (int)$company_id);
    return $this->db->single()->total;
}
public function getAllJobs($company_id) {
    $this->db->query("
        SELECT j.*, 
        (SELECT COUNT(*) FROM applications a WHERE a.job_id = j.id) as applications_count
        FROM jobs j
        WHERE j.company_id = :company_id
        ORDER BY j.deadline DESC
    ");
    $this->db->bind(':company_id', (int)$company_id);
    return $this->db->resultSet();      
}
public function getPostedJobs() {
    $this->db->query("SELECT * FROM jobs ");
    return $this->db->resultSet();   
}
// function to get all jobs
public function getAllAvailableJobs() {
    $this->db->query("SELECT * FROM jobs WHERE deadline >= CURDATE() ORDER BY deadline ASC");
    return $this->db->resultSet();   
}
public function getcompanyAvailableJobs($company_id) {
    $this->db->query("SELECT * FROM jobs WHERE company_id = :company_id AND deadline >= CURDATE() ORDER BY deadline ASC");
    $this->db->bind(':company_id', (int)$company_id);
    return $this->db->resultSet();   
}
// function to get job by skills
}