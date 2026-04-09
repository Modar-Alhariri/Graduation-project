<?php
class GraduateController extends ProtectionController{
    private $userModel ;
    private $isCopleted ;
    private $jobsModel;
    public function __construct()
    {
       $this->jobsModel=$this->model("JobsModel");
       $this->userModel= $this->model('User');
       return parent::__construct();
    }
    function dashboard()  {
        // if profile completed -> dashboard
        // if not -> [role] -> complete prifile
        $info=[];
        $info["totalJobs"]=$this->GetAllJobs();
        $this->view("graduate/dashboard",$info);
        // $this->isCopleted =$this->userModel->isProfileCompleted();
        // $this->view("graduate/profileCoplete");
        // if($this->isCopleted==0){
        // }else{
        //     $this->view("graduate/dashboard");
        // }
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
   
     
}