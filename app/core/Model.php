<?php
/*
 Model.php

Base model class.

Handles database connection logic.

All models extend this class.
 */
class Model{
    protected $db;
    public function __construct()
    {
       $this->db=new Database();
    
    }
}