<?php
class GraduateController extends ProtectionController{
    private $userModel ;
    private $isCopleted ;
    private $jobsModel;
    private $graduateModel;
    private $majors;
    public function __construct()
    {
       $this->jobsModel=$this->model("JobsModel");
       $this->userModel= $this->model('User');
      $this->graduateModel= $this->model('GraduateModel');
      $this->majors=$this->model("MajorsModel");
       return parent::__construct();
    }
    function profileComplete()  {
        $info=[];
        $info["majors"]=$this->majors->getAllMajors();
        $this->view("graduate/profileComplete", $info);
    }
    function dashboard()  {
        $info=[];
        $info["totalJobs"]=$this->GetAllJobs();
        $this->view("graduate/dashboard",$info);
    }
    function jobs()  {
       $this->view("graduate/jobs");
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
}