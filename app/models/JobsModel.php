<?php
class JobsModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }

     public function getJobsCount(){
    $this->db->query("SELECT COUNT(*) as total FROM jobs");
    return $this->db->single()->total;
    }
}