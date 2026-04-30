<?php
class CompanyController extends ProtectionController{
    private $jobModel;
    private $userModel ;
    private $companyModel;
    private $applecations;
    private $graduateModel;
    public function __construct()
    {   $this->jobModel=$this->model("JobsModel");
        $this->userModel= $this->model('User');
        $this->companyModel=$this->model("CompanyModel");
        $this->applecations=$this->model("Applications");
        $this->graduateModel=$this->model("GraduateModel");
        $company= $this->companyInfo();
        $_SESSION["company_id"]=$company->id;
        $_SESSION["company_name"]=$company->company_name;
        return parent::__construct();
    }
    function companyInfo(){
        return $this->companyModel->getCompanyInfo($_SESSION["user_id"]);
    }
    public function profileComplete()
{
   

    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $user_id = $_SESSION['user_id'] ?? null;

        // جلب البيانات من الفورم
        $data = [
            'company_name' => trim($_POST['company_name'] ?? ''),
            'description'  => trim($_POST['description'] ?? ''),
            'industry'     => trim($_POST['industry'] ?? ''),
            'website'      => trim($_POST['website'] ?? ''),
            'phone'        => trim($_POST['phone'] ?? ''),
            'email'        => trim($_POST['email'] ?? ''),
            'address'      => trim($_POST['address'] ?? ''),
            'user_id'      => $user_id
        ];

        // تحقق بسيط
        if (!$user_id || !$data['company_name'] || !$data['email'] || !$data['phone']) {
            die("Missing required fields");
        }

        // 1. إنشاء الشركة
        $company_id = $this->companyModel->createCompany($data);

        if ($company_id) {

            // 2. تحديث المستخدم
            $this-> userModel->markProfileComplete($user_id);

            // 3. تحويل بعد النجاح
            header("Location: " . BASE_URL . "company/dashboard");
            exit;
        }

        die("Error while creating company");
    }

    // GET request -> عرض الصفحة
    $this->view("company/profileComplete");
}
    function dashboard()  {
        
        $info=[];
        $info["totalJobs"]= $this->GetJobsCount();
        $info["totalApplications"]=$this->GetAllapplecations();
        $info["acceptedapplications"]=$this->GetAcceptedApplications();
        $info["rejectedapplications"]=$this->GetRejectedApplications();
        $info["lastJobs"]=$this->GetLastJobs();
        $this->view("company/dashboard",$info);    
    }
    function jobsManagment()  {
        $info=[];
        $info["activeJobs"]=$this->GetActiveJobs();
        $info["allApplications"]= $this->GetApplicationsCount();
        $info["jobsHoldingApplications"]=$this->GetJobsHoldingApplications();
        $info["allJobs"]=$this->GetAllJobs($_SESSION["company_id"]);
        $this->view("company/jobsManagment",$info);    
        }
    function graduatesSearch ()  { 
        $info=[];  
        $info["graduates"]= $this->GetGraduates();
      $this->view("company/graduatesSearch",$info);    
    }
    function manageApplecations()  {
         $info=[];
         $info["allApplications"]= $this->GetAllApplications();       
        $this->view("company/manageApplecations",$info);    
     }
    function profileManagment()  {
        $this->view("company/profileManagment");    
        
    }
    function GetJobsCount()  {
        return $this->jobModel->getmyJobsCount($_SESSION["company_id"]);
    }
    function GetAllapplecations(){
        return $this->applecations->getApplecations();
    }
    function GetAcceptedApplications() {
        return $this->applecations->getAcceptedApplications();
        
    }
    function GetRejectedApplications() {
        return $this->applecations->getRejectedApplications();
    }
    function GetLastJobs() {
        return $this->jobModel->getLatestJobsWithApplications($_SESSION["company_id"]);
    }
    // posting new job
    public function storeJob() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $data = [
            'company_id' => $_SESSION['company_id'],
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'skills' => $_POST['skills'],
            'job_type' => $_POST['job_type'],
            'location' => $_POST['location'],
            'salary' => $_POST['salary'] ?: null,
            'deadline' => $_POST['deadline']
        ];
          if ($data['deadline'] < date('Y-m-d')) {
            $_SESSION['flash_error'] = "ادخلت تاريخ انتهاء غير صالح. يجب أن يكون في المستقبل.";
            header("Location: " . BASE_URL . "company/dashboard");
             exit;
        }
        if ($this->jobModel->createJob($data)) {
            $_SESSION['flash_success'] = "تم إضافة الوظيفة بنجاح!";
        } else {
            $_SESSION['flash_error'] = "حدث خطأ أثناء إضافة الوظيفة.";
        }
        // header("Location: " . BASE_URL . "company/dashboard");
        // exit;
        // redirect to current page eithetr dashboard or jobs management based on the referer url
        $referer = $_SERVER['HTTP_REFERER'] ?? '';
        header("Location: " . $referer);
        exit;

    }
}
// edit job
public function UpdateJob() {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $skills = trim($_POST['skills']);
        $job_type = $_POST['job_type'];
        $location = trim($_POST['location']);
        $salary = is_numeric($_POST['salary']) ? $_POST['salary'] : null;
        $deadline = $_POST['deadline'];

       

        // ✅ تحقق من التاريخ
        $today = date('Y-m-d');
        if (empty($deadline) || $deadline < $today) {
           $_SESSION['flash_error'] = "تاريخ الانتهاء غير صالح ❌";
            header("Location: " . BASE_URL . "company/dashboard");
            exit;
        }

        $data = [
            'id' => $id,
            'title' => $title,
            'description' => $description,
            'skills' => $skills,
            'job_type' => $job_type,
            'location' => $location,
            'salary' => $salary,
            'deadline' => $deadline
        ];

        if ($this->jobModel->updateJob($data)) {
           $_SESSION['flash_success'] = "تم تعديل الوظيفة بنجاح ✅";
        } else {
            $_SESSION['flash_error'] = "حدث خطأ أثناء التعديل ❌";
        }

         // redirect to current page eithetr dashboard or jobs management based on the referer url
        $referer = $_SERVER['HTTP_REFERER'] ?? '';
        header("Location: " . $referer);
        exit;
    }
}
public function deleteJob() {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];

        if ($this->jobModel->deleteJob($id)) {
            $_SESSION['flash_success'] = "تم حذف الوظيفة بنجاح 🗑️";
        } else {
            $_SESSION['flash_error'] = "حدث خطأ أثناء الحذف ❌";
        }

        // redirect to current page eithetr dashboard or jobs management based on the referer url
        $referer = $_SERVER['HTTP_REFERER'] ?? '';
        header("Location: " . $referer);
        exit;
    }
}
public function GetActiveJobs() {
    return $this->jobModel->getActiveJobs($_SESSION["company_id"]);
}
public function GetApplicationsCount() {
    return $this->applecations->getApplicationsCount($_SESSION["company_id"]);
}
public function GetJobsHoldingApplications() {
    return $this->jobModel->getJobsHoldingApplications($_SESSION["company_id"]);    
}
public function GetAllJobs($company_id) {
    return $this->jobModel->getAllJobs($company_id);
}
public function GetAllApplications() {
    return $this->applecations->getAllApplicationsByCompany($_SESSION["company_id"]);
}
public function GetGraduates() {
    return $this->graduateModel->getGraduatesInfo();
}

}