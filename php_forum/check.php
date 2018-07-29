<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != 1) {
	$_SESSION['error'] = "Du har ikke adgang til at se denne side";
	header('location: index.php');
}
?>