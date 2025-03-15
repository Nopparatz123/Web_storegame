<?php
    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'storegame';
        private $conn = '';
        
        public function __construct (){
            try{
                $this->conn = new PDO(mysql:host=$this->host,db=$this->db; $this->user,$this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo " Error connect to database!! : " .$e->getMessage();
            }
            return $this->conn;
        }
    }

?>