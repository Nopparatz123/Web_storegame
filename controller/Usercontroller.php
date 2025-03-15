<?php
    require_once 'db.php';
    $db = new Database();
    $conn = $db->getCon();
    
    // function
    function RegisterUser($n1, $n2, $n3){
        try{
            $stmt = $conn->prepare("INSERT INTO users($n1, $n2, $n3)VALUES(?,?,?)");
            $stmt->execute([$n1, $n2, $n3]);
        }catch(PDOException $e){
            echo "เกิดข้อผิดพลาด : " .$e->getMessage();
        }
    }
?>