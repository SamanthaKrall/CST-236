<?php
class Database {
    private $dbservername = "localhost";
    private $dbusername = "root";
    private $dbpassword = "root";
    private $dbname = "ecommerce";
    function getConnection() {
        $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if($conn->connect_error){
            die("Connection Failed: " . $conn->connect_error);
        }
        return $conn;
    }
}