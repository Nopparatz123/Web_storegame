<?php
    require_once './backend/config/db.php'; 

    
    class Auth {
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getCon();
        }

        
        public function getAll($table){
            $stmt = $this->conn->prepare("SELECT * FROM $table");
            $stmt->execute();
            $all = $stmt->fetchAll();
            return $all;
        }

        public function getRank($table){
            $stmt = $this->conn->prepare("SELECT * FROM $table WHERE `rank` = 1 LIMIT 1");
            $stmt->execute();
            $admin = $stmt->fetch();
            return $admin;
        }        

        // action register
        public function register($username,$password,$email){
            try{
                $getall = $this->getAll("users");
                foreach($getall as $data){
                    if($data['email'] == $email || $data['username'] == $username ){
                        echo "เมลกับชื่อซ้ำ";
                        return;
                    }
                }
                $stmt = $this->conn->prepare("INSERT INTO users(username,password,email)VALUES(?, ? , ?)");
                $stmt->execute([$username,$password,$email]);
            }catch(PDOException $e){
                echo "เกิดข้อผิดพลาด : " .$e->getMessage();
            }
        }
        // action login
        public function login($username, $password){
            try{
                $checkUser = $this->getAll("users");
                foreach($checkUser as $data){
                    if($data && password_verify($password, $data['password'])){ //check login
                        $_SESSION['user_login'] = $data['id'];
                        $_SESSION['username'] = $data['username'];
                        header('Location: /Web_storegame/home');
                        exit();
                    }
                }
            }catch(PDOException $e){
                echo "เกิดข้อผิดพลาด : " .$e->getMessage();
            }
        }

    }
?>