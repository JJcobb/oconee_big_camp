<?php

	session_start();

	include("db_connect.php");

	if( isset($_POST['user_id']) && isset($_POST['product_id']) && isset($_POST['quantity']) ){

		/* Determine the next order */
		$query = "SELECT order_id FROM orders WHERE order_id IS NOT NULL";

		$result = $mysqli->query($query);

		$nextOrder = 1;

		while( $row = $result->fetch_object() ){

			if( $row->order_id == $nextOrder ){

				$nextOrder = $row->order_id + 1;
			}
		}


		/* Determine the price */
		$query_price = "SELECT price FROM products WHERE id = ".$_POST['product_id'];

		$result_price = $mysqli->query($query_price);

		while( $row = $result_price->fetch_object() ){

			$price = $row->price;
		}


		/* Add order to db */
		$query_add = "INSERT INTO orders (id, order_id, user_id, product_id, price, quantity, active)
		              VALUES (NULL, ".$nextOrder.", ".$_SESSION['id'].", ".$_POST['product_id'].", ".$price.", ".$_POST['quantity'].", 0)";

        $mysqli->query($query_add);

        header('Location: ../orders_view.php');
	}

	echo "didn't work";

?>