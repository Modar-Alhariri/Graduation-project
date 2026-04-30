<?php
class CoursesModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    public function addCourse($data){
        $this->db->query("INSERT INTO courses (graduate_id, title, the_entity , gain_in) VALUES (:graduate_id, :course_name, :the_entity, :gain_in)");
        $this->db->bind(":graduate_id", $data["graduate_id"]);
        $this->db->bind(":course_name", $data["title"]);
        $this->db->bind(":the_entity", $data["entity"]);
        $this->db->bind(":gain_in", $data["date"]);
        return $this->db->execute();
    }
    public function getCoursesByGraduateId($graduate_id){
        $this->db->query("SELECT id, title, the_entity, gain_in FROM courses WHERE graduate_id = :graduate_id");
        $this->db->bind(":graduate_id", $graduate_id);
        return $this->db->resultSet();

}
    public function deleteCourse($course_id){
        $this->db->query("DELETE FROM courses WHERE id = :course_id");
        $this->db->bind(":course_id", $course_id);
        return $this->db->execute();
}
}