<?php
class CompanyModel extends Model{
   
    public function __construct()
    {
        return parent::__construct();
    }
    // Dashboard content
    // get number of companies
    public function getCompaniesCount(){
    $this->db->query("SELECT COUNT(*) as total FROM companies");
    return $this->db->single()->total;
    }
}