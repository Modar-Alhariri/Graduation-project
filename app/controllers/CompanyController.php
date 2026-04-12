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
    function graduatesSearch ()  {   
      $this->view("company/graduatesSearch");    
    }
    function manageApplecations()  {
                
        $this->view("company/manageApplecations");    
     }
    function profileManagment()  {
        $this->view("company/profileManagment");    
        
    }
}