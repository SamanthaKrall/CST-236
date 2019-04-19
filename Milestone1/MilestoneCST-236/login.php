<?php
session_start();
require 'dbConnector.php';
include 'css.css';
if ($connection) {
    $attemptedLoginName = $_POST['login_name'];
    $attemptedPassword = $_POST['login_password'];
    $sql_statement = "SELECT * FROM users WHERE user_name = '$attemptedLoginName' AND user_password = '$attemptedPassword' LIMIT 1";
    $result = mysqli_query($connection, $sql_statement);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            echo "Login Successful!<br>";
        } else {
            echo "Login Unsuccessful!<br>";
            exit;
        }
    } else {
        echo "Error " . mysqli_error($connection);
        exit;
    }
} else {
    echo "Error connecting " . mysqli_connect_errno();
    exit;
}
?>
<html>
<body>
	<a><button onclick="goBack()">Go Back</button></a>
	<script>
		function goBack() {
			window.history.back();
		}
	</script>
</body>
</html>