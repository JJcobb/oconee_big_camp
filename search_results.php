<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title>Oconee Big Camp Search Results</title>

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

				<h1>Search</h1>

			</section>


			<section class="content-container">

				<div class="search-results clearfix">

					<?php

						if( isset($_GET['search']) ){

							$search_query = htmlspecialchars($_GET['search']);

							echo "<h2>Search results for: &ldquo;".$search_query."&rdquo;</h2>";
						}
						else {
							echo "<h2>No results found</h2>";
						}

					?>

					<!--<h2>Search results for: "search query"</h2>-->

					<?php
					
			            /*$query = "SELECT product_id, product_name, category, description, price, product_image_url
						          FROM products WHERE MATCH() AGAINST()";*/


				       
			           /* $query = "SELECT id, product_name, category, description, price, image_url
						          FROM products WHERE MATCH(product_name) AGAINST('".$search_query."') OR
						          					  MATCH(category) AGAINST('".$search_query."') OR
						          					  MATCH(sub_category) AGAINST('".$search_query."') OR
						          					  MATCH(description) AGAINST('".$search_query."') OR
						          					  MATCH(sku) AGAINST('".$search_query."')";*/


  					    $query = "SELECT id, product_name, category, description, price, image_url
						          FROM products WHERE product_name LIKE '%".$search_query."%' OR
						          					  category LIKE '%".$search_query."%' OR
						          					  sub_category LIKE '%".$search_query."%' OR
						          					  description LIKE '%".$search_query."%' OR
						          					  sku LIKE '%".$search_query."%'
						          					  ";


			            $result = $mysqli->query($query);

			            if (mysqli_num_rows($result) == 0){ 
								  echo "<p>No results found.</p>";
						}

						else{ 

				            while ( $row = $result->fetch_object() ) {

			            		print "\n";
				            	print "\t\t\t\t<div class='product-box clearfix'>\n";

				            	print "\t\t\t\t\t<figure class='featured-image'>\n";
				            	print "\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>\n";
				            	print "\t\t\t\t\t\t\t<figure class='image-container' style='background: url(".$row->image_url.");'>\n";
								if($row->category=="Accommodations"){
									print "\t\t\t\t\t\t\t\t<figcaption class='product-price'>$".$row->price." / Night</figcaption>\n";
								}else{
									print "\t\t\t\t\t\t\t\t<figcaption class='product-price'>$".$row->price."</figcaption>\n";
								}
				            	print "\t\t\t\t\t\t\t</figure>\n";
				            	print "\t\t\t\t\t\t</a>\n";
				            	print "\t\t\t\t\t</figure>\n";

				            	print "\t\t\t\t\t<div class='featured-info'>\n";
				            	print "\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>\n";
				            	print "\t\t\t\t\t\t\t<h3>".$row->product_name."</h3>\n";
				            	print "\t\t\t\t\t\t</a>\n";
				            	print "\t\t\t\t\t\t<p class='featured-info-text'>".$row->description."</p>\n";
				            	print "\t\t\t\t\t\t<div class='cta'>\n";
				            	print "\t\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>View Product</a>\n";
				            	print "\t\t\t\t\t\t</div>\n";
				            	print "\t\t\t\t\t</div>\n";

				            	print "\t\t\t\t</div>\n";
				            }
				        }
					
					?>

					<!--
					<div class="product-box clearfix">

						<figure class="featured-image">
							<div class="image-container">

								<?php
									/*print "<img src='".$row->product_image_url."' alt='".$row->product_name."'>";*/
								?>
								
								<figcaption class="product-price">
									<?php
										/*print "$".$row->price;*/
									?>
								</figcaption>
							</div>
						</figure>

						<div class="featured-info">

							<h3>
								<?php
									/*print $row->product_name;*/
								?>
							</h3>
							<p>
								<?php
									/*print $row->description;*/
								?>
							</p>

							<div class="cta">
								<a href="#">View Product</a>
							</div>
						</div>

					</div>-->

				</div>

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