<?php
session_start();

include ("db/MySQLConnect.php");

$user = mysqli_real_escape_string($connection, $_POST["user"]);
$pass = mysqli_real_escape_string($connection, $_POST["pass"]);

$sql = "SELECT * FROM login WHERE l_user = '$user' AND l_pass = '$pass'";

$get_login = mysqli_query($connection, $sql);
$count = mysqli_num_rows($get_login);

if($count == 1) {
	$_SESSION['login'] = 1;
	header('location: frontpage.php');
} else {
	$_SESSION['error'] = "Forkert brugernavn eller password";	
	header('location: index.php');
}

include ("db/MySQLClose.php");
?>