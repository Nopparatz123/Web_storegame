<?php
    require_once './backend/config/db.php';
    require_once './backend/function.php';

    class Auth {
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getCon();
        }

        // action register
        public function register($username,$password,$email){
            try{
                $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
                $stmt->execute([$username_email, $username_email]);
                $checkRegister = $stmt->fetch();

                if($checkRegister['email'] == $email || $checkRegister['username'] == $username){
                    alert("error", "มีชื่อผู้ใช้บัญชีนี้แล้ว", "error", "/Web_storegame/home");
                }else{
                    // ถ้าไม่ซ้ำ ก็ letgoo
                    $stmt = $this->conn->prepare("INSERT INTO users(username, password, email)VALUES(?, ?, ?)");
                    $stmt->execute([$username, $password, $email]);
                    alert("Success", "สมัครสมาชิกสำเร็จ", "success", "/Web_storegame/login");
                }

            }catch(PDOException $e){
                echo "เกิดข้อผิดพลาด : " .$e->getMessage();
            }
        }
        // action login
        public function login($username_email, $password){
            try{
               $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
               $stmt->execute([$username_email, $username_email]);
               $user = $stmt->fetch();

               if($user && password_verify($password, $user['password'])){
                    $_SESSION['user_login'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    alert("Success", "เข้าสู่ระบบสำเร็จ", "success", "/Web_storegame/home");
               }else{
                    alert("Error", "ชื่อผู้ใช้งาน หรือ รหัสผ่านไม่ถูกต้อง", "error", "/Web_storegame/login");
               }
            }catch(PDOException $e){
                echo "เกิดข้อผิดพลาด : " .$e->getMessage();
            }
        }        

    }
?>