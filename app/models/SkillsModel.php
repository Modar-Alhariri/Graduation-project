<?php
class SkillsModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
    // function to add skill into skill table then link it with graduate id 
    // in graduate_skill table after check if the skill already exist or not if exist just link it with graduate id if not exist add it to skill table then link it with graduate id in graduate_skill table
    public function addSkill($data){
        // check if the skill already exist or not
        $this->db->query("SELECT id FROM skills WHERE name=:name");
        $this->db->bind(":name",$data["skill_name"]);
        $skill=$this->db->single();
        if($skill){
            // link it with graduate id in graduate_skill table
            $this->db->query("INSERT INTO graduate_skills (graduate_id, skill_id) VALUES (:graduate_id, :skill_id)");
            $this->db->bind(":graduate_id",$data["graduate_id"]);
            $this->db->bind(":skill_id",$skill->id);
            return $this->db->execute();
        }else{
            // add it to skill table then link it with graduate id in graduate_skill table
            $this->db->query("INSERT INTO skills (name) VALUES (:name)");
            $this->db->bind(":name",$data["skill_name"]);
            if($this->db->execute()){
                $this->db->query("SELECT id FROM skills WHERE name=:name");
                $this->db->bind(":name",$data["skill_name"]);
                $skill_id=$this->db->single()->id;
                $this->db->query("INSERT INTO graduate_skills (graduate_id, skill_id) VALUES (:graduate_id, :skill_id)");
                $this->db->bind(":graduate_id",$data["graduate_id"]);
                $this->db->bind(":skill_id",$skill_id);
                return $this->db->execute();
            }

        }
    }
    public function deleteSkill($data){
        $this->db->query("DELETE FROM graduate_skills WHERE graduate_id=:graduate_id AND skill_id=:skill_id");
        $this->db->bind(":graduate_id",$data["graduate_id"]);
        $this->db->bind(":skill_id",$data["skill_id"]);
        return $this->db->execute();
    }
    public function getGraduateSkills($graduate_id){
        $this->db->query("SELECT * FROM skills s
                         JOIN graduate_skills gs ON s.id = gs.skill_id
                          WHERE gs.graduate_id = :graduate_id");
        $this->db->bind(":graduate_id",$graduate_id);
        return $this->db->resultSet();
    }
}