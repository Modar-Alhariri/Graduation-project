<?php
/*
 Controller.php

Base controller class.

All controllers extend this class.

Contains helper methods like:

$this->view();


to load views.
 */
require_once 'app/config/Config.php';
class Controller
{
    public function model($model)
    {
        require_once 'app/models/' . $model . '.php';
        return new $model();
    }

    // public function view($view, $data = [])
    // {
       
    //     extract($data);

    //     // base path for views 
    //     $basePath = 'app/views/'; 
         
    //     $BASE_URL=BASE_URL;
        
    //     // load selected view
    //     if (file_exists($basePath . $view . '.php')) {
    //         require_once $basePath . $view . '.php';
    //     } else {
    //         require_once $basePath . '404.php';
    //     }
    // }

    public function view($view, $data = [])
{
    $basePath = 'app/views/';
    $BASE_URL = BASE_URL;

    // تحميل اللغة تلقائيًا
    $langCode = $_SESSION['lang'] ?? 'en';
    $langFile = __DIR__ . "/../../assets/lang/$langCode.php"; // عدّل المسار حسب مشروعك
    $lang = file_exists($langFile) ? require $langFile : [];

    // أضف $lang للبيانات المرسلة للـ view
    $data['lang'] = $lang;

    // استخراج البيانات
    extract($data);

    // تحميل الصفحة
    if (file_exists($basePath . $view . '.php')) {
        require $basePath . $view . '.php';
    } else {
        require $basePath . '404.php';
    }
}
}
