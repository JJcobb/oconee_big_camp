<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	if( $_SESSION['loggedin'] == 'false' ){
		header("Location: login.php");
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Account</title>

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
				$sesID = $_SESSION['id'];
			?>

			<section class="banner">

				<h1>Profile</h1>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<h2>Account Information</h2>

					<div class="listed-item client-info clearfix">

						<div class="info-left">

							<h3 class="accountHeader">Contact and Shipping</h3>
							<?php					
									
								  $sql = "SELECT id, username, password, first_name, last_name, email, phone, street, city, state, zip FROM users WHERE id = '$sesID'";

								  //run the query against the mysqli query function
								  $result = $mysqli->query($sql);

								  if (mysqli_num_rows($result) == 0){ 
									  echo "No user was found.";
								  }else{ 
									 while($row = $result->fetch_assoc()) { 
										  $id =$row['id'];
										  $username =$row['username'];
										  $password =$row['password'];
										  $first_name =$row['first_name'];
										  $last_name =$row['last_name'];
										  $email =$row['email'];
										  $phone =$row['phone'];
										  $street =$row['street'];
										  $city =$row['city'];
										  $state =$row['state'];
										  $zip =$row['zip'];
									 }
								  } 
							  ?>
							 <div class="editButton" id="logoutButton">
								<a href="logout.php">
									Logout
								</a>
							</div>
						    <div class="editButton">
								<a href="client_edit.php">
									Edit
								</a>
							</div>
							<div class="accountInfo">
								<p>
									Username: <?php echo $username ?>
									<br>
									Email: <?php echo $email ?>
									<br>
									Phone: <?php echo "(".substr($phone, 0, 3).") ".substr($phone, 3, 3)."-".substr($phone,6); ?>
								</p>


							</div>

						</div>

						<div class="info-right">
								<br>
								<br>
								<br>
								<br>
								<br>								
								<br>								
								<br>
								
								<p>
									Name: <?php echo $first_name." ".$last_name ?>
									<br>
									Address: <?php echo $street ?>
									<br>
									<?php echo $city.", ".$state." ".$zip ?>
								</p>

						</div>

					</div>
						
				</section>

				<section class="info-box-full clearfix">

					<h2>Order History</h2>

					<div class="listed-item clearfix">

						<table>
							<thead>
								<tr>
									<th class="cart-product">Product</th>
									<th>Price</th>
									<!--<th>Quantity</th>-->
									<th>Total</th>
									<th>Date</th>
								</tr>
							</thead>

							<tbody>
								<?php
									$sql = "SELECT product_id, quantity, price, ordertime, active, order_id FROM orders WHERE user_id='$sesID'";


									  //run the query against the mysqli query function
									  $result = $mysqli->query($sql);

									  if (mysqli_num_rows($result) == 0){ 
										  echo "<p>No orders were found.</p>";
									  }else{ 
										 while($row = $result->fetch_assoc()) { 
											  $product_id =$row['product_id'];
											  $quantity =$row['quantity'];
											  $price =$row['price'];
											  $ordertime =$row['ordertime'];
											  $order_id =$row['order_id'];
											  $active =$row['active'];
											 
											  $total = $quantity * $price;
											  $ordertime = new DateTime($ordertime);
									 		  $ordertime = date_format($ordertime, 'M d, Y');

											$sql2 = "SELECT product_name, image_url FROM products WHERE id='$product_id'";
											  $result2 = $mysqli->query($sql2);
											 if (mysqli_num_rows($result2) == 0){ 
												  echo "<p>No orders were found.</p>";
											  }else{ 
												 while($row = $result2->fetch_assoc()) { 
													  $product_name =$row['product_name'];
													  $image_url =$row['image_url'];
												 
													 if($order_id==NULL){
													 }else{
														 print "<tr><td class='cart-product'><a href='product.php?product_id=$product_id'>";
														 print "<img src='$image_url' alt='$product_name' class='cart-item'></a>";
														 print "<div class='cart-item'><a href='product.php?product_id=$product_id'>$product_name</a>";
														 print "<br><span class='para-line-height'>(x$quantity)</span></div></td>";
														 print "<td data-title='Price'>$$price</td>";
														 print "<td data-title='Total'>$$total</td>";
														 print "<td data-title='Date'>$ordertime</td>";
													 }
												}
									 		}
										 }
									  }
								?>
							</tbody>
						</table>

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