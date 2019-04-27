<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'header.php';

if (!isset($_SESSION['principal']) || $_SESSION['principal'] == null || $_SESSION['principal'] == false) {
    header("location: index.html");
}
?>