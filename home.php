<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Home</title>

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

		<section class="hero">

			<?php
				require("includes/header.php");
			?>

			<img src="img/logo-tipi.png" width="400" height="270" class="hero-logo" alt = "Logo">
			<h1>Grown up Summer Camp</h1>


			<div class="cta">
				<a href="register.php">Register</a>
			</div>
		</section>

		<div class="container container-home">

			<section class="info-box info-box-home clearfix">

				<div class="info-box-inner">

					<div class="info-left">

						<h2 class="big-text">
							Experience the Fun of Camp
						</h2>

					</div>

					<div class="info-right">
						<p>
							Camp is what happens when we disconnect from the distractions of everyday life and slow down. Amongst the hidden nooks of trees, lakes, creeks, rivers and bridges, we find the space to explore – remembering what being human really feels like.
						</p>
					</div>

				</div>
				
			</section>

			<section class="featured clearfix">

				<?php

					$query = "SELECT id, product_name, description, price, category, image_url
					          FROM products WHERE id = 44";

		            $result = $mysqli->query($query);

		            while ( $row = $result->fetch_object() ) {
				?>

				<div class="featured-header">
					<h2>Featured</h2>
				</div>

				<div class="featured-product clearfix">

					<figure class="featured-image">
						<figure class="image-container">

							<?php
								print "<img src='".$row->image_url."' alt='".$row->product_name."'>";
							?>
							
							<figcaption class="product-price">
								<?php
									if($row->category=="Accommodations"){
										print "$".$row->price." / Night \n";
									}else{
										print "$".$row->price." \n";
									}
								?>
							</figcaption>
						</figure>
					</figure>

					<div class="featured-info">

						<h3>
							<?php
								print $row->product_name."\n";
							?>
						</h3>
						<p>
							<?php
								print $row->description."\n";
							?>
						</p>

						<div class="cta">
							<a href="product.php?product_id=<?php print $row->id ?>">View Product</a>
						</div>
					</div>

				</div>

			</section>

			<section class="offerings">

				<div class="three-items clearfix">

					<div class="item-box">

						<img src="img/cabins-around-fire1.jpg" alt="Cabins situated around a campfire">
						<h3>Accommodations</h3>
						<p>We offer a diverse selection of residence options ranging from traditional <a href="catalog.php?category=cabin">cabins</a> to <a href="catalog.php?category=tipi">tipis</a> and <a href="catalog.php?category=treehouse">treehouses</a>.</p>

					</div>

					<div class="item-box">
						<div>
						<img src="img/food1.jpg" alt="Plate of food with vegetables on the side">
					</div>
						<h3>Food</h3>
						<p>Think of your favorite camp food, upgraded for your adult palate - healthy and delicious comfort food.</p>

					</div>

					<div class="item-box item-last">
						
						<img src="img/crowd-hands-up1.jpg" alt="Excited campers standing in a crowd raising their hands up">
						<h3>Activities</h3>
						<p>Each <a href="register.php">camp session</a> offers a variety of different arts and outdoor activities to choose from.</p>

					</div>

				</div>

				<div class="cta">
					<a href="about.php">Learn More</a>
				</div>
				
			</section>

			<?php
				}
				require("includes/footer.php");
			?>

		</div>

	</body>
	<?php
		
		$mysqli->close();
	?>
</html>