<?php
require_once 'Autoloader.php';
require 'Database.php';
class UserDataService {
    function findByFirstName($pattern){
        $db = new Database();
        $conn = $db->getConnection();
        $sql = "SELECT id, user_name, user_password, user_role, first_name, last_name, email, phone_number, address, city, state, zip_code, country FROM users WHERE first_name LIKE '%$pattern%' ";
        $result = $conn->query($sql);
        if($result->num_rows == 0){
            $conn->close();
            return null;
        }
        $index = 0;
        $users = array();
        while($row = $result->fetch_assoc()){
            $users[$index] = array($row['id'], $row['user_name'], $row['user_password'], $row['user_role'], $row['first_name'], $row['last_name'], $row['email'], $row['phone_number'], $row['address'], $row['city'], $row['state'], $row['zip_code'], $row['country']);
            ++$index;
        }
        $conn->close();
    }
}