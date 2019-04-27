<?php
require_once 'Database.php';
require_once 'Person.php';

class UserDataService {
    
    function findByFirstName($n) {
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE FIRST_NAME LIKE ?");
        //if (!$stmt) {
        //    echo "Something went wrong in the binding process";
        //    exit;
        //}
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        $stmt->execute();
        
        $stmt->store_result();
        $stmt->bind_result($id, $first_name, $last_name);
        $person_array = array();
        while ($person = $stmt->fetch()){
            $p = new Person($id, $first_name, $last_name);
            array_push($person_array, $p);
        }
        return $person_array;
        // $result = $stmt->get_result();
        //if (!$result) {
        //    echo "assume SQL statement has an error";
        //    return null;
        //    exit;
        //}
        //if ($result->num_rows == 0) {
        //    return null;
        //} else {
        //    $person_array = array();
        //    while ($person = $result->fetch_assoc()) {
        //        array_push($person_array, $person);
        //    }
        //    return $person_array;
        //}
    }
    function findByLastName($n) {
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE LAST_NAME LIKE ?");
        if (!$stmt) {
            echo "Something went wrong in the binding process";
            exit;
        }
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        $stmt->execute();
        $result = $stmt->get_result();
        if (!$result) {
            echo "assume SQL statement has an error";
            return null;
            exit;
        }
        if ($result->num_rows == 0) {
            return null;
        } else {
            $person_array = array();
            while ($person = $result->fetch_assoc()) {
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
    function findById($id){
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("SELECT ID, FIRST_NAME, LAST_NAME FROM users WHERE ID = ? LIMIT 1");
        if (!$stmt) {
            echo "Something went wrong in the binding process";
            exit;
        }
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if (!$result) {
            echo "assume SQL statement has an error";
            return null;
            exit;
        }
        if ($result->num_rows == 0) {
            return null;
        } else {
            $person_array = array();
            while ($person = $result->fetch_assoc()) {
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
    function deleteItem($id) {
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("DELETE FROM users WHERE ID = ? LIMIT 1");
        if (!$stmt) {
            echo "Something went wrong in the binding process";
            exit;
        }
        $stmt->bind_param("s", $id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    function updateOne($id, $person) {
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("UPDATE users SET FIRST_NAME = ?, LAST_NAME = ? WHERE ID = ? LIMIT 1");
        if (!$stmt) {
            echo "Something went wrong in the binding process";
            exit;
        }
        $fn = $person->getFirst_name();
        $ln = $person->getLast_name();
        
        $stmt->bind_param("ssi", $fn, $ln, $id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    function findByFirstNameWithAddress() {
        $db = new Database();
        $connection = $db->getConnection();
        $stmt = $connection->prepare("SELECT * FROM users 
            JOIN address
            ON users.ID = address.ID
            WHERE FIRST_NAME LIKE ?");
        if(!$stmt) {
            echo "Something went wrong in the binding process";
            exit;
        }
        $like_n = "%" . $n . "%";
        $stmt->bind_param("s", $like_n);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>