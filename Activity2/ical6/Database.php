<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Database {
    private $server = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "ical17";

    function getConnection() {
        $conn = new mysqli($this->server, $this->username, $this->password, $this->database);  
        
        if ($conn->connect_error) {
            echo "Connection Fails " . $conn->connect_error . "<br>";
        } else {
           return $conn; 
        }
    }
}
?>