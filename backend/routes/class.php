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
        public function addProduct($name, $description, $price, $category_id, $image){
            $stmt = $this->conn->prepare("INSERT INTO product(product_name, description, product_price, category_id, image, date, status)VALUE()");
            $stmt->execute([]);
        }
    }
?>