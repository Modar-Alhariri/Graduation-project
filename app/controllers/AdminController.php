<?php
class AdminController extends ProtectionController {
    private $companyModel;
    private $userModel;
    private $jobsModel;
    private $graduateModel;
    private $roleModel;
    private $departmentModel;
    private $collegesModel;
    private $majorsModel;
public function __construct()
{
    parent::__construct();
    $this->userModel=$this->model('User');
    $this->companyModel=$this->model('CompanyModel');
    $this->jobsModel=$this->model('JobsModel');
    $this->graduateModel=$this->model('GraduateModel');
    $this->roleModel=$this->model("RolesModel");
    $this->departmentModel=$this->model("DepartmentModel");
    $this->collegesModel=$this->model("CollegesModel");
    $this->majorsModel=$this->model("MajorsModel");
}
   
    public function dashboard() {
        // get total users , total companies , total jobs , active users 
        // send as info 
        $info=[];
        $info['totalCompanies']=$this->GetAllCompanies();
        $info['totalGraduates']=$this->GetAllGraduates();
        $info['totalJobs']=$this->GetAlljobs();
        $info['activeUsers']=$this->GetActiveUsers();
        $info['employmentRates'] = $this->GetEmploymentRates();
        $info['newRegisterations'] = $this->GetNewRegistrations();

        $this->view("admin/dashboard",$info);
    }
    function userManagment()  {
        $info["users"]= $this->GetAllUsers();
        $this->view("admin/userManagment",$info) ;
    }
    function rolesPermetion()  {
        $info=[];
        $info["roles"]=$this->GetAllRoles();
         $this->view("admin/rolesPermetion",$info) ;
    }
    function departments()  {
        $info=[];
        $info["total_departments"]=$this->GetAllDepartments();
        $info["total_colleges"]=$this->GetAllColleges();
        $info["total_majors"]=$this->GetAllMajors();
        $info["departments"]=$this->ShowDepartments();
        $info["colleges"]=$this->GetColleges();
        $this->view("admin/departments",$info) ;
    }
    function majors()  {
         $this->view("admin/majors") ;
    }
    function settings()  {
         $this->view("admin/setting") ;
    }
    function reports() {
         $this->view("admin/reports") ;
    }


//   dashboard functions 
    public function GetAllCompanies(){
    return $this->companyModel->getCompaniesCount();  
    }
    public function GetAllGraduates(){
    return $this->userModel->getGraduatesCount();  
    }
    public function GetAlljobs(){
    return $this->jobsModel->getJobsCount();  
    }
    public function GetActiveUsers(){
    return $this->userModel->getctiveUsersCount();  
    }
    // function GetEmploymentRates(){
    // $rates = $this->graduateModel->getEmploymentRatesLast6Months();
    // $employmentRates = [];
    // foreach ($rates as $row) {
    //     $employmentRates[$row->month] = (int)$row->total;
    // }
    // return $employmentRates;
    // }
    // ====================================================
    function GetEmploymentRates(){
    $rates = $this->graduateModel->getEmploymentRatesLast6Months();
    $employmentRates = [];

    // إنشاء آخر 6 أشهر بقيم 0
    for ($i = 5; $i >= 0; $i--) {
        $month = date('F', strtotime("-$i month"));
        $employmentRates[$month] = 0;
    }

    // إذا لا يوجد بيانات → بيانات تجريبية
    if (empty($rates)) {
        foreach ($employmentRates as $month => $val) {
            $employmentRates[$month] = rand(10, 80);
        }
    } else {
        // تعبئة البيانات الحقيقية
        foreach ($rates as $row) {
            $employmentRates[$row->month] = (int)$row->total;
        }
    }

    return $employmentRates;
}
    // ====================================================
//     function GetNewRegistrations() {
    
//     $rows = $this->graduateModel->getNewRegistrationsLast6Months();

//     $months = [];
//     $graduates = [];
//     $companies = [];

    
//     for ($i = 5; $i >= 0; $i--) {
//         $monthName = date('F', strtotime("-$i month")); 
//         $months[] = $monthName;
//         $graduates[$monthName] = 0; 
//         $companies[$monthName] = 0;
//     }

  
//     foreach ($rows as $row) {
//         $graduates[$row->month_name] = (int)$row->graduates;
//         $companies[$row->month_name] = (int)$row->companies;
//     }

//     return [
//         'months' => $months,
//         'graduates' => $graduates,
//         'companies' => $companies
//     ];
// }
function GetNewRegistrations() {

    $rows = $this->graduateModel->getNewRegistrationsLast6Months();

    $months = [];
    $graduates = [];
    $companies = [];

    // إنشاء الأشهر
    for ($i = 5; $i >= 0; $i--) {
        $monthName = date('F', strtotime("-$i month"));
        $months[] = $monthName;
        $graduates[$monthName] = 0;
        $companies[$monthName] = 0;
    }

    // إذا لا يوجد بيانات → استخدم بيانات افتراضية
    if (empty($rows)) {
        foreach ($months as $month) {
            $graduates[$month] = rand(10, 50);
            $companies[$month] = rand(5, 30);
        }
    } else {
        // تعبئة البيانات الحقيقية
        foreach ($rows as $row) {
            $graduates[$row->month_name] = (int)$row->graduates;
            $companies[$row->month_name] = (int)$row->companies;
        }
    }

    return [
        'months' => $months,
        'graduates' => $graduates,
        'companies' => $companies
    ];
}



//  user managment functions 
// get all users 
public function GetAllUsers()  {
    return $this->userModel->getAllUsers();
}

public function AddUser() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // جلب البيانات من الفورم
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'role_id' => $_POST['role_id']
            ];

            // calling adduser function from model 
            if($this->userModel->addUser($data)) {
                $_SESSION['flash_success'] = "تمت إضافة المستخدم بنجاح!";
            } else {
                $_SESSION['flash_error'] = "حدث خطأ أثناء إضافة المستخدم!";
            }

            // إعادة التوجيه لصفحة إدارة المستخدمين
            header("Location: " . BASE_URL . "admin/userManagment");
            exit;
        }
    }
public function UpdateUser($id) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $data = [
            'id' => $id,
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'role_id' => $_POST['role_id'],
        ];

        if($this->userModel->updateUser($data)){
            $_SESSION['flash_success'] = "تم التعديل بنجاح";
        } else {
            $_SESSION['flash_error'] = "حدث خطأ";
        }

        header("Location: " . BASE_URL . "admin/userManagment");
        exit;
    }
}
public function DeleteUser($id){
    if($this->userModel->deleteUser($id)){
        $_SESSION['flash_success'] = "تم حذف المستخدم بنجاح";
    } else {
        $_SESSION['flash_error'] = "حدث خطأ أثناء الحذف";
    }

    // إعادة التوجيه لصفحة إدارة المستخدمين
    header("Location: " . BASE_URL . "admin/userManagment");
    exit;
}

// roles & permessions page functions
    public function GetAllRoles()  {
        return $this->roleModel->getAllRoles();
    }
    public function AddRole(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = trim($_POST['role_name']);

        if($this->roleModel->addRole($name)){
            $_SESSION['flash_success'] = "تم إضافة الدور";
        } else {
             $_SESSION['flash_error'] = "هذا الدور موجود مسبقًا";
        }

        header("Location: " . BASE_URL . "admin/rolesPermetion");
        exit;
    }
}
public function UpdateRole($id){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = trim($_POST['role_name']);

        if($this->roleModel->updateRole($id, $name)){
            $_SESSION['flash_success'] = "تم تعديل الدور";
        } else {
             $_SESSION['flash_error'] = "هذا الدور موجود مسبقًا";
        }

        header("Location: " . BASE_URL . "admin/rolesPermetion");
        exit;
    }
}
public function DeleteRole($id){

    if($this->roleModel->deleteRole($id)){
        $_SESSION['flash_success'] = "تم حذف الدور";
    } else {
        $_SESSION['flash_error'] = "لا يمكن حذف الدور لأنه مرتبط بمستخدمين";
    }

    header("Location: " . BASE_URL . "admin/rolesPermetion");
    exit;
}

// departments page functions 
function GetAllDepartments() {
    return $this->departmentModel->getDepartmentsCount();
}
function GetAllColleges()  {
    return $this->collegesModel->getCollegesCount();
}
function GetAllMajors()  {
    return $this->majorsModel->getMajorsCount();
}
function ShowDepartments()  {
    return $this->departmentModel->getAllDepartments();
}
// public function addCollege(){
//     if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         $data = [
//             'name' => trim($_POST['name']),
//             'description' => trim($_POST['description'])
//         ];

//         if($this->collegesModel->addCollege($data)){
//             $_SESSION['flash_success'] = "تمت إضافة الكلية بنجاح!";
//         } else {
//             $_SESSION['flash_error'] = "حدث خطأ أثناء إضافة الكلية!";
//         }

//         header("Location: " . BASE_URL . "admin/departments");
//         exit;
//     }
// }
public function addCollege(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $data = [
            'name' => trim($_POST['name']),
            'description' => trim($_POST['description'])
        ];

        if($this->collegesModel->addCollege($data)){
            $_SESSION['flash_success'] = "تمت إضافة الكلية بنجاح!";
        } else {
            $_SESSION['flash_error'] = "هذه الكلية موجودة مسبقًا أو حدث خطأ!";
        }

        header("Location: " . BASE_URL . "admin/departments");
        exit;
    }
}
public function GetColleges(){
   return $this->collegesModel->getAllColleges();
}
}