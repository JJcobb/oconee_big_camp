<?php
	include("includes/db_connect.php");
	if($_SESSION['loggedin'] == "false" ) {
		header("Location: redirect.php");
	} 
	$query = "SELECT access FROM users WHERE id = ".$_SESSION['id'];
	$result = $mysqli->query($query);
	while ( $row = $result->fetch_object() ) {
      			    
    	if( $row->access != "admin" && $row->access != "privileged" ) {
    		header("Location: redirect.php");
    	}
	}
?>