<?php
class MajorsModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function getMajorsCount(){
    $this->db->query("SELECT COUNT(*) as total FROM majors");
    return $this->db->single()->total;
}
}