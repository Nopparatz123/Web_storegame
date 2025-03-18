<?php
    require_once './backend/config/db.php'; 

    class Classz{
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->getCon();
        }

        // เพิ่มประกาศ
        public function AddAnnounce($texts){
            $stmt = $this->conn->prepare("INSERT INTO announce(texts, dates) VALUES(?, NOW())");
            $stmt->execute([$texts]);
            return $stmt;
        }

        // เพิ่มสินค้า
        // public function addProduct($name, $description, $price, $category_id, $image){
        //     $stmt = $this->conn->prepare("INSERT INTO product(product_name, description, product_price, category_id, image, date, status)VALUE()");
        //     $stmt->execute([]);
        // }

        // เปลี่ยนรหัสผ่าน
        public function changePassword($oldpassword, $newpassword, $id){
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$id]);
            $user = $stmt->fetch();

            if($user && password_verify($oldpassword, $user['password'])){
                $newPasswordhash = password_hash($newpassword, PASSWORD_DEFAULT);

                $update_password =  $this->conn->prepare("UPDATE users SET password = ? WHERE id = ?");
                $update_password->execute([$newPasswordhash, $id]);
            }else{
            }
        }
    }
?>