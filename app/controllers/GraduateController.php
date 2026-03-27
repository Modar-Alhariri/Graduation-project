<?php
class GraduateController extends ProtectionController{
    public function __construct()
    {
        return parent::__construct();
    }
    function dashboard()  {
        $this->view("graduate/dashboard");
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