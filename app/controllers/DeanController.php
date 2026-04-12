<?php
class DeanController extends ProtectionController{
    public function __construct()
    {
         parent::__construct();
    }
    public function dashboard()  {
        $this->view("dean/dashboard");
    }
    public function analyticsReports()  {
        $this->view("dean/analyticsReports");
    }
    public function decisions ()  {
        $this->view("dean/decisions");
    }
}