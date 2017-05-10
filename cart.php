<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Cart</title>

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
			?>

			<section class="banner">

				<h1>Cart</h1>

			</section>


			<section class="content-container">
				
				<table class="shopping-cart">
					<thead>
						<tr>
							<th class="cart-product">Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>

					<tbody>
						<?php
							
							$sesID = $_SESSION['id'];
							$subtotal = array();
							$id = 0;
							
							/* If guest */
							if($sesID == 0){
								$sql = "SELECT id, product_id, quantity, price, ordertime, active FROM orders WHERE user_id is NULL";
							}

							else{
								$sql = "SELECT id, product_id, quantity, price, ordertime, active FROM orders WHERE user_id='$sesID'";
							}


							  //run the query against the mysqli query function
							  $result = $mysqli->query($sql);

							  if (mysqli_num_rows($result) == 0){ 
								  //echo "<p>No items in cart.</p>";
							  }else{ 
								 while($row = $result->fetch_assoc()) { 
									  $product_id = $row['product_id'];
									  $quantity = $row['quantity'];
									  $price = $row['price'];
									  $ordertime = $row['ordertime'];
									  $table_id = $row['id'];
									  $active = $row['active'];

									  $total = $quantity * $price;
									  $ordertime = new DateTime($ordertime);
									  $ordertime = date_format($ordertime, 'M d, Y');

									  $sql2 = "SELECT product_name, image_url FROM products WHERE id='$product_id'";
									  $result2 = $mysqli->query($sql2);
									  
									 echo '<form name="cart_quantity" action="includes/update.php" method="GET">';
									 
									 if (mysqli_num_rows($result2) == 0){ 
										  //echo "<p>No items in cart.</p>";
									  }else{ 
										 while($row = $result2->fetch_assoc()) { 
											if($active == 1){
												  $product_name = $row['product_name'];
												  $image_url = $row['image_url'];

												 print '<tr><td class="cart-product"><a href="includes/remove_item.php?table_id='.$table_id.'" class="cart-remove">X</a>';
												 print "<a href='product.php?product_id=$product_id'>";
												 print "<img src='$image_url' alt='$product_name' class='cart-item'></a>";
												 print "<div class='cart-item'><a href='product.php?product_id=$product_id'>$product_name</a>";
												 //print "<br><span class='para-line-height'>(x$quantity)</span></div></td>";
												 print "<td data-title='Price'>$" .$price. "</td>";
												 //print "<input type='number' value='$quantity'></div></td>";

												 print '<td data-title="Quantity">
															
																<input type="hidden" name="table_id'.$id.'" value="'.$table_id.'">
																<input type="hidden" name="product_id'.$id.'" value="'.$product_id.'">
																<input type="hidden" name="id" value="'.$id.'">
																<input name="product'.$id.'" type="number" value="'.$quantity.'" min="0">
															
														</td>';
												 print "<td data-title='Total'>$" .$total."</td>";
												 
												 array_push($subtotal, $total);
												 //echo "ID: " . $id;
												$id++;
											}
											else{
												//echo "<p>No items in cart.</p>";
											}
										 
										}
									}
									
								 }
							  }
						?>
					</tbody>
				</table>

				<div class="cart-checkout">
					
					<?php
						//$order_total = array of totals
						//print_r($subtotal);
						$num_of_items = sizeof($subtotal);
						$order_total = 0; //Final total
						
						for ($i=0; $i < $num_of_items; $i++){
							$order_total += $subtotal[$i];
						}
						
						echo '<p class="cart-price">$'.$order_total.'</p>';

					?>
					
					<div class="cta secondary-cta" style="float: left;">
						<input type="submit" id="cart_update" value="Update">
					</div>
					</form>
					<div class="cta">
						<a href="checkout.php">Checkout</a>
					</div>
					
				</div>

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