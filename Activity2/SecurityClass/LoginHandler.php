<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'SecurityService.php';
include 'header.php';
include 'securePage.php';

$username = $_POST['username'];
$password = $_POST['password'];

$service = new SecurityService($username, $password);
$authentic = $service->AuthenticateUser();
if ($authentic) {
    $_SESSION['principle'] = true;
    include 'loginPassed.php';
} else {
    $_SESSION['principle'] = false;
    include 'loginFailed.php';
}
?>