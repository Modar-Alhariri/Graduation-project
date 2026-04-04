<?php
class GraduateController extends ProtectionController{
    private $userModel ;
    private $isCopleted ;
    public function __construct()
    {
        return parent::__construct();
       $this->userModel= $this->model('User');
    }
    function dashboard()  {
        // if profile completed -> dashboard
        // if not -> [role] -> complete prifile
        $this->view("graduate/dashboard");
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
}