<?php
class AdminController extends ProtectionController {
    private $companyModel;
    private $userModel;
    private $jobsModel;
    private $graduateModel;
public function __construct()
{
    parent::__construct();
    $this->userModel=$this->model('User');
    $this->companyModel=$this->model('CompanyModel');
    $this->jobsModel=$this->model('JobsModel');
    $this->graduateModel=$this->model('GraduateModel');
    
}
   
    public function dashboard() {
        // get total users , total companies , total jobs , active users 
        // send as info 
        $info=[];
        $info['totalCompanies']=$this->GetAllCompanies();
        $info['totalGraduates']=$this->GetAllGraduates();
        $info['totalJobs']=$this->GetAlljobs();
        $info['activeUsers']=$this->GetActiveUsers();
        $info['employmentRates'] = $this->GetEmploymentRates();

        $this->view("admin/dashboard",$info);
    }
    function userManagment()  {
       $this->view("admin/userManagment") ;
    }
    function rolesPermetion()  {
         $this->view("admin/rolesPermetion") ;
    }
    function departments()  {
         $this->view("admin/departments") ;
    }
    function majors()  {
         $this->view("admin/majors") ;
    }
    function settings()  {
         $this->view("admin/setting") ;
    }
    function repors() {
         $this->view("admin/reports") ;
    }



    public function GetAllCompanies(){
    return $this->companyModel->getCompaniesCount();  
    }
    public function GetAllGraduates(){
    return $this->userModel->getGraduatesCount();  
    }
    public function GetAlljobs(){
    return $this->jobsModel->getJobsCount();  
    }
    public function GetActiveUsers(){
    return $this->userModel->getctiveUsersCount();  
    }
    function GetEmploymentRates(){
    $rates = $this->graduateModel->getEmploymentRatesLast6Months();
    $employmentRates = [];
    foreach ($rates as $row) {
        $employmentRates[$row->month] = (int)$row->total;
    }
    return $employmentRates;
    }
    function GetNewRegistrations(){
        
    }
    
    
}