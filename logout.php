<?php
	//LOGOUT
	session_start();
	
	$_SESSION['loggedin'] = 'false';
	$_SESSION['access'] = null;

	if(isset($_SESSION['sesUser'])) {
		unset($_SESSION['sesUser']);
	}

	if(isset($_SESSION['id'])) {
		unset($_SESSION['id']);
	}

	header('location: home.php');
?>