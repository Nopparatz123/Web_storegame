<?php
    require_once './backend/config/db.php'; 

    class Data{
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getCon();
        }

        public function getCount($table){
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM $table");
            $stmt->execute();
            $allUserCount = $stmt->fetchColumn();
            return $allUserCount;
        }

        public function getAll($table){
            $stmt = $this->conn->prepare("SELECT * FROM $table");
            $stmt->execute();
            $all = $stmt->fetchAll();
            return $all;
        }
    }

?>