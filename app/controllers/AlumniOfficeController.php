<?php
class AlumniOfficeController extends ProtectionController{
public function __construct()
{
    return parent::__construct();
    // AlumniOffice
}
public function dashboard()  {
    $this->view("alumni_office/dashboard");
}
public function employmentManagment()  {
    $this->view("alumni_office/employmentManagment");
}
public function graduatesContact()  {
    $this->view("alumni_office/graduatesContact");
}
public function graduatesManagment()  {
    $this->view("alumni_office/graduatesManagment");
}
public function reports()  {
    $this->view("alumni_office/reports");
}

}