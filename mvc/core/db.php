<?php
    class Db{
        private $mysqli;
        function __construct(){///
            $this->mysqli=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die ;
            $this->mysqli->set_charset('utf8mb4');
        }
        
        public function queryFirst($sql){
            return $this->mysqli->query($sql)->fetch_assoc();
        }

        public function queryAll($sql){
            return $this->mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
        }

        public function query($sql){
            return $this->mysqli->query($sql);
        }

        function __destruct(){ ////
            $this->mysqli->close();
        }
    }
?>