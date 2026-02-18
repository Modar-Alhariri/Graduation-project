<?php

class HomeController extends Controller{
    public function index (){
        $lang = Language::load();
       $this->view("home/home",['lang'=>$lang]);
    }
}