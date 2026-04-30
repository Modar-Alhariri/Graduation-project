<?php
class GraduateController extends ProtectionController{
    private $userModel ;
    private $isCopleted ;
    private $jobsModel;
    private $graduateModel;
    private $majors;
    private $applications;
     private $notifications;
     private $graduateSkillsModel ;
     private $coursesModel;
    public function __construct()
    {
       $this->jobsModel=$this->model("JobsModel");
       $this->userModel= $this->model('User');
      $this->graduateModel= $this->model('GraduateModel');
      $this->majors=$this->model("MajorsModel");
      $this->applications=$this->model("Applications");
      $this->notifications=$this->model("NotificationsModel");
      $this->graduateSkillsModel=$this->model("SkillsModel");
         $this->coursesModel=$this->model("CoursesModel");
       return parent::__construct();
    }
    function profileComplete()  {
        $info=[];
        $info["majors"]=$this->majors->getAllMajors();
        $this->view("graduate/profileComplete", $info);
    }
    function dashboard()  {
        $_SESSION["graduate_id"]=$this->graduateModel->getGraduateIdByUserId($_SESSION["user_id"]);
        $info=[];
        $info["totalJobs"]=$this->GetAllJobs();
        $info["myApplication"]=$this-> GetMyApplicationsCount();
        $info["notificationsCount"]=$this->GetNotificationsCount();
        $info["notifications"]=$this->GetNotifications();
        $info["suitJobs"]=$this->suitableJobs();
        $this->view("graduate/dashboard",$info);
    }
    function jobs()  {
       $info=[];
       $info["jobs"]=$this->PostedJobs();
       $info["myapplications"]=$this-> GetMyApplications();
       $this->view("graduate/jobs", $info);
    }
    function myApplecations()  {
        $info=[];
        $info["myapplications"]=$this-> GetMyApplicationsCount();
        $info["accepted"]=$this->GetAcceptedApplications();
        $info["applications"]=$this-> GetMyApplications();
       $this->view("graduate/myApplecations", $info);
    }
    function profileManagement()  {
       $info=[];
       $info["myInfo"]=$this->graduateModel->getGraduateInfo($_SESSION["user_id"]);
       $info["skills"]=$this->graduateSkillsModel->getGraduateSkills($_SESSION["graduate_id"]);
       $info["courses"]=$this->GetCourses();
       $this->view("graduate/profileManagement", $info);
    }
    function cvBuilder()  {
    
      $this->view("graduate/cvBuilder");
    }
    function surveys()  {
      $this->view("graduate/surveys");
    }
    function GetAllJobs()  {
      return $this->jobsModel->getJobsCount();
    }
   // function to insert the graduate profile data into the database 
    function ConmpleteGraduateProfile()  {
     if($_SERVER['REQUEST_METHOD']=="POST"){
      $data=[];
      $data["user_id"]=$_SESSION["user_id"];
      $data["full_name"]=$_SESSION["name"];
      $data["major_id"]=trim($_POST["major_id"]);
      $data["graduate_id"]=trim($_POST["graduate_id"]);
      $data["graduation_year"]=trim($_POST["graduation_year"]);
      $data["gpa"]=trim($_POST["gpa"]);
      $data["phone"]=trim($_POST["phone"]);
      $data["address"]=trim($_POST["address"]);
      $data["employment_status"]=trim($_POST["employment_status"]);
      $data["employment_date"]=trim($_POST["employment_date"]);
      if($this->graduateModel->completeGraduateProfile($data)){
         header("location:".BASE_URL."Graduate/dashboard");
         exit();
      }
      else{
         header("location:".BASE_URL."Graduate/profileComplete");
         exit();
      }

   }

}
   function getMyApplicationsCount()  {
      return $this->applications->getMyApplicationsCount($_SESSION["graduate_id"]);
    }
   function GetNotificationsCount()  {
      return $this->notifications->getNotificationsCount($_SESSION["user_id"]);
    }
    function GetNotifications()  {
        return $this->notifications->getGraduateNotifications($_SESSION["user_id"]);
     }
   function PostedJobs()  {
      return $this->jobsModel->getPostedJobs();
    }
   function GetMyApplications()  {
      return $this->applications->getMyApplications($_SESSION["graduate_id"]);
    }
   //  function to insert the application data into the database
  public function apply() {

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $data = [];
        $data["graduate_id"] = trim($_POST["graduate_id"]);
        $data["company_id"] = trim($_POST["company_id"]);
        $data["job_id"] = trim($_POST["job_id"]);
        $option = $_POST["cv_option"] ?? "profile";

        // 🎯 تحديد CV
        if($option === "profile"){

            $user = $this->graduateModel->getCV($_SESSION["user_id"]);

            if(empty($user->cv)){
                $_SESSION["flash_error"] = "لم تقم برفع سيرة ذاتية في ملفك الشخصي، الرجاء رفع سيرة ذاتية أو اختيار رفع سيرة ذاتية جديدة.";
                header("location:" . BASE_URL . "Graduate/jobs");
                exit();
            }

            $data["cv"] = $user->cv;

        } else {

            // لازم اسم الحقل يكون cv_file
            if(empty($_FILES["cv_file"]["name"])){
                header("location:" . BASE_URL . "Graduate/jobs");
                exit();
            }

            $file = $_FILES["cv_file"];

            // 🔒 تحقق نوع الملف
            if($file["type"] !== "application/pdf"){
               $_SESSION["flash_error"] = "الملف المرفوع غير صالح، الرجاء رفع ملف PDF فقط.";
                header("location:" . BASE_URL . "Graduate/jobs");
                exit();
            }

            // 📂 رفع
            $cvName = uniqid() . ".pdf";
            $destination = "uploads/cvs/" . $cvName;

            move_uploaded_file($file["tmp_name"], $destination);

            $data["cv"] = $destination;
        }

        // 🧠 الحالة
        $data["status"] = "pending";

        // 💾 حفظ
        if($this->applications->apply($data)){
            $_SESSION["flash_success"] = "تم إرسال الطلب بنجاح.";
            header("location:" . BASE_URL . "Graduate/jobs");
            exit();
        } else {
            $_SESSION["flash_error"] = "تم تقديم الطلب مسبقا";
            header("location:" . BASE_URL . "Graduate/jobs");
            exit();
        }
    }
}

public function GetAcceptedApplications() {
    return $this->applications->getAcceptedApplicationsCount($_SESSION["graduate_id"]);
}
// function to edit the application data in the database and delete previous cv file if exist and upload new one

public function EditApplication() {

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $data = [];
        $application_id = trim($_POST["application_id"]);
        $data["graduate_id"] = trim($_POST["graduate_id"]);
        $data["company_id"] = trim($_POST["company_id"]);
        $data["job_id"] = trim($_POST["job_id"]);

        $option = $_POST["cv_option"] ?? "profile";

        if($option === "profile"){

            $user = $this->graduateModel->getCV($_SESSION["graduate_id"]);

            if(empty($user->cv)){
                $_SESSION["flash_error"] = "لا يوجد CV في ملفك.";
                header("location:" . BASE_URL . "Graduate/myApplecations");
                exit();
            }

            $data["cv"] = $user->cv;

        } else {

            if(!empty($_FILES["cv_file"]["name"])){

                $file = $_FILES["cv_file"];

                $ext = pathinfo($file["name"], PATHINFO_EXTENSION);

                if(strtolower($ext) !== "pdf"){
                    $_SESSION["flash_error"] = "PDF فقط.";
                    header("location:" . BASE_URL . "Graduate/myApplecations");
                    exit();
                }

                $cvName = uniqid() . ".pdf";
                $destination = "uploads/cvs/" . $cvName;

                move_uploaded_file($file["tmp_name"], $destination);

                $data["cv"] = $destination;
            }
        }

        $data["status"] = "pending";

        if($this->applications->editApplication($data, $application_id)){
            $_SESSION["flash_success"] = "تم تعديل الطلب بنجاح.";
        } else {
            $_SESSION["flash_error"] = "فشل التعديل.";
        }

        header("location:" . BASE_URL . "Graduate/myApplecations");
        exit();
    }
}
public function deleteApplication($application_id) {
    // Implementation for deleting an application  
    if($this->applications->deleteApplication($application_id)){
        $_SESSION["flash_success"] = "تم حذف الطلب بنجاح.";
        header("location:" . BASE_URL . "Graduate/myApplecations");
        exit();
    } else {
        $_SESSION["flash_error"] = "حدث خطأ أثناء حذف الطلب.";
        header("location:" . BASE_URL . "Graduate/myApplecations");
        exit();
    }

}

// function to view cv  [ get the cv path from the graduate table and display it in new tab in the browser]
public function viewCV() {
    $cv_info = $this->graduateModel->getCV_info($_SESSION["user_id"]);
    if(!empty($cv_info->cv)){
        header("Content-Type: application/pdf");
        readfile($cv_info->cv);
        exit();
    } else {
        $_SESSION["flash_error"] = "لا يوجد CV لعرضه.";
        header("location:" . BASE_URL . "Graduate/cvBuilder");
        exit();
    }
}
// function to download cv file
public function downloadCV() {
    $cv_info = $this->graduateModel->getCV_info($_SESSION["user_id"]);
    if(!empty($cv_info->cv)){
        header("Content-Type: application/pdf");
        header("Content-Disposition: attachment; filename=cv.pdf");
        readfile($cv_info->cv);
        exit();
    } else {
        $_SESSION["flash_error"] = "لا يوجد CV لتحميله.";
        header("location:" . BASE_URL . "Graduate/cvBuilder");
        exit();
    }
}
public function uploadcv(){

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $graduate_id = $_POST['graduate_id'];

        if(!empty($_FILES["cv_file"]["name"])){

            $file = $_FILES["cv_file"];

            // 📌 تحقق من الحجم
            if($file["size"] > 2 * 1024 * 1024){
                $_SESSION["flash_error"] = "حجم الملف كبير (الحد 2MB).";
                header("location:" . BASE_URL . "Graduate/cvBuilder");
                exit();
            }

            // 📌 تحقق من نوع الملف
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $file["tmp_name"]);
            finfo_close($finfo);

            if($mime !== "application/pdf"){
                $_SESSION["flash_error"] = "يجب رفع ملف PDF فقط.";
                header("location:" . BASE_URL . "Graduate/cvBuilder");
                exit();
            }

            // 📌 تأكد من وجود المجلد
            if(!is_dir('uploads/cvs')){
                mkdir('uploads/cvs', 0775, true);
            }

            // 📌 اسم الملف
            $cvName = "cv_" . time() . "_" . uniqid() . ".pdf";
            $destination = "uploads/cvs/" . $cvName;

            // 📌 رفع الملف
            if(move_uploaded_file($file["tmp_name"], $destination)){

                // 📌 حذف القديم بعد النجاح
                $current = $this->graduateModel->getGraduateIdByUserId($_SESSION['user_id']);

                if(!empty($current->cv_file) && file_exists($current->cv_file)){
                    unlink($current->cv_file);
                }

                // 📌 تحديث DB
                if($this->graduateModel->updateCV($_SESSION['user_id'], $destination)){
                    $_SESSION["flash_success"] = "تم رفع السيرة الذاتية بنجاح.";
                } else {
                    $_SESSION["flash_error"] = "تم رفع الملف لكن فشل حفظه في قاعدة البيانات.";
                }

            } else {
                $_SESSION["flash_error"] = "فشل رفع الملف.";
            }

        } else {
            $_SESSION["flash_error"] = "لم يتم اختيار ملف.";
        }

        header("location:" . BASE_URL . "Graduate/cvBuilder");
        exit();
    }
}
public function UpdateMyInfo(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $data=[];
        $data["user_id"]=$_SESSION["user_id"];
        $data["full_name"]=trim($_POST["full_name"]);
        $data["email"]=trim($_POST["email"]);
        $data["phone"]=trim($_POST["phone"]);
        $data["address"]=trim($_POST["address"]);

        if($this->graduateModel->updateGraduateProfile($data)){
            $_SESSION['flash_success'] = "تم تحديث الملف الشخصي بنجاح!";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
         else{
            $_SESSION['flash_error'] = "حدث خطأ أثناء تحديث الملف الشخصي.";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
    }
    
}
// function to add skill into skill table then link it with graduate id in graduate_skill table after check if the skill already exist or not if exist just link it with graduate id if not exist add it to skill table then link it with graduate id in graduate_skill table
public function AddSkill(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $data=[];
        $data["skill_name"]=trim($_POST["skill_name"]);
        $data["graduate_id"]=$_SESSION["graduate_id"];
        if($this->graduateSkillsModel->addSkill($data)){
            $_SESSION['flash_success'] = "تم إضافة المهارة بنجاح!";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
         else{
            $_SESSION['flash_error'] = "حدث خطأ أثناء إضافة المهارة.";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }

}
}
public function DeleteSkill(){
    $data=[];
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $skill_id=trim($_POST["skill_id"]);
        $data["graduate_id"]=$_SESSION["graduate_id"];
        $data["skill_id"]=$skill_id;
        if($this->graduateSkillsModel->deleteSkill($data)){
            $_SESSION['flash_success'] = "تم حذف المهارة بنجاح!";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
         else{
            $_SESSION['flash_error'] = "حدث خطأ أثناء حذف المهارة.";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
}
}
public function AddCourse(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $data=[];
        $data["title"]=trim($_POST["course_name"]);
        $data["graduate_id"]=$_SESSION["graduate_id"];
        $data["entity"]=trim($_POST["entity_name"]);
        $data["date"]=trim($_POST["date"]);
        if($this->coursesModel->addCourse($data)){
            $_SESSION['flash_success'] = "تم إضافة الدورة بنجاح!";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
         else{
            $_SESSION['flash_error'] = "حدث خطأ أثناء إضافة الدورة.";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
}
}
public function GetCourses(){
    return $this->coursesModel->getCoursesByGraduateId($_SESSION["graduate_id"]);

}
public function DeleteCourse(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $course_id=trim($_POST["course_id"]);
        if($this->coursesModel->deleteCourse($course_id)){
            $_SESSION['flash_success'] = "تم حذف الدورة بنجاح!";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
         else{
            $_SESSION['flash_error'] = "حدث خطأ أثناء حذف الدورة.";
            header("location:".BASE_URL."Graduate/profileManagement");
            exit();
         }
  }
 }
//  get suitable jobs for graduate based on his  and skills by get the graduate  skills then get the jobs that match with the graduate skills and return them to the view
//  public function getSuitableJobs(){
//     $skills = $this->graduateSkillsModel->getGraduateSkills($_SESSION["graduate_id"]);
//     $skill_ids = array_map(function($skill) {
//         return $skill->id;
//     }, $skills);
//     return $this->jobsModel->getJobsBySkills($skill_ids);
    
//  }
  public function suitableJobs() {
     // fetch graduate skills
     $graduateSkills=$this->graduateSkillsModel->getGraduateSkills($_SESSION["graduate_id"]);
       $graduateSkills = array_map(function($s) {
        return strtolower(trim($s->name));
        }, $graduateSkills);
        // fetch jobs
        $jobs=$this->jobsModel->getAllAvailableJobs();
        $suitableJobs = [];
        foreach ($jobs as $job) {

        // تحويل skills من string إلى array
        $jobSkills = array_map(function($s) {
            return strtolower(trim($s));
        }, explode(',', $job->skills));

        // مقارنة
        $matches = array_intersect($graduateSkills, $jobSkills);

        if (!empty($matches)) {

            $job->match_count = count($matches);

            $suitableJobs[] = $job;
    }
  }


    usort($suitableJobs, function($a, $b) {
        return $b->match_count <=> $a->match_count;
    });

  return $suitableJobs;
}

  
}