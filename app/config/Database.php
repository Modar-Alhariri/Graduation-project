<?php
class Database {

    private $host = "localhost";
    private $dbname = "gts_db";
    private $user = "root";
    private $pass = "";
    public $conn;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->pass
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return "database connected successfully ";

        } catch (PDOException $e) {
            die("Connection Error: " . $e->getMessage());
            
        }
    }
}
