<?php
/*
ProtectionController.php
A controller to protect pages and control access.

1- Checks if the user is logged in using requireLogin().
   - If not logged in, redirects to Auth/login.

2- Controls user roles using requireRole($role).
   - If the user's role does not match, shows 403 Forbidden page.

3- Any controller that extends ProtectionController automatically
   becomes protected.
*/

class ProtectionController extends Controller{

 public function __construct()
{
    $this->requireLogin();
    
}

// adding middleware 
 function requireLogin()  {
   if (!isset($_SESSION['user_id'])) {
   header("location: ".BASE_URL."Auth/login");
   exit();
   } 
 }
//  function to protect role (role based access)
 function requireRole($role){
    if(!isset($_SESSION['role']) || $_SESSION['role'] !== $role){
        require_once '../app/views/403.php';
        exit;
    }
}


}