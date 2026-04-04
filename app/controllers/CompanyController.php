<?php
class CompanyController extends ProtectionController{
    public function __construct()
    {
        return parent::__construct();
    }
    function dashboard()  {
        $this->view("company/dashboard");    
    }
    function jobsManagment()  {
        $this->view("company/jobsManagment");    
    }
}