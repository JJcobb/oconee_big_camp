<?php
	//Remove item from the Cart
	
	include("db_connect.php");
	
	$table_id = $_GET['table_id'];
	
	$sql = "DELETE FROM orders WHERE id=$table_id";
	$result = $mysqli->query($sql);

	if ($result === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $mysql->error;
	}
	
	header("location: ../cart.php");
?>