<?php
    require_once 'db.php';
    $db = new Database();
    $conn = $db->getCon();
    
    // function
    class UserController {
        private $conn;
        public function __construct($conn) {
            $this->conn = $conn;
        }
        
        public function getuserAll($table){
            $stmt = $this->conn->prepare("SELECT * FROM $table");
            $stmt->execute();
            $getuser = $stmt->fetchAll();
            return $getuser;
        }

        public function RegisterUser($username, $password, $email) {
            try {
                $checkUser = $this->getuserAll('users');
                foreach($checkUser as $user){
                    if($user['email'] == $email){
                        echo "เมลนี้ถูกสมัครไปแล้ว";
                        return;
                    }
                }
                $stmt = $this->conn->prepare("INSERT INTO users(username, password, email)VALUES(?,?,?)");
                $stmt->execute([$username, $password, $email]);
            } catch (PDOException $e) {
                echo "เกิดข้อผิดพลาด : " . $e->getMessage();
            }
        }

        public function login($username,$password){
            $checkUser = $this->getuserAll('users');

            foreach($checkUser as $data){
                if($data && password_verify($password, $data['password'])){
                    $_SESSION['user_login'] = $data['id'];
                    $_SESSION['username'] = $data['username'];
                    echo "เข้าสำเร็จ";
                }else{
                    echo "เกิดข้อผิดพลาด";
                }
            }
        }
    }
?>