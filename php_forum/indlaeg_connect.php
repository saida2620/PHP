<?php
session_start();

include ("db/MySQLConnect.php");
$overskrift = mysqli_real_escape_string($connection, $_POST["overskrift"]);
$navn = mysqli_real_escape_string($connection, $_POST["navn"]);
$dato = mysqli_real_escape_string($connection, $_POST["dato"]);
$tags = mysqli_real_escape_string($connection, $_POST["tags"]);
$billede = mysqli_real_escape_string($connection, $_POST["billede"]);
$kommentar = mysqli_real_escape_string($connection, $_POST["kommentar"]);

$sql = "SELECT * FROM login WHERE overskrift = '$overskrift' AND navn = '$navn' dato = '$dato' AND tags = '$tags' billede = '$billede' AND kommentar = '$kommentar'";

$get_login = mysqli_query($connection, $sql);
$count = mysqli_num_rows($get_login);

if($count == 1) {
	$_SESSION['login'] = 1;
	header('location: frontpage.php');
} else {
	$_SESSION['error'] = "Noget gik galt";	
	header('location: frontpage.php');
}

include ("db/MySQLClose.php");
?>


