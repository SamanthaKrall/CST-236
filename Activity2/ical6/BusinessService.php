<?php
require_once 'UserDataService.php';

class BusinessService {
    function findByFirstName($n) {
        $persons = array();
        $dbService = new UserDataService();
        $persons = $dbService->findByFirstName($n);
        return $persons;
    }
    function findByLastName($n) {
        $persons = array();
        $dbService = new UserDataService();
        $persons = $dbService->findByFirstName($n);
        return $persons;
    }
    function findById($id) {
        $dbService = new UserDataService();
        $person = $dbService->findById($id);
        return $person;
    }
    function deleteItem($id) {
        $dbService = new UserDataService();
        return $dbService->deleteItem($id);
    }
    function updateOne($id, $person) {
        $dbService = new UserDataService();
        return $dbService->updateOne($id, $person);
    }
    function findByFirstNameWithAddress($n){
        $persons = array();
        $dbService = new UserDataService();
        $persons = $dbService->findByFirstNameWithAddress();
        return $persons;
    }
}