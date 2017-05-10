<?php
	//test and clean inpput data
	function test_input($data) {
	   $data = trim($data);
	   $data = str_replace("'","''",$data);
	   $data = str_replace('"','""',$data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	session_start();
	$sesID = $_SESSION['id'];
	
	echo "Product ID: ";
	echo $_GET['product_id'];
	$id = test_input($_GET['product_id']);
	
	include("db_connect.php");
	
	$query = "SELECT product_name, price FROM products WHERE id = " . $id;
	$result = $mysqli->query($query);
	$row = $result->fetch_object();	
	$name = $row->product_name;
	$price = $row->price;
	
	echo "; Name: " . $name;
	
	if($id!=""){

		/* If guest */
		if($sesID == 0){
			$sql = "INSERT INTO orders (user_id, product_id, price, quantity) VALUES (NULL, '$id','$price','1')";
		}

		else{
			$sql = "INSERT INTO orders (user_id, product_id, price, quantity) VALUES ('$sesID','$id','$price','1')";
		}

			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	
	header('location: ../product.php?product_id=' . $id);
	
?>