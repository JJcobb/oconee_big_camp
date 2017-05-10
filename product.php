<?php

	require("includes/sessionStart.php");

	include("includes/db_connect.php");
	

	if( !isset($_GET['product_id']) ){

		header('Location: home.php');
	}


	/* Submit the review */
	if( isset($_POST['submit_review']) && !empty($_POST['review']) && $_POST['rating'] >= '0' && $_POST['rating'] <= '5' && isset($_GET['product_id']) && $_SESSION['loggedin'] == 'true' && isset($_SESSION['id']) ) {

		/* Remove curly quotes */
	    $search = array("‘", 
	                    "’", 
	                    "“", 
	                    "”"); 

	    $replace = array("'", 
	                     "'", 
	                     '"', 
	                     '"'); 

	    $_POST['review'] = str_replace($search, $replace, $_POST['review']);


		$_POST['review'] = $mysqli->real_escape_string($_POST['review']);

		$new_review_query = "INSERT INTO reviews(review_id, user_id, product_id, review, rating, review_creation_date)
						     VALUES (NULL, '".$_SESSION['id']."', '".$_GET['product_id']."', '".$_POST['review']."', '".$_POST['rating']."', CURRENT_TIMESTAMP)";

		$mysqli->query($new_review_query);

		header('Location: product.php?product_id='.$_GET['product_id']);
	}


	/* Print error text for invalid submission */
	function review_error() {

		if( isset($_POST['submit_review']) && empty($_POST["rating"]) ) {

			echo "<p class='error-text'>Please select a rating from 1 to 5</p>\n";
		}
		else if( isset($_POST['submit_review']) && empty($_POST["review"]) ) {

			echo "<p class='error-text'>Please enter a review</p>\n";
		}

	}


	/* The review form */
	function review_form() {

?>
	<section class="content-container content-below" id="write-review">

		<section class="info-box-full clearfix">

			<h2>Write a Review</h2>
			<?php review_error(); ?>

			<form action="product.php?product_id=<?php print $_GET['product_id']; ?>" method="post" name="newreview" id="newreview">

				<!--<label for="rating">Rating</label>-->
				<input type="hidden" name="rating" id="rating" value="" min="1" max="5">

				<div class="rating-input clearfix">
					<span class="rating-star"></span>
					<span class="rating-star"></span>
					<span class="rating-star"></span>
					<span class="rating-star"></span>
					<span class="rating-star"></span>
				</div>

				<!--<label for="review">Review</label>-->
				<textarea name="review" id="review" rows="5" cols="45" placeholder="Comments"></textarea>

				<div class="cta">
					<input type="submit" name="submit_review" id="submit_review" value="Submit">
				</div>

			</form>

		</section>

	</section>

<?php
	} // END of review_form
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Product</title>

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

				$sesID = $_SESSION['id'];
			?>

			<section class="banner banner-nav">

				<div class="breadcrumbs">
					<ul class="clearfix">


						<?php

							if( !isset($_GET['product_id']) ){
								echo "<p>No product found.</p>";
							}

							else{

								$query = "SELECT product_name, category, sub_category
						                  FROM products WHERE id = ".$_GET['product_id'];

			                    $result = $mysqli->query($query);

			                    while ( $row = $result->fetch_object() ) {

			                    	if($row->category == "Accommodations") {

			                    		echo "<li><a href='lodging.php'>Lodging</a> &gt; </li>\n";

			                    		echo "<li><a href='catalog.php?category=".$row->sub_category."'>".$row->sub_category."s</a> &gt; </li>\n";

			                    		echo "<li>".$row->product_name."</li>\n";
			                    	}

			                    	else if($row->category == "Events") {

			                    		echo "<li><a href='register.php'>Register</a> &gt; </li>\n";

			                    		echo "<li>".$row->product_name."</li>\n";
			                    	}

			                    	else {

			                    		echo "<li><a href='store.php'>Store</a> &gt; </li>\n";

			                    		echo "<li><a href='catalog.php?category=".$row->category."'>".$row->category."</a> &gt; </li>\n";

			                    		echo "<li>".$row->product_name."</li>\n";
			                    	}



			                    }
			                }

						?>

					</ul>
				</div>

			</section>


			<section class="content-container">

				<?php
						
		          	$query = "SELECT id, product_name, category, description, price, image_url, active, stock
					          FROM products WHERE id = ".$_GET['product_id'];

					$product_id = $_GET['product_id'];
		            $result = $mysqli->query($query);

		            while ( $row = $result->fetch_object() ) {

				?>

				
				<div class="selected-product clearfix">

					<figure class="featured-image">
						<div class="image-container">
							<!--<img src="http://sulley.cah.ucf.edu/~ja941580/dig4530c/labs/database/images/cabin-large.jpg">-->

							<?php
								print "<img src='".$row->image_url."' alt='".$row->product_name."'>";
							?>
							
							<!--<figcaption class="product-price">
								<?php
									/*print "$".$row->price;*/
								?>
							</figcaption>-->
						</div>
					</figure>

					<div class="featured-info">

						<h1><!--Product Name-->
							<?php
								print $row->product_name."\n";
							?>
						</h1>

						<p class="price">
							<?php
								if($row->category=="Accommodations"){
									print "$".$row->price." / Night \n";
								}else{
									print "$".$row->price." \n";
								}
							?>
							<!--<i class="fa fa-cart-arrow-down" title="Product in cart"></i>-->
						</p>

						<p><!--Description-->
							<?php
								print $row->description."\n";
							?>
						</p>

						<?php
							if($row->active=="active"){
								if($row->stock=="0"){
									echo "<div class='cta'>";
									echo '<a href="">Out of Stock</a>';
									echo "</div>";
								}else{
									echo "<div class='cta'>";
									echo '<a href="includes/cart_add.php?product_id='. $_GET['product_id'] .'">Add to Cart</a>';
									echo "</div>";
								}
							}
						?>

						<!--<p class="para-line-height">
							<a href="cart.php">View Cart</a>
						</p>-->

						<div class="cta below-cta secondary-cta">
							<?php					
								
								/* If guest */
								if($sesID == 0){
									$sql = "SELECT user_id, product_id, active FROM orders WHERE user_id is NULL AND product_id='$product_id'";
								}

								else{
								  $sql = "SELECT user_id, product_id, active FROM orders WHERE user_id = '$sesID' AND product_id='$product_id'";
								}

								  //run the query against the mysqli query function
								  $result = $mysqli->query($sql);

								  if (mysqli_num_rows($result) == 0){ 
									  echo "No user was found.";
								  }else{ 
									 while($row = $result->fetch_assoc()) { 
										  $user_id =$row['user_id'];
										  $product_id =$row['product_id'];
										  $active =$row['active'];
									 }
									  if($active=="1"){
										echo "<a href='cart.php'>View Cart</a>";
									}
								  } 
							  ?>
						</div>
					</div>

				</div>

			</section>

			<section class="content-container content-below">

				<section class="info-box-full listed-item-box clearfix">

					<h2>Reviews</h2>

					<?php

						if( $_SESSION['loggedin'] == 'true' ){

							echo "<div class='cta'>\n";
							echo "<a href='#write-review'>Write a review</a>\n";
							echo "</div>\n";
						}

					?>


					<?php					
						$query = "SELECT r.review, r.rating, r.product_id, r.user_id, u.last_name, u.first_name,
		 								 DATE_FORMAT(r.review_creation_date, '%M %e, %Y') AS new_review_creation_date
								  FROM reviews r, users u WHERE u.id = r.user_id AND r.product_id = ".$_GET['product_id']." ORDER BY r.review_creation_date";

					
						$result = $mysqli->query($query);

						if (mysqli_num_rows($result) == 0){ 
							echo "<div class='listed-item'>\n";
							echo "<p>This product does not have any reviews.</p>\n";
							echo "</div>\n";
						}
						else{ 
							while ( $row = $result->fetch_object() ) {
							
								echo "\n";
								echo "<div class='listed-item listed-review clearfix'>\n";

								echo "<div class='info-left'>\n";
								echo "<p class='reviewer-name'>".$row->first_name." ".$row->last_name."</p>\n";
								echo "<p>".$row->new_review_creation_date."</p>\n";
								echo "</div>\n";

								echo "<div class='info-right'>\n";
								echo "<div class='stars clearfix'>\n";

								for($i = 0; $i < $row->rating; $i++){

									echo "<img src='img/star-green.svg' alt='Full star' height='40' width='40'>\n";
								}

								for($i; $i < 5; $i++){

									echo "<img src='img/star-hollow-green.svg' alt='Empty star' height='40' width='40'>\n";
								}

								echo "</div>\n";
								echo "<p>".$row->review."</p>\n";
								echo "</div>\n";

								echo "</div>\n";
							 
							}
						} 
					?>

				</section>

			</section>


			<?php
				if( $_SESSION['loggedin'] == 'true' ) {

					review_form();
				}
			?>


			<?php
				require("includes/footer.php");
			?>

		</div>

	</body>
	<?php
		}
		$mysqli->close();
	?>
</html>