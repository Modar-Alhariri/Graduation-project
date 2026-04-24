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
}