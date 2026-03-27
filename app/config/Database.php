<?php
class Database {
    private $host = "localhost";
    private $dbname = "gts_db_system";
    private $user = "root";
    private $pass = "";
    private $stmt;
    public $dbh;

    public function __construct() {
        try {
            $this->dbh = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->pass
            );
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("DB Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql) {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value) {
        $this->stmt->bindValue($param, $value);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function resultSet(){
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
}
}