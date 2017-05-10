<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp About</title>

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

				<h1>About</h1>

			</section>

			<section class="info-box clearfix">

				<div class="info-box-inner">

					<div class="info-left">

						<h2 class="big-text">
							A Little About Our Camp
						</h2>

					</div>

					<div class="info-right">
						<p>
							We believe in fun and in keeping the summer camp spirit of community and play in our lives. We’re not here to fix you, cleanse you or launch you. We think you’re fantastic just the way you are. We’re here to be at summer camp, a place to relax, adventure, and connect.
						</p>
					</div>

				</div>
				
			</section>

			<div class="content-container">

				<section class="info-box-full clearfix">

					<div class="info-left">

						<img src="img/cabins-around-fire1.jpg" alt="Cabins situated around a campfire">	

					</div>

					<div class="info-right">

						<h2>Accommodations</h2>
						<p>
							At Oconee Big Camp, you gain exclusive access to an entire campground, including all grounds, fields, buildings, and sports facilities. Our lodging options include <a href="catalog.php?category=cabin">cabins</a>, <a href="catalog.php?category=tent">tents</a>, <a href="catalog.php?category=tipi">tipis</a>, and even <a href="catalog.php?category=treehouse">treehouses</a>. We ensure that our accommodations are clean and that all of our camps have the modern amenities to ensure comfort for adults.
						</p>
						<div class="cta">
							<a href="lodging.php">View Lodging</a>
						</div>

					</div>
					
				</section>

				<section class="info-box-full clearfix">

					<div class="info-right info-right-image">
						
						<img src="img/food1.jpg" alt="Plate of food with vegetables on the side">
					</div>

					<div class="info-left">

						<h2>Food</h2>
						<p>
							Part of what differentiates the Oconee Big Camp experience from a traditional kids camp is our gourmet dining. We start each day with a healthy breakfast that always includes tons of coffee. For lunch and dinner, our chefs prepare unique takes on traditional camp classics. Each meal is accompanied by healthy salads, fresh fruit and more. In addition to our standard menu, we offer gluten-free, vegetarian and other options for those with dietary concerns and restrictions.
						</p>
						<!--<div class="cta">
							<a href="#">Food</a>
						</div>	-->

					</div>
					
				</section>

				<section class="info-box-full clearfix">

					<div class="info-left">

						<img src="img/crowd-hands-up1.jpg" alt="Excited campers standing in a crowd raising their hands up">	

					</div>

					<div class="info-right">

						<h2>Activities</h2>
						<p>
							Summer camp is all about trying new things, giving ourselves the opportunity to pick up an old hobby, and about creating memories together. We work to offer our campers the most extensive and wide variety of <a href="register.php">programming</a> possible, so you can choose what you want to do… or what you don’t want to do. All programming is optional, though highly encouraged.
						</p>
						<div class="cta">
							<a href="register.php">View Events</a>
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