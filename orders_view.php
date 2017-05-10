<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	require("includes/admin_validate.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp View Orders</title>

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

					<h2>Orders</h2>

					<div class="cta">
						<a href="orders_add.php">Create Order</a>
					</div>

					<div class="listed-item clearfix">

						<table>
							<thead>
								<tr>
									<th>Order ID</th>
									<th>Total</th>
									<th>Order Date</th>
									<th>Customer</th>
									<th>City</th>
									<th>State</th>
									<th>Edit</th>
								</tr>
							</thead>

							<tbody>
								<?php					
									  $sql = "SELECT id, order_id, user_id, product_id, quantity, active, ordertime FROM orders ORDER BY order_id ASC";
								
									  $order_match = array(); //order ids that have been used.
									  $total = 0;

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
											  
											  $push_array = true; //Is the order ID new? if so, push new id into array
											  
											  //Catie
											  $length = sizeof($order_match);
											  for($i = 0; $i < $length; $i++){
												  if($order_match[$i] == $order_id){
													  $push_array = false;
													  break;
												  }
											  }
											  
											  if($push_array == true){
												  array_push($order_match, $order_id);
												  //$total = 0;
											  }
											  //Catie - END
											 
											$sql1 = "SELECT first_name, last_name, city, state FROM users WHERE id='$user_id'";
											  $result1 = $mysqli->query($sql1);
											 if (mysqli_num_rows($result1) == 0){ 
												  /*echo "No orders were found.";*/
											  }else{ 
												 while($row = $result1->fetch_assoc()) { 
													  $first_name =$row['first_name'];
													  $last_name =$row['last_name'];
													  $city =$row['city'];
													  $state =$row['state'];
												 }
											 }
											 
											 if($order_id!=NULL){
												$sql2 = "SELECT price, quantity, active FROM orders WHERE order_id='$order_id'";
												$total = 0;
												  $result2 = $mysqli->query($sql2);
												 if (mysqli_num_rows($result2) == 0){ 
													  echo "No orders were found.";
												  }else{ 
													 while($row = $result2->fetch_assoc()) {
														  $active = $row['active'];
														  /*if($active == 1){*/
															  $price = $row['price'];
															  $quantity = $row['quantity'];
															  //echo "price: " . $price . ", quantity: " . $quantity;
															  $total += $price * $quantity;
														  /*}*/
													 }
												 }
											 }
											 
											 //$product_total = $quantity * $price;
											 
											 /*
											 if($push_array == false){
												 //if false, then the same order ID is being used. This needs to be added to total
												 $total += $product_total;
											 }
											 
											 */
											 
											 $ordertime = new DateTime($ordertime);
											 $ordertime = date_format($ordertime, 'M d, Y');
											 
											 if($order_id!=NULL){
												$total += 10;
												
												if($push_array == true){
													print "<tr><td data-title='ID'>$order_id</td>";
													print "<td data-title='Total'>$$total</td>";
													print "<td data-title='Order Date'>$ordertime</td>";
													print "<td data-title='Customer'>$first_name $last_name</td>";
													print "<td data-title='City'>$city</td>";
													print "<td data-title='State'>$state</td>";
													print "<td data-title='Edit'><a href='orders_edit.php?order=$order_id' title='Edit'><i class='fa fa-pencil-square-o'></i></a></td></tr>";
												}
											 }

										 }//close while
									  }//close else 
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