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

		<title>Oconee Big Camp Add Order</title>

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

					<h2>Add Order</h2>

					<div class="listed-item clearfix">

						<form action="includes/orderAdd.php" method="post" name="order-add" id="order-add" class="checkout-form label-form">

							<div class="form-3">
								<label for="cust-id">Customer ID</label>
								<input type="number" name="user_id" id="user_id" form="order-add" required>
							</div>

							<div class="input-row">
								<!--<div class="form-3">-->
								<div>
									<label for="prod-id">Product ID</label>
									<input type="number" name="product_id" id="product_id" form="order-add" required>
								</div>

								<!--<div class="form-3">-->
								<div>
									<label for="quantity">Quantity</label>
									<input type="number" name="quantity" id="quantity" form="order-add" required>
								</div>
							</div>

							<!--<p>
								<a href="#">+ Add another product</a>
							</p>-->

							<div class="cta">
								<input type="submit" name="submit" id="submit" value="Create Order" form="order-add">
							</div>

						</form>

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