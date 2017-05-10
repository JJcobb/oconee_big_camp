<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	/*if( !$_GET['category'] ){
		header("Location: lodging.php");
	}*/


	if( isset($_GET['category']) ) {

		$current_category = htmlspecialchars($_GET['category']);

		/*if( $_GET['category'] == "cabins" ){

			$current_category = "Cabin";
		}
		else if( $_GET['category'] == "treehouses" ){

			$current_category = "Treehouse";
		}
		else if( $_GET['category'] == "tents" ){

			$current_category = "Tent";
		}
		else if( $_GET['category'] == "tipis" ){

			$current_category = "Tipi";
		}
		else {
			$current_category = "Other";
		}*/
	}


?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title>Oconee Big Camp Catalog</title>

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
				/*$sesID = $_SESSION['id'];*/
			?>
			
			<section class="banner">

				<?php

					echo "<h1>".$current_category;


					$query = "SELECT category, sub_category
		          			  FROM products WHERE sub_category = '".$current_category."'";

      			    $result = $mysqli->query($query);

      			    if ( $row = $result->fetch_object() ) {
      			    
      			    	if( $row->category == "Accommodations" ) {
      			    		echo "s";
      			    	}

      				}

					echo "</h1>";

				?>

				<!--<h1>Category</h1>-->

			</section>


			<section class="content-container">

				<?php

					/*$query = "SELECT product_id, product_name, category, description, price, product_image_url
					          FROM products WHERE MATCH(category) AGAINST('".$current_category."')";*/

		          /*$query = "SELECT id, product_name, category, description, price, image_url
		          			FROM products WHERE MATCH(category, sub_category) AGAINST('".$current_category."' IN BOOLEAN MODE)";*/


          			$query = "SELECT id, product_name, category, description, price, image_url, active
		          			  FROM products WHERE category = '".$current_category."' OR
		          			                       sub_category = '".$current_category."'";

                    /*$query = "SELECT id, product_name, category, description, price, image_url
		          			  FROM products WHERE category = 'cabin' OR
		          			                       sub_category = 'cabin'";*/

		            /*$query = "SELECT product_id, product_name, category, description, price, product_image_url
					          FROM products";*/


		            $result = $mysqli->query($query);

		            if (mysqli_num_rows($result) == 0){ 
						echo "<p>No products found.</p>";
				    }else{ 

			            while ( $row = $result->fetch_object() ) {
								if($row->active=="active"){
									print "\n";
									print "\t\t\t\t<div class='product-box clearfix'>\n";

									print "\t\t\t\t\t<figure class='featured-image'>\n";
									print "\t\t\t\t\t\t<a href='product.php?product_id=".$row->id."'>\n";
									print "\t\t\t\t\t\t\t<figure class='image-container' style='background: url(".$row->image_url.");'>\n";
									/*print "<img src='".$row->product_image_url."' alt='".$row->product_name."'>";*/
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