<?php
require_once 'Database.php';
require_once 'UserDataService.php';
require_once 'Autoloader.php';
class UserBusinessService {
    function searchByFirstName($pattern){
        $service = new UserDataService();
        return $service->findByFirstName($pattern);
    }
}