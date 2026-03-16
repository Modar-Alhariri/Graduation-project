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

    public function view($view, $data = [])
    {
       
        extract($data);

        // base path for views 
        $basePath = 'app/views/'; 
         
        $BASE_URL=BASE_URL;
        
        // load selected view
        if (file_exists($basePath . $view . '.php')) {
            require_once $basePath . $view . '.php';
        } else {
            require_once $basePath . '404.php';
        }
    }
}
