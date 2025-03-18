<?php
    require_once './backend/config/db.php'; 

    class Data{
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getCon();
        }

        public function getUserProfile($session_id) {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$session_id]);
            $userprofile = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($userprofile) {
                return $userprofile;
            } else {
                return null; 
            }
        }
        

        public function getRank($table){
            $stmt = $this->conn->prepare("SELECT * FROM $table WHERE `rank` = 1 LIMIT 1");
            $stmt->execute();
            $admin = $stmt->fetch();
            return $admin;
        }       

        public function getPoint($sesstionId){
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$sesstionId]);
            $point = $stmt->fetch(PDO::FETCH_ASSOC);
            return $point ? $point['point'] : 0;
        }

        public function getCount($table){
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM $table");
            $stmt->execute();
            $allUserCount = $stmt->fetchColumn();
            return $allUserCount;
        }

        public function getAnnounce(){
            $stmt = $this->conn->prepare("SELECT * FROM announce ORDER BY id DESC LIMIT 1");
            $stmt->execute();
            $announce = $stmt->fetch(PDO::FETCH_ASSOC);
            return $announce;
        }
    }

?>