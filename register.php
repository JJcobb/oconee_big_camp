<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Register</title>

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

				<h1>Register</h1>

			</section>

			<div class="content-container container-first">

				<section class="info-box-full listed-item-box clearfix" id="detox">


					<div class="info-left info-blank">
						&nbsp;
					</div>

					<div class="info-right">
						<h2>Digital Detox</h2>
					</div>


					<?php

						/*$query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE MATCH(product_name) AGAINST ('detox') OR
		          			                           MATCH(description) AGAINST ('detox')
		          			                           ";*/


                        $query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE product_name LIKE '%detox%' OR
		          			                          description LIKE '%detox%'
		          			                           ";


                        $result = $mysqli->query($query);

		            	while ( $row = $result->fetch_object() ) {

		            		echo "\n";
		            		echo "\t\t\t\t<div class='listed-item clearfix'>\n";
	            			echo "\t\t\t\t\t<div class='info-left'>\n";
        					echo "\t\t\t\t\t\t<img src='".$row->image_url."' alt='".$row->product_name."'>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t<div class='info-right'>\n";
        					echo "\t\t\t\t\t\t<h3>".$row->product_name."</h3>\n";
        					echo "\t\t\t\t\t\t<p>".$row->description."</p>\n";
        					echo "\t\t\t\t\t\t<div class='cta'>\n";
        					echo "\t\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>View Event</a>\n";
        					echo "\t\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t</div>\n";

		            	}

					?>

					
				</section>

				<section class="info-box-full listed-item-box clearfix" id="team">


					<h2>Team Building</h2>


					<?php

						/*$query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE MATCH(sub_category) AGAINST ('team')";*/


		                $query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE sub_category LIKE 'team'";


                        $result = $mysqli->query($query);

		            	while ( $row = $result->fetch_object() ) {

		            		echo "\n";
		            		echo "\t\t\t\t<div class='listed-item clearfix'>\n";
	            			echo "\t\t\t\t\t<div class='info-right info-right-image'>\n";
        					echo "\t\t\t\t\t\t<img src='".$row->image_url."' alt='".$row->product_name."'>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t<div class='info-left'>\n";
        					echo "\t\t\t\t\t\t<h3>".$row->product_name."</h3>\n";
        					echo "\t\t\t\t\t\t<p>".$row->description."</p>\n";
        					echo "\t\t\t\t\t\t<div class='cta'>\n";
        					echo "\t\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>View Event</a>\n";
        					echo "\t\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t</div>\n";

		            	}

					?>

					
				</section>

				<section class="info-box-full listed-item-box clearfix" id="survival">


					<div class="info-left info-blank">
						&nbsp;
					</div>

					<div class="info-right">
						<h2>Survival Weekend</h2>
					</div>


					<?php

						/*$query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE MATCH(product_name) AGAINST ('survival') OR
		          			                           MATCH(description) AGAINST ('survival')
		          			                           ";*/


                        $query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE product_name LIKE '%survival%' OR
		          			                          description LIKE '%survival%'
		          			                           ";


                        $result = $mysqli->query($query);

		            	while ( $row = $result->fetch_object() ) {

		            		echo "\n";
		            		echo "\t\t\t\t<div class='listed-item clearfix'>\n";
	            			echo "\t\t\t\t\t<div class='info-left'>\n";
        					echo "\t\t\t\t\t\t<img src='".$row->image_url."' alt='".$row->product_name."'>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t<div class='info-right'>\n";
        					echo "\t\t\t\t\t\t<h3>".$row->product_name."</h3>\n";
        					echo "\t\t\t\t\t\t<p>".$row->description."</p>\n";
        					echo "\t\t\t\t\t\t<div class='cta'>\n";
        					echo "\t\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>View Event</a>\n";
        					echo "\t\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t</div>\n";

		            	}

					?>


					
				</section>

				<section class="info-box-full listed-item-box clearfix" id="single-day">


					<h2>Single Day Events</h2>


					<?php

		               /*$query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE sub_category LIKE 'day' OR
					                                  MATCH(sub_category) AGAINST ('afternoon')
					                                  ";*/


                        $query = "SELECT id, product_name, description, price, image_url
					              FROM products WHERE sub_category LIKE 'day' OR
					                                  sub_category LIKE 'afternoon'
					                                  ";


                        $result = $mysqli->query($query);

		            	while ( $row = $result->fetch_object() ) {

		            		echo "\n";
		            		echo "\t\t\t\t<div class='listed-item clearfix'>\n";
	            			echo "\t\t\t\t\t<div class='info-right info-right-image'>\n";

	            			/*print "\t\t\t\t\t<figure class='featured-image'>\n";
			            	print "\t\t\t\t\t\t\t<figure class='image-container' style='background: url(".$row->image_url.");'>\n";
			            	print "\t\t\t\t\t\t\t\t<figcaption class='product-price'>".$row->price."</figcaption>\n";
			            	print "\t\t\t\t\t\t\t</figure>\n";
			            	print "\t\t\t\t\t</figure>\n";*/

        					echo "\t\t\t\t\t\t<img src='".$row->image_url."' alt='".$row->product_name."'>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t<div class='info-left'>\n";
        					echo "\t\t\t\t\t\t<h3>".$row->product_name."</h3>\n";
        					echo "\t\t\t\t\t\t<p>".$row->description."</p>\n";
        					echo "\t\t\t\t\t\t<div class='cta'>\n";
        					echo "\t\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>View Event</a>\n";
        					echo "\t\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t\t</div>\n";
        					echo "\t\t\t\t</div>\n";

		            	}

					?>

					
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