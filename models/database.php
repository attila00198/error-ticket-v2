<?php
include "config/config.php";

class Database {
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;

    public function __construct() {
        $this->db_host = DB_HOST;
        $this->db_user = DB_USER;
        $this->db_pass = DB_PASS;
        $this->db_name = DB_NAME;
    }

    protected function connect() {
        $dsn = "mysql:dbhost={$this->db_host};dbname={$this->db_name}";
        try {
            $conn = new PDO($dsn, $this->db_user, $this->db_pass);
            return $conn;
        } catch (PDOException $e) {
            echo '<span class="alert alert-danger">Hiba lépett fel az adatbázishoz való kapcsolódás során!<br>'.$e->getMessage().'</span>';
            die();
        }
    }
}