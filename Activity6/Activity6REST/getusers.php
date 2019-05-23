<?php
require_once 'UserBusinessService.php';
require 'Users.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$users = new User($id, $firstName, $lastName);
$users->getId();
$users->getFirstName();
$users->getLastName();

$j = json_encode($users);
echo $j;

