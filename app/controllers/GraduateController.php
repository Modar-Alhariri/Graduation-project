<?php
class GraduateController extends ProtectionController{
    private $userModel ;
    private $isCopleted ;
    private $jobsModel;
    private $graduateModel;
    private $majors;
    private $applications;
     private $notifications;
    public function __construct()
    {
       $this->jobsModel=$this->model("JobsModel");
       $this->userModel= $this->model('User');
      $this->graduateModel= $this->model('GraduateModel');
      $this->majors=$this->model("MajorsModel");
      $this->applications=$this->model("Applications");
      $this->notifications=$this->model("NotificationsModel");
       return parent::__construct();
    }
    function profileComplete()  {
        $info=[];
        $info["majors"]=$this->majors->getAllMajors();
        $this->view("graduate/profileComplete", $info);
    }
    function dashboard()  {
        $_SESSION["graduate_id"]=$this->graduateModel->getGraduateIdByUserId($_SESSION["user_id"]);
        $info=[];
        $info["totalJobs"]=$this->GetAllJobs();
        $info["myApplication"]=$this-> GetMyApplicationsCount();
        $info["notificationsCount"]=$this->GetNotifications();
        $this->view("graduate/dashboard",$info);
    }
    function jobs()  {
       $info=[];
       $info["jobs"]=$this->PostedJobs();
       $info["myapplications"]=$this-> GetMyApplications();
       $this->view("graduate/jobs", $info);
    }
    function myApplecations()  {
       $this->view("graduate/myApplecations");
    }
    function profileManagement()  {
       $this->view("graduate/profileManagement");
    }
    function cvBuilder()  {
      $this->view("graduate/cvBuilder");
    }
    function surveys()  {
      $this->view("graduate/surveys");
    }
    function GetAllJobs()  {
      return $this->jobsModel->getJobsCount();
    }
   // function to insert the graduate profile data into the database 
    function ConmpleteGraduateProfile()  {
     if($_SERVER['REQUEST_METHOD']=="POST"){
      $data=[];
      $data["user_id"]=$_SESSION["user_id"];
      $data["full_name"]=$_SESSION["name"];
      $data["major_id"]=trim($_POST["major_id"]);
      $data["graduate_id"]=trim($_POST["graduate_id"]);
      $data["graduation_year"]=trim($_POST["graduation_year"]);
      $data["gpa"]=trim($_POST["gpa"]);
      $data["phone"]=trim($_POST["phone"]);
      $data["address"]=trim($_POST["address"]);
      $data["employment_status"]=trim($_POST["employment_status"]);
      $data["employment_date"]=trim($_POST["employment_date"]);
      if($this->graduateModel->completeGraduateProfile($data)){
         header("location:".BASE_URL."Graduate/dashboard");
         exit();
      }
      else{
         header("location:".BASE_URL."Graduate/profileComplete");
         exit();
      }

   }

}
   function getMyApplicationsCount()  {
      return $this->applications->getMyApplicationsCount($_SESSION["graduate_id"]);
    }
   function GetNotifications()  {
      return $this->notifications->getNotificationsCount($_SESSION["user_id"]);
    }
   function PostedJobs()  {
      return $this->jobsModel->getPostedJobs();
    }
   function GetMyApplications()  {
      return $this->applications->getMyApplications($_SESSION["graduate_id"]);
    }
   //  function to insert the application data into the database
  public function apply() {

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $data = [];
        $data["graduate_id"] = trim($_POST["graduate_id"]);
        $data["company_id"] = trim($_POST["company_id"]);
        $data["job_id"] = trim($_POST["job_id"]);
        $option = $_POST["cv_option"] ?? "profile";

        // 🎯 تحديد CV
        if($option === "profile"){

            $user = $this->graduateModel->getCV($_SESSION["user_id"]);

            if(empty($user->cv)){
                $_SESSION["flash_error"] = "لم تقم برفع سيرة ذاتية في ملفك الشخصي، الرجاء رفع سيرة ذاتية أو اختيار رفع سيرة ذاتية جديدة.";
                header("location:" . BASE_URL . "Graduate/jobs");
                exit();
            }

            $data["cv"] = $user->cv;

        } else {

            // لازم اسم الحقل يكون cv_file
            if(empty($_FILES["cv_file"]["name"])){
                header("location:" . BASE_URL . "Graduate/jobs");
                exit();
            }

            $file = $_FILES["cv_file"];

            // 🔒 تحقق نوع الملف
            if($file["type"] !== "application/pdf"){
               $_SESSION["flash_error"] = "الملف المرفوع غير صالح، الرجاء رفع ملف PDF فقط.";
                header("location:" . BASE_URL . "Graduate/jobs");
                exit();
            }

            // 📂 رفع
            $cvName = uniqid() . ".pdf";
            $destination = "uploads/cvs/" . $cvName;

            move_uploaded_file($file["tmp_name"], $destination);

            $data["cv"] = $destination;
        }

        // 🧠 الحالة
        $data["status"] = "pending";

        // 💾 حفظ
        if($this->applications->apply($data)){
            $_SESSION["flash_success"] = "تم إرسال الطلب بنجاح.";
            header("location:" . BASE_URL . "Graduate/jobs");
            exit();
        } else {
            $_SESSION["flash_error"] = "حدث خطأ أثناء إرسال الطلب.";
            header("location:" . BASE_URL . "Graduate/jobs");
            exit();
        }
    }
}
}