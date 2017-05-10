<?php

	include('db_connect.php');

	//Update
	//echo "Hello World";
	
	$id = $_GET["id"];
	$_GET["product".$id];
	
	//echo "Number of IDs: " . $_GET["id"];
	$max = $_GET["id"]; //The highest id value. AKA length-1;
	
	//echo "<br><br> Product Quantities: <br>";
	
	for ($i = 0; $i <= $max; $i++){
		//echo $_GET["product".$i] . "<br>";
		//echo "Product ID: " . $_GET["product_id".$i] . "<br>";
		
		$product_id = $_GET["product_id".$i];
		$quantity = $_GET["product".$i];
		$table_id = $_GET["table_id".$i];
		
		//echo "Table ID number: " . $table_id;
		
		
		//Update the quanity in the database, table = orders
		$sql = "UPDATE orders SET quantity = $quantity WHERE id = $table_id";
		$result = $mysqli->query($sql);

		if ($result === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $mysqli->error;
		}
	}
	
	header("location: ../cart.php")
?>