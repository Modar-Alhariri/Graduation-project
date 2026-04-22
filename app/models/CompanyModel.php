<?php
class CompanyModel extends Model{
   
    public function __construct()
    {
        return parent::__construct();
    }
    // Dashboard content
    // get number of companies
    public function getCompanyInfo($user_id){
    $this->db->query("
        SELECT id, company_name 
        FROM companies 
        WHERE user_id = :id
    ");
    $this->db->bind(':id', $user_id);
    return $this->db->single();
}
    public function getCompaniesCount(){
    $this->db->query("SELECT COUNT(*) as total FROM companies");
    return $this->db->single()->total;
    }
   public function createCompany($data){
    $this->db->query("INSERT INTO companies 
        (company_name, description, industry, website, phone, email, address, user_id)
        VALUES 
        (:company_name, :description, :industry, :website, :phone, :email, :address, :user_id)");

    $this->db->bind(':company_name', $data['company_name']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':industry', $data['industry']);
    $this->db->bind(':website', $data['website']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':user_id', $data['user_id']);

    return $this->db->execute();
}


}