<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Lodging</title>

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

		<?php
			/*require("header.php");*/
		?>
		
		<div class="container">

			<?php
				require("includes/header.php");
			?>

			<section class="banner">

				<h1>Lodging</h1>

			</section>

			<div class="content-container">

				<section class="info-box-full clearfix">


					<div class="info-left">

						<img src="img/cabin-large.jpg" alt="Cabin accommodation, with other cabins in the distance">	

					</div>

					<div class="info-right">

						<h2>Cabins</h2>
						<p>
							At Oconee Big Camp, we tend to stick with the altruistic and traditional types of cabins for our camp. Each cabin varies in size, shape, type, and structure. Typically speaking we consider our cabins to lean more towards the classic "wood cabin" experience, with either a complete timber structure or where wood is used as a primary element throughout the house. 
						</p>
						<div class="cta">
							<a href="catalog.php?category=cabin">View Cabins</a>
						</div>

					</div>

					
				</section>

				<section class="info-box-full clearfix">


					<div class="info-right info-right-image">
						
						<img src="img/treehouse-large.jpg" alt="Treehouse with large wooden deck and swinging bench">

					</div>

					<div class="info-left">

						<h2>Treehouses</h2>
						<p>
							Treehouses are one of our most popular accomodations. Modern architecture and construction have allowed these residences to accommodate our campers as well as modern amenities. Treehouses envelop the true definition of a getaway as they are unique, awe-inspiring structures.
						</p>
						<div class="cta">
							<a href="catalog.php?category=treehouse">View Treehouses</a>
						</div>	

					</div>

					
				</section>

				<section class="info-box-full clearfix">


					<div class="info-left">

						<img src="img/tent-large.jpg" alt="Large tent lit from the inside at night">	

					</div>

					<div class="info-right">

						<h2>Tents</h2>
						<p>
							Our tents vary in shape and size and allow for a diverse set of options for our campers. We have simple, traditional tents for those who enjoy sleeping under the stars, as well as deluxe tents with the feel of a hotel suite but in the outdoors.
						</p>
						<div class="cta">
							<a href="catalog.php?category=tent">View Tents</a>
						</div>

					</div>

					
				</section>

				<section class="info-box-full clearfix">


					<div class="info-right info-right-image">
						
						<img src="img/tipi-regular.jpg" alt="Tipi surrounded by lush greenery in the woods">

					</div>

					<div class="info-left">

						<h2>Tipis</h2>
						<p>
							This old-fashioned accommodation comes straight from our Native American roots here in Oconee. Our modern day tipis are now equipped to help ensure each guest is comfortable, most offering beds and unique decorations as well as certain amenities to ensure for an unforgettable experience in nature.
						</p>
						<div class="cta">
							<a href="catalog.php?category=tipi">View Tipis</a>
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