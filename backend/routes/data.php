<?php
    require_once './backend/config/db.php'; 

    class Data{
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getCon();
        }

        public function getAllUser(){
            $stmt = $this->conn->prepare("SELECT * FROM users");
            $stmt->execute();
            $alluser = $stmt->fetchAll();
            return $alluser;
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

        public function getAnnounce2(){
            $stmt = $this->conn->prepare("SELECT * FROM announce ORDER BY id DESC LIMIT 3");
            $stmt->execute();
            $announce2 = $stmt->fetchAll();
            return $announce2;
        }

        public function deleteAnnounce($id){
            $stmt = $this->conn->prepare("DELETE FROM announce WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt;
        }

        public function getTotalTopup($type = 'all'){
            $where = '';
            if($type === 'today'){
                $where = "WHERE DATE(created_at) = CURDATE()";
            }elseif ($type === 'month') {
                $where = "WHERE YEAR(created_at) = YEAR(CURDATE()) AND MONTH(created_at) = MONTH(CURDATE())";
            }
            $stmt = $this->conn->prepare("SELECT SUM(amount) AS total FROM transactions $where");
            $stmt->execute();
            return $stmt->fetchColumn() ? : 0;
        }
    }

?>