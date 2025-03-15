<?php
    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $dbname = 'storegame';
        private $conn = '';
        
        public function __construct (){
            try{
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user,$this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                echo 1;
            }catch(PDOException $e){
                echo " Error connect to database!! : " .$e->getMessage();
            }
        }

        public function getCon(){
            return $this->conn;
        }
    }

?>