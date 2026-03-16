<?php
class AdminController extends ProtectionController {

    public function dashboard() {
        
        $this->view("admin/dashboard");
    }
}