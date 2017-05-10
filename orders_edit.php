<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	require("includes/admin_validate.php");
	

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if(isset($_GET["order"])){
			$order_id = $_GET["order"];
		}
		else{
			$order_id = NULL;
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Edit Orders</title>

		<style>
			@import url("css/reset.css");
			@import url("css/styles.css");
			@import url("css/font-awesome/css/font-awesome.min.css");
		</style>

		<!--<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">-->

		<script src="js/jquery.js"></script>
		<script src="js/functions.js"></script>

		<?php
			include_once("includes/analyticstracking.php");
		?>

	</head>
	<body>

		<div class="container">

			<?php
				require("includes/header.php");
				include("includes/admin_validate.php");
			?>

			<section class="banner banner-nav">

				<div class="breadcrumbs">
					<ul class="clearfix">
						<li><a href="admin.php">Dashboard</a> | </li>
						<li><a href="products_view.php">Products</a> | </li>
						<li><a href="orders_view.php">Orders</a> | </li>
						<?php
					if ($_SESSION['access'] == "admin") {
						echo '<li><a href="users_view.php">Users</a></li>';
					}
				?>
					</ul>
				</div>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<h2>Edit Order</h2>

					<div class="listed-item clearfix">
						<?php					
							  $sql = "SELECT id, order_id, user_id, product_id, quantity, active, ordertime, price FROM orders WHERE order_id='$order_id'";

							  //run the query against the mysqli query function
							  $result = $mysqli->query($sql);

							  if (mysqli_num_rows($result) == 0){ 
								  echo "No orders were found.";
							  }else{ 
								 while($row = $result->fetch_assoc()) { 
									  $id =$row['id'];
									  $order_id =$row['order_id'];
									  $user_id =$row['user_id'];
									  //$product_id =$row['product_id'];
									  $quantity =$row['quantity'];
									  $active =$row['active'];
									  $ordertime =$row['ordertime'];
									  $price =$row['price'];

									$sql1 = "SELECT first_name, last_name, street, city, state, zip, email, phone FROM users WHERE id='$user_id'";
									  $result1 = $mysqli->query($sql1);
									 if (mysqli_num_rows($result1) == 0){ 
										  /*echo "No orders were found.";*/
									  }else{ 
										 while($row = $result1->fetch_assoc()) { 
											  $first_name =$row['first_name'];
											  $last_name =$row['last_name'];
											  $city =$row['city'];
											  $state =$row['state'];
											  $street =$row['street'];
											  $zip =$row['zip'];
											  $email =$row['email'];
											  $phone =$row['phone'];
										 }
									 }

									 if( is_null( $user_id ) ){

									 	$first_name = "Guest";
										$last_name = "";
										$city = "";
										$state = "";
										$street = "Guest";
										$zip = "";
										$email = "Guest";
										$phone = "Guest";
									 }
									 
									 $ordertime = new DateTime($ordertime);
									 $ordertime = date_format($ordertime, 'M d, Y');
								 }

							  } 
						  ?>

						<p>
							<strong>Order ID:</strong> <?php echo $order_id ?>
							<br>
							<strong>Order date:</strong> <?php echo $ordertime ?>
						</p>

						<p>
							<strong>Customer name:</strong> <?php echo $first_name." ".$last_name ?>
							<br>
							<strong>Address:</strong> <?php echo $street.", ".$city.", ".$state." ".$zip ?>
							<br>
							<strong>Email:</strong> <?php echo $email ?>
							<br>
							<strong>Phone:</strong> <?php echo "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone,6); ?>
							
						</p>

					</div>

					<div class="listed-item clearfix">
						<table>
							<thead>
								<tr>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
								</tr>
							</thead>

							<tbody>
							<form action="includes/orderEdit.php" method="get" name="order-edit" id="order-edit">
								<?php
									$sql = "SELECT product_id, quantity, price, active FROM orders WHERE order_id='$order_id'";
									$id = 0;

									  //run the query against the mysqli query function
									  $result = $mysqli->query($sql);

									  if (mysqli_num_rows($result) == 0){ 
										  echo "No orders were found.";
									  }else{ 
										 while($row = $result->fetch_assoc()) { 
											  $product_id =$row['product_id'];
											  $quantity =$row['quantity'];
											  $price =$row['price'];
											  $active =$row['active'];

											$sql2 = "SELECT product_name FROM products WHERE id='$product_id'";
											  $result2 = $mysqli->query($sql2);
											 if (mysqli_num_rows($result2) == 0){ 
												  echo "No orders were found.";
											  }else{ 
												 while($row = $result2->fetch_assoc()) { 
													  $product_name =$row['product_name'];
													if($active==0){
														print "<tr><td data-title='Product'>$product_name</td>";
														print "<td data-title='Price'>$$price</td>";
														print "<input type='hidden' name='id' value='$id' form='order-edit'>
															   <input type='hidden' name='order_id".$id."' id='order_id' value='$order_id' form='order-edit'>
															   <input type='hidden' name='product_id".$id."' id='product_id' value='$product_id' form='order-edit'>";
														print "<td data-title='Quantity'>
																	<input type='text' name='quantity".$id."' id='quantity' value='$quantity' form='order-edit'>
																</td>";
														$id++;
													}
												}//end while 175
									 		}//end else 174
						
										 }//end while 164
									  }//end else 163
								?>
							</tbody>
						</table>

					</div>

					<div class="cta">
						<input type="submit" id="update" value="Update" form="order-edit">
					</div>

					</form>
					
					<div class="cta">
						<a href="orders_view.php">Back</a>
					</div>
						
				</section>

			</section>

			<?php
				require("includes/footer.php");
			?>

		</div>

	</body>
	<?php
		$mysqli->close();
	?>
</html>