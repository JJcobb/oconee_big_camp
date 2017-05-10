<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	require("includes/admin_validate.php");
	require("includes/priv_validate.php");
	

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if(isset($_GET["user"])){
			$user_id = $_GET["user"];
		}
		else{
			$user_id = NULL;
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Edit User</title>

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

					<h2>Edit User</h2>

					<div class="listed-item clearfix">
						<?php					
								  $sql = "SELECT id, username, first_name, last_name, email, phone, street, city, state, zip, country, access, active FROM users WHERE id = '$user_id'";

								  //run the query against the mysqli query function
								  $result = $mysqli->query($sql);

								  if (mysqli_num_rows($result) == 0){ 
									  echo "No users were found.";
									  $username = NULL;
									  $first_name = NULL;
									  $last_name = NULL;
									  $email = NULL;
									  $phone = NULL;
									  $street = NULL;
									  $city = NULL;
									  $state = NULL;
									  $zip = NULL;
									  $country = NULL;
									  $access = NULL;
									  $active = NULL;
								  }else{ 
									 while($row = $result->fetch_assoc()) { 
										  $username =$row['username'];
										  $first_name =$row['first_name'];
										  $last_name =$row['last_name'];
										  $email =$row['email'];
										  $phone =$row['phone'];
										  $street =$row['street'];
										  $city =$row['city'];
										  $state =$row['state'];
										  $zip =$row['zip'];
										  $country =$row['country'];
										  $access =$row['access'];
										  $active =$row['active'];
									 }
								  } 
							  ?>

						<form action="includes/userEdit.php" method="post" name="user-edit" class="checkout-form label-form">
							<div class="form-2">
								<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id ?>">
							</div>
							
							<div class="form-2">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" value="<?php echo $username ?>">
							</div>

							<div class="form-2">
								<label for="fname">First Name</label>
								<input type="text" name="fname" id="fname" value="<?php echo $first_name ?>">
							</div>

							<div class="form-2">
								<label for="lname">Last Name</label>
								<input type="text" name="lname" id="lname" value="<?php echo $last_name ?>">
							</div>

							<div class="form-2">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" value="<?php echo $email ?>">
							</div>

							<div class="form-2">
								<label for="phone">Phone</label>
								<input type="tel" name="phone" id="phone" value="<?php echo $phone ?>">
							</div>

							<div class="form-2">
								<label for="street">Street</label>
								<input type="text" name="street" id="street" value="<?php echo $street ?>">
							</div>

							<div class="form-2">
								<label for="city">City</label>
								<input type="text" name="city" id="city" value="<?php echo $city ?>">
							</div>

							<label for="state">State</label>
							<select name="state" id="state">
								<option value="AL" <?php if($state=="AL"){echo "selected";}?>>Alabama</option>
								<option value="AK" <?php if($state=="AK"){echo "selected";}?>>Alaska</option>
								<option value="AZ" <?php if($state=="AZ"){echo "selected";}?>>Arizona</option>
								<option value="AR" <?php if($state=="AR"){echo "selected";}?>>Arkansas</option>
								<option value="CA" <?php if($state=="CA"){echo "selected";}?>>California</option>
								<option value="CO" <?php if($state=="CO"){echo "selected";}?>>Colorado</option>
								<option value="CT" <?php if($state=="CT"){echo "selected";}?>>Connecticut</option>
								<option value="DE" <?php if($state=="DE"){echo "selected";}?>>Delaware</option>
								<option value="DC" <?php if($state=="DE"){echo "selected";}?>>District Of Columbia</option>
								<option value="FL" <?php if($state=="FL"){echo "selected";}?>>Florida</option>
								<option value="GA" <?php if($state=="GA"){echo "selected";}?>>Georgia</option>
								<option value="HI" <?php if($state=="HI"){echo "selected";}?>>Hawaii</option>
								<option value="ID" <?php if($state=="ID"){echo "selected";}?>>Idaho</option>
								<option value="IL" <?php if($state=="IL"){echo "selected";}?>>Illinois</option>
								<option value="IN" <?php if($state=="IN"){echo "selected";}?>>Indiana</option>
								<option value="IA" <?php if($state=="IA"){echo "selected";}?>>Iowa</option>
								<option value="KS" <?php if($state=="KS"){echo "selected";}?>>Kansas</option>
								<option value="KY" <?php if($state=="KY"){echo "selected";}?>>Kentucky</option>
								<option value="LA" <?php if($state=="LA"){echo "selected";}?>>Louisiana</option>
								<option value="ME" <?php if($state=="ME"){echo "selected";}?>>Maine</option>
								<option value="MD" <?php if($state=="ME"){echo "selected";}?>>Maryland</option>
								<option value="MA" <?php if($state=="MA"){echo "selected";}?>>Massachusetts</option>
								<option value="MI" <?php if($state=="MA"){echo "selected";}?>>Michigan</option>
								<option value="MN" <?php if($state=="MN"){echo "selected";}?>>Minnesota</option>
								<option value="MS" <?php if($state=="MS"){echo "selected";}?>>Mississippi</option>
								<option value="MO" <?php if($state=="MO"){echo "selected";}?>>Missouri</option>
								<option value="MT" <?php if($state=="MO"){echo "selected";}?>>Montana</option>
								<option value="NE" <?php if($state=="MO"){echo "selected";}?>>Nebraska</option>
								<option value="NV" <?php if($state=="NV"){echo "selected";}?>>Nevada</option>
								<option value="NH" <?php if($state=="NH"){echo "selected";}?>>New Hampshire</option>
								<option value="NJ" <?php if($state=="NJ"){echo "selected";}?>>New Jersey</option>
								<option value="NM" <?php if($state=="NM"){echo "selected";}?>>New Mexico</option>
								<option value="NY" <?php if($state=="NY"){echo "selected";}?>>New York</option>
								<option value="NC" <?php if($state=="NC"){echo "selected";}?>>North Carolina</option>
								<option value="ND" <?php if($state=="ND"){echo "selected";}?>>North Dakota</option>
								<option value="OH" <?php if($state=="OH"){echo "selected";}?>>Ohio</option>
								<option value="OK" <?php if($state=="OK"){echo "selected";}?>>Oklahoma</option>
								<option value="OR" <?php if($state=="OR"){echo "selected";}?>>Oregon</option>
								<option value="PA" <?php if($state=="PA"){echo "selected";}?>>Pennsylvania</option>
								<option value="RI" <?php if($state=="RI"){echo "selected";}?>>Rhode Island</option>
								<option value="SC" <?php if($state=="SC"){echo "selected";}?>>South Carolina</option>
								<option value="SD" <?php if($state=="SD"){echo "selected";}?>>South Dakota</option>
								<option value="TN" <?php if($state=="TN"){echo "selected";}?>>Tennessee</option>
								<option value="TX" <?php if($state=="TX"){echo "selected";}?>>Texas</option>
								<option value="UT" <?php if($state=="UT"){echo "selected";}?>>Utah</option>
								<option value="VT" <?php if($state=="VT"){echo "selected";}?>>Vermont</option>
								<option value="VA" <?php if($state=="VA"){echo "selected";}?>>Virginia</option>
								<option value="WA" <?php if($state=="WA"){echo "selected";}?>>Washington</option>
								<option value="WV" <?php if($state=="WV"){echo "selected";}?>>West Virginia</option>
								<option value="WI" <?php if($state=="WI"){echo "selected";}?>>Wisconsin</option>
								<option value="WY" <?php if($state=="WY"){echo "selected";}?>>Wyoming</option>
							</select>

							<div class="form-3">
								<label for="zip">ZIP</label>
								<input type="text" name="zip" id="zip" value="<?php echo $zip ?>">
							</div>
							
							<div class="form-3">
								<label for="country">Country</label>
								<input type="text" name="country" id="country" value="<?php echo $country ?>">
							</div>
							
							<label for="access">Access Level</label>
							<select name="access" id="access">
								<option value="admin" <?php if($access=="admin"){echo "selected";}?>>Admin</option>
								<option value="user" <?php if($access=="user"){echo "selected";}?>>User</option>
								<option value="privileged" <?php if($access=="privileged"){echo "selected";}?>>Privileged</option>
							</select>
							
							<label for="active">Active</label>
							<select name="active" id="active">
								<option value="active" <?php if($active=="active"){echo "selected";}?>>Active</option>
								<option value="removed" <?php if($active=="removed"){echo "selected";}?>>Removed</option>
							</select>

						
							<div class="cta">
								<input type="submit" name="update" id="update" value="Update">
							</div>

						</form>

					</div>

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
									$sql = "SELECT product_id, quantity, price, ordertime FROM orders WHERE user_id='$user_id'";


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
											 
											  $total = $quantity * $price;
											  $ordertime = new DateTime($ordertime);
									 		  $ordertime = date_format($ordertime, 'M d, Y');

											$sql2 = "SELECT product_name, image_url FROM products WHERE id='$product_id'";
											  $result2 = $mysqli->query($sql2);
											 if (mysqli_num_rows($result2) == 0){ 
												  echo "No orders were found.";
											  }else{ 
												 while($row = $result2->fetch_assoc()) { 
													  $product_name =$row['product_name'];
													  $image_url =$row['image_url'];

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