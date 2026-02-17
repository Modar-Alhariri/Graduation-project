<?php
/*
app/core
App.php

Responsible for Routing.

Reads the URL.

Determines:

Controller

Method

Parameters */

class App
{
    protected $controller = 'HomeController';
    protected $method     = 'index';
    protected $params     = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // select conroller 

        if (!empty($url[0])) {

            // auth  -> AuthController
            $controllerName = ucfirst(strtolower($url[0])) . 'Controller';

            if (file_exists('app/controllers/' . $controllerName . '.php')) {
                $this->controller = $controllerName;
                unset($url[0]);
            } else {
                $this->error404();
                return;
            }
        }

        require_once 'app/controllers/' . $this->controller . '.php';

        if (!class_exists($this->controller)) {
            $this->error404();
            return;
        }

        $this->controller = new $this->controller;

        // select method in controller 

        if (isset($url[1])) {

            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                $this->error404();
                return;
            }
        }

        //  get parameters for method

        $this->params = $url ? array_values($url) : [];

        // call controller method

        call_user_func_array(
            [$this->controller, $this->method],
            $this->params
        );
    }

    // split URL 
    private function parseUrl()
    {
        if (isset($_GET['url'])) {

            return explode(
                '/',
                filter_var(
                    rtrim($_GET['url'], '/'),
                    FILTER_SANITIZE_URL
                )
            );
        }

        return [];
    }

    //  error haneling 
    protected function error404()
    {
        require_once 'app/views/404.php';
        exit;
    }
}
