<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title>Oconee Big Camp Checkout</title>

		<style>
			@import url("css/reset.css");
			@import url("css/styles.css");
			@import url("css/font-awesome/css/font-awesome.min.css");
		</style>

		<!--<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">-->

		<script src="js/jquery.js"></script>
		<script src="js/functions.js"></script>
		<script src="https://js.braintreegateway.com/web/3.5.0/js/client.min.js"></script>
		<script src="https://js.braintreegateway.com/web/3.5.0/js/paypal.min.js"></script>
		
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

			<section class="banner banner-nav">

				<div class="breadcrumbs">
					<!--<ul class="clearfix">
						<li><a href="#">Billing</a> | </li>
						<li><a href="#">Payment</a> | </li>
						<li><a href="#">Order</a></li>
					</ul>-->

					<ul class="clearfix">
						<li><a href="cart.php">Return to Shopping Cart</a></li>
					</ul>
					
				</div>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<h2>Billing Information</h2>

					<div class="listed-item clearfix">
						<?php					
									
								  $sql = "SELECT id, username, password, first_name, last_name, email, phone, street, city, state, zip FROM users WHERE id = '$sesID'";

								  //run the query against the mysqli query function
								  $result = $mysqli->query($sql);

								  if (mysqli_num_rows($result) == 0){ 
									  	  $id =NULL;
										  $username =NULL;
										  $password =NULL;;
										  $first_name =NULL;
										  $last_name =NULL;
										  $email =NULL;
										  $phone =NULL;
										  $street =NULL;
										  $city =NULL;
										  $state =NULL;
										  $zip =NULL;
									  
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
						

						<form action="#" method="post" name="checkout" class="checkout-form">

							<div class="form-2">
								<input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $first_name ?>">
								<input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $last_name ?>">
							</div>

							<div class="form-1">
								<input type="text" name="address" id="address" placeholder="Street Address" value="<?php echo $street ?>">
							</div>

							<div class="form-3">
								<input type="text" name="city" id="city" placeholder="City" value="<?php echo $city ?>">
								<input type="text" name="state" id="state" placeholder="State" value="<?php echo $state ?>">
								<input type="text" name="zip" id="zip" placeholder="ZIP" value="<?php echo $city ?>">
							</div>

							<div class="form-2">
								<input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email ?>">
								<input type="tel" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone ?>">
							</div>

						</form>



					</div>
						
				</section>

			</section>

			<section class="content-container content-below">

				<section class="info-box-full clearfix">

					<h2 class="accountHeader">Order Details</h2>
					<div class="editButton">
						<a href="cart.php">
							Edit
						</a>
					</div>

					<div class="order-details">
					<form action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
					  <input type="hidden" name="cmd" value="_cart">
					  <input type="hidden" name="upload" value="1">
					  <input type="hidden" name="business" value="service-facilitator@troop184fortgatlin.com" />
					  
					<table class="order-details-products">

						<thead>
							<tr>
								<th>Product Image</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Item Total</th>
							</tr>
						</thead>

						<tbody>
							<?php

								/* If guest */
								if($sesID == 0){
									$sql = "SELECT id, product_id, quantity, price, ordertime, active FROM orders WHERE user_id is NULL";
								}
							
								else{
									$sql = "SELECT id, product_id, quantity, price, ordertime, active FROM orders WHERE user_id='$sesID'";
								}
								
								$total = 0;

								//run the query against the mysqli query function
								$result = $mysqli->query($sql);
								$i=1;   
								if (mysqli_num_rows($result) == 0){ 
									echo "<p>No order was found.</p>";
								}else{ 
									while($row = $result->fetch_assoc()) { 
										$product_id = $row['product_id'];
										$quantity = $row['quantity'];
										$price = $row['price'];
										$active = $row['active'];
										
										//select important things for checkout page
										$sql2 = "SELECT id, image_url, product_name FROM products WHERE id=$product_id";
										$result2 = $mysqli->query($sql2);
										
										if (mysqli_num_rows($result2) == 0){ 
											echo "<p>No order was found.</p>";
										}else{ 
											while($row = $result2->fetch_assoc()) { 
												if($active == 1){
													$pr_id = $row['id'];
													$product_name = $row['product_name'];
													$image_url = $row['image_url'];
													
													$item_total = ($quantity * $price);
													$total += $item_total;
													//echo "Total + Sub (" . $item_total . ") = " . $total;

													print '<tr>
													
													<td class="cart-item">
														<img src="'.$image_url.'" alt="'.$product_name.'">
													</td>
													<td class="order-product-name">
														'.$product_name.'
													</td>
													<td class="order-product-price">
														$'.$price.'
													</td>
													<td class="order-product-quantity">
														<span>x</span> <span class="quantity-box">'.$quantity.'</span>
													</td>
													
													<td class="order-product-price">
														$'.$item_total.'
													</td>
													
													
													</tr>';
													print '<input type="hidden" name="quantity_'.$i.'" value="'.$quantity.'" />
														   <input type="hidden" name="item_name_'.$i.'" value="'.$product_name.'" />
													  	   <input type="hidden" name="item_number_'.$i.'" value="'.$pr_id.'" />
													  	   <input type="hidden" name="amount_'.$i.'" value="'.$price.'" />';
													$i++;
													}
												
												}

											}
										}
									}
							?>

						</tbody>

					</table>

					<table class="order-totals">

						<thead>

							<tr>
								<th>Description</th>
								<th>Price</th>
							</tr>

						</thead>

						<tbody>

							<tr>
								<td>
									Subtotal
								</td>
								<?php
									print "
										<td>
											$".$total."
										</td>";
										
									//plus shipping
									$total += 10;
								?>
							</tr>

							<tr>
								<td>
									Shipping
								</td>
								<td>
									$10.00
								</td>
							</tr>

						</tbody>

					</table>

					<table class="order-totals">

						<thead>

							<tr>
								<th>Description</th>
								<th>Price</th>
							</tr>

						</thead>

						<tbody>

							<tr>
								<td>
									Total
								</td>
								<?php
								print "
									<td>
										$".$total."
									</td>
									";
								?>
							</tr>

						</tbody>

					</table>	
				  	  				  
						  <input type="hidden" name="shipping" value="10.00" />
						  <input type="hidden" name="currency_code" value="USD" />
						  <input type="hidden" name="lc" value="US" />
						  <input type="hidden" name="bn" value="PP-BuyNowBF" />
						  <input type="hidden" name="return" value="http://sulley.cah.ucf.edu/~dig4530c_010/A/payment_completed.php" />
						  <input type="hidden" name="cancel_return" value="http://sulley.cah.ucf.edu/~dig4530c_010/A/cart.php" />
						  <input type="hidden" name="image_url" value="http://sulley.cah.ucf.edu/~dig4530c_010/A/img/logo-text-header.png" />
						  <div class="cta">
							<input type="submit" value="Complete Order" name="submit" title="PayPal - The safer, easier way to pay online!" class="paypal_btn">
						  </div>
						  <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
						</form>
					</div>


				</section>

			</section>


			<?php
				require("includes/footer.php");
			?>

		</div>
		<script src="https://www.paypalobjects.com/api/checkout.js" data-version-4></script>
		<script>
			paypal.Button.render({

				env: 'sandbox', // Specify 'sandbox' for the test environment
				
				client: {
					sandbox:    'AXYdQRa00mHXTuEyvHZQhQ52zCrXfmpU2C6dDJyU9qIyr_LXs6wPPe4o6YOu3ObSfPoG8sDMY9HpptZu'
				},
				
				 payment: function() {

					var env    = this.props.env;
					var client = this.props.client;

					return paypal.rest.payment.create(env, client, {
						transactions: [
							{
								amount: { total: '<?php echo $total ?>', currency: 'USD' }
							}
						]
					});
				},
            
				style: {
					size: 'medium',
					color: 'orange',
					shape: 'rect'
				},

				onAuthorize: function(data, actions) {
					// Execute the payment here, when the buyer approves the transaction
					// Optional: display a confirmation page here
        
					return actions.payment.execute().then(function() {
						// Show a success page to the buyer
						sucess_url: 'payment_completed.php'
					});
			   }

			}, '#paypal-button');
		</script>
	</body>
	<?php
		$mysqli->close();
	?>
</html>