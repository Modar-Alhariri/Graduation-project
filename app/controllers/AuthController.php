<?php
class AuthController extends controller{
    private $userModel;

     public function __construct()
     {
        // load user model 
       $this->userModel=$this->model('User');
     }
    //  ############# login ################
    public function login() {
       
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $user = $this->userModel->FindByEmail($email);
            
            if ($user && password_verify($password, $user->password)) {
               
                $role =$this->userModel->FindRole($user->role_id);
                
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['name']    = $user->name;
                $_SESSION['role']    = $role->role_name;

                
                header("Location: " . BASE_URL . $_SESSION['role'] ."/dashboard");
                exit; 

            } else {
                die(" enter your information correctly  ");
            }

        } else {
            
            $this->view('auth/login');
        }
    }
    // ############# Regiser ##############
    public function register()  {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'name' => trim($_POST['fullname']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'role_id' => trim($_POST['role_id']) // تعيين role يدوي (مثلاً 1 = Admin أو Graduate)
            ];

            // تحقق تطابق كلمة المرور
            if ($data['password'] !== $data['confirm_password']) {
                die("كلمة المرور غير متطابقة");
            }

            // تحقق من وجود البريد مسبقًا
            if ($this->userModel->FindByEmail($data['email'])) {
                die("البريد الإلكتروني مستخدم مسبقًا");
            }

            // تشفير كلمة المرور
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            if ($this->userModel->Register($data)) {
                header("Location: " . BASE_URL . "Auth/login");
                exit;
            } else {
                die("حدث خطأ أثناء التسجيل");
            }

        } else {
            
            $this->view('auth/register');
        }
    }
     

    public function logout()  {
        $this->view("auth/logout");
    }
}