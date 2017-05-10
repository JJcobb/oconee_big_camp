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

					<ul class="clearfix">
						<li><a href="home.php">Return to Homepage</a></li>
					</ul>
					
				</div>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<h2>Order Status</h2>

					<div class="listed-item clearfix">

						<?php

							/* Determine the next order */
							$query = "SELECT order_id FROM orders WHERE order_id IS NOT NULL";

							$result = $mysqli->query($query);

							$nextOrder = 1;

							while( $row = $result->fetch_object() ){

								if( $row->order_id == $nextOrder ){

									$nextOrder = $row->order_id + 1;
								}
							}


							/* Update the order */

							/* If guest */
							if($sesID == 0){
								$query = "UPDATE orders SET active = 0, order_id = $nextOrder, ordertime = CURRENT_TIMESTAMP WHERE user_id is NULL AND active = 1";
							}
							else{
								$query = "UPDATE orders SET active = 0, order_id = $nextOrder, ordertime = CURRENT_TIMESTAMP WHERE user_id = $sesID AND active = 1";
							}

							$result = $mysqli->query($query);

							if (mysqli_affected_rows($mysqli) == 0) {
								echo "<p>There are no active orders associated with your account.</p>";
							}

							else {
								echo "<p>Your order has been successfully processed</p>";
							}

						?>

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