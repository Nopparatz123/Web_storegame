<?php
    require_once './backend/config/db.php'; 

    class Classz{
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getCon();
        }

        public function AddAnnounce($texts){
            $stmt = $this->conn->prepare("INSERT INTO announce(texts)VALUE(?)");
            $stmt->execute([$texts]);
            return $stmt;
        }
    }
?>