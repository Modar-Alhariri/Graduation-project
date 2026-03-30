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
        $info['newRegisterations'] = $this->GetNewRegistrations();

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
    // function GetEmploymentRates(){
    // $rates = $this->graduateModel->getEmploymentRatesLast6Months();
    // $employmentRates = [];
    // foreach ($rates as $row) {
    //     $employmentRates[$row->month] = (int)$row->total;
    // }
    // return $employmentRates;
    // }
    // ====================================================
    function GetEmploymentRates(){
    $rates = $this->graduateModel->getEmploymentRatesLast6Months();
    $employmentRates = [];

    // إنشاء آخر 6 أشهر بقيم 0
    for ($i = 5; $i >= 0; $i--) {
        $month = date('F', strtotime("-$i month"));
        $employmentRates[$month] = 0;
    }

    // إذا لا يوجد بيانات → بيانات تجريبية
    if (empty($rates)) {
        foreach ($employmentRates as $month => $val) {
            $employmentRates[$month] = rand(10, 80);
        }
    } else {
        // تعبئة البيانات الحقيقية
        foreach ($rates as $row) {
            $employmentRates[$row->month] = (int)$row->total;
        }
    }

    return $employmentRates;
}
    // ====================================================
//     function GetNewRegistrations() {
    
//     $rows = $this->graduateModel->getNewRegistrationsLast6Months();

//     $months = [];
//     $graduates = [];
//     $companies = [];

    
//     for ($i = 5; $i >= 0; $i--) {
//         $monthName = date('F', strtotime("-$i month")); 
//         $months[] = $monthName;
//         $graduates[$monthName] = 0; 
//         $companies[$monthName] = 0;
//     }

  
//     foreach ($rows as $row) {
//         $graduates[$row->month_name] = (int)$row->graduates;
//         $companies[$row->month_name] = (int)$row->companies;
//     }

//     return [
//         'months' => $months,
//         'graduates' => $graduates,
//         'companies' => $companies
//     ];
// }
function GetNewRegistrations() {

    $rows = $this->graduateModel->getNewRegistrationsLast6Months();

    $months = [];
    $graduates = [];
    $companies = [];

    // إنشاء الأشهر
    for ($i = 5; $i >= 0; $i--) {
        $monthName = date('F', strtotime("-$i month"));
        $months[] = $monthName;
        $graduates[$monthName] = 0;
        $companies[$monthName] = 0;
    }

    // إذا لا يوجد بيانات → استخدم بيانات افتراضية
    if (empty($rows)) {
        foreach ($months as $month) {
            $graduates[$month] = rand(10, 50);
            $companies[$month] = rand(5, 30);
        }
    } else {
        // تعبئة البيانات الحقيقية
        foreach ($rows as $row) {
            $graduates[$row->month_name] = (int)$row->graduates;
            $companies[$row->month_name] = (int)$row->companies;
        }
    }

    return [
        'months' => $months,
        'graduates' => $graduates,
        'companies' => $companies
    ];
}
    
}