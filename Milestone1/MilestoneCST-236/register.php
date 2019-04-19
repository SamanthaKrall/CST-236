<?php
include 'css.css';
$login_name = $_POST['login_name'];
$login_password = $_POST['login_password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$country = $_POST['country'];
require 'dbConnector.php';
session_start();
$_SESSION['login_name'] = $login_name;
$query = "INSERT INTO users (user_name, user_password, first_name, last_name, email, phone_number, address, city, state, zip_code, country)
    VALUES ('$login_name', '$login_password', '$first_name', '$last_name', '$email', '$phone_number', '$address', '$city', '$state', '$zip_code', '$country')";
$connection->query($query);
?>
<html>
<body>
	<h1>You have successfully registered!</h1>
	<a><button onclick="goBack()">Go Back</button></a>
	<script>
		function goBack() {
			window.history.back();
		}
	</script>
</body>
</html>