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
		
		<title>Oconee Big Camp Admin</title>

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

					<h2>Products</h2>

					<div class="listed-item admin-items clearfix">

						<div class="info-left">

							<ul>
								<!--<li>
									<a href="#">Home</a>

									<div>
										<a href="#">Edit</a>
										<a href="#" class="delete">X</a>
									</div>
								</li>-->

								<li>
									<a href="products_view.php">View Products</a>

								<li>
									<a href="products_add.php">Add New Product</a>
								</li>
							</ul>

						</div>

						<div class="info-right">

						</div>

					</div>
						
				</section>

				<section class="info-box-full clearfix">

					<h2>Orders</h2>

					<div class="listed-item admin-items clearfix">

						<div class="info-left">

							<ul>
								<li>
									<a href="orders_view.php">View Orders</a>
								</li>
								
								<li>
									<a href="orders_add.php">Create New Order</a>
								</li>
							</ul>


						</div>

						<div class="info-right">


						</div>

					</div>
						
				</section>

				<?php
					if ($_SESSION['access'] == "admin") {

						echo 

							'<section class="info-box-full clearfix">

								<h2>Users</h2>

								<div class="listed-item admin-items clearfix">

									<div class="info-left">

										<ul>
											<li>
												<a href="users_view.php">View Users</a>
											</li>
										</ul>


									</div>

									<div class="info-right">


									</div>

								</div>
									
							</section>';

				}

				?>

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