<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Store</title>

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

				<h1>Store</h1>

			</section>

			<div class="content-container">

				<section class="info-box-full clearfix">


					<div class="info-left">

						<img src="img/camp-shirt.jpg" alt="T-shirt with camp branding">	

					</div>

					<div class="info-right">

						<h2>Merchandise</h2>
						<p>
							Enjoy your time here at Oconee Big Camp? Take the camp vibes back home and check out our unique camp merchandise.
						</p>
						<div class="cta">
							<a href="catalog.php?category=merchandise">View Merchandise</a>
						</div>

					</div>

					
				</section>

				<section class="info-box-full clearfix">


					<div class="info-right info-right-image">
						
						<img src="img/camping-clothing1.jpg" alt="Lady wearing outdoor jacket in cool weather">

					</div>

					<div class="info-left">

						<h2>Camping Clothing</h2>
						<p>
							Whether you're suiting up for your upcoming stay at camp or want to gear up for your own excursions, we've got you covered with all the essential camping threads you'll need.
						</p>
						<div class="cta">
							<a href="catalog.php?category=clothing">View Clothing</a>
						</div>	

					</div>

						
				</section>

				<section class="info-box-full clearfix">


					<div class="info-left">

						<img src="img/camping-equipment.jpg" alt="Tent set up with chairs and sleeping bag">	

					</div>

					<div class="info-right">

						<h2>Camping Equipment</h2>
						<p>
							Regardless of whether you're new to camping or an expert, we've got all the materials you need to ensure a fun, comfortable stay at our camp and all of your future endeavors.
						</p>
						<div class="cta">
							<a href="catalog.php?category=equipment">View Equipment</a>
						</div>

					</div>

					
				</section>

			</div>

			<?php
				require("includes/footer.php");
			?>

		</div>

	</body>
	<?php
		$mysqli->close();
	?>
</html>