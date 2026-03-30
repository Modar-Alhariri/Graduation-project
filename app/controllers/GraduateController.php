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
        $this->isCopleted =$this->userModel->isProfileCompleted();
        if($this->isCopleted==0){
          $this->view("graduate/profileCoplete");
        }else{

            $this->view("graduate/dashboard");
        }
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
}