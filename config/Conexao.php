<?php 
    class conexao{
        public static function conectar(){
            $servername = "localhost";
            $username = "root";
            $password = "root";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=moveKids", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
