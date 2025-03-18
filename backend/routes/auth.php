<?php
    require_once './backend/config/db.php';

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
                    echo "อีเมล์ กับ ชื่อผู้ใช้งานซ้ำ";
                    return;
                }else{
                    // ถ้าไม่ซ้ำ ก็ letgoo
                    $stmt = $this->conn->prepare("INSERT INTO users(username, password, email)VALUES(?, ?, ?)");
                    $stmt->execute([$username, $password, $email]);
                    header('Location: /Web_storegame/login');
                    exit();
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
                    header('Location: /Web_storegame/home');
                    exit();
               }else{
                    echo "เกิดข้อผิดพลาด : ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
               }
            }catch(PDOException $e){
                echo "เกิดข้อผิดพลาด : " .$e->getMessage();
            }
        }        

    }
?>