<?php
class NotificationsModel extends Model{
    public function __construct()
    {
        return parent::__construct();
    }
   
    public function getNotificationsCount($user_id) {
    $this->db->query("
        SELECT COUNT(*) AS total
        FROM notifications
        WHERE reciver_id = :user_id");
    $this->db->bind(':user_id', (int)$user_id);
    return $this->db->single();
}
 public function getGraduateNotifications($user_id) {
        $this->db->query("
            SELECT n.*
            FROM notifications n
            WHERE n.reciver_id = :user_id
            ORDER BY n.created_at DESC
        ");
        $this->db->bind(':user_id', (int)$user_id);
        return $this->db->resultSet();
    }
    public function createNotification($data){
       $this->db->query(
        "INSERT INTO notifications (sender_id, reciver_id, title, message, created_at) 
         VALUES (:sender_id, :reciver_id, :title, :message, NOW())"
       );
       $this->db->bind(':sender_id', (int)$data["sender"]);
       $this->db->bind(':reciver_id', (int)$data["reciver"]);
       $this->db->bind(':title',$data["title"]);
       $this->db->bind(':message',$data["message"]);
       return $this->db->execute();   
    }
}