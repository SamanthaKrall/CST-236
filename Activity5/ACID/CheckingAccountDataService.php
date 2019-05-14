<?php
require_once 'Autoloader.php';
class CheckingAccountDataService {
    private $conn;
    public function __construct(mysqli $conn) {
        $this->conn = $conn;
    }
    function getBalance() {
        $sql = "SELECT BALANCE FROM checking";
        $result = $this->conn->query($sql);
        if($result->num_rows == 0){
            return -1;
        } else {
            $row = $result->fetch_assoc();
            $balance = $row['BALANCE'];
            return $balance;
        }
    }
    function updateBalance($balance){
        $sql = "UPDATE checking SET BALANCE = $balance";
        if($this->conn->query($sql) == true){
            return 1;
        } else {
            return 0;
        }
    }
}