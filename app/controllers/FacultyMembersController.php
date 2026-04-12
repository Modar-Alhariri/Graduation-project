<?php
class FacultyMembersController extends ProtectionController{
    public function __construct()
    {
        return parent::__construct();
    }
    public function dashboard(){
        $this->view("faculty_members/dashboard");
    }
    public function acadimicRecomendations(){
        $this->view("faculty_members/acadimicRecomendations");
    }
    public function deptGraduatesTracking(){
        $this->view("faculty_members/deptGraduatesTracking");
    }
    public function feedbackForms(){
        $this->view("faculty_members/feedbackForms");
    }
}