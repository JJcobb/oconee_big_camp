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

		<title>Oconee Big Camp Add Product</title>

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

					<h2>Add Product</h2>

					<div class="listed-item clearfix">

						<form action="includes/productAdd.php" method="post" name="product-edit" class="checkout-form label-form">
							<div class="form-2">
								<input type="hidden" name="product_id" id="product_id" value="">
							</div>

							<div class="form-2">
								<label for="product_name">Product Name</label>
								<input type="text" name="product_name" id="product_name">
							</div>

							<label for="cat">Category</label>

							<select name="category" id="category">
								<option>Events</option>
								<option>Accommodations</option>
								<option>Merchandise</option>
								<option>Camping Clothing</option>
								<option>Camping Equipment</option>
							</select>

							<div class="form-2">
								<label for="subcat">Sub Category</label>
								<input type="text" name="subcat" id="subcat">
							</div>

							<div class="form-3">
								<label for="price">Price</label>
								<input type="text" name="price" id="price">
							</div>

							<div class="form-3">
								<label for="stock">Quantity in Stock</label>
								<input type="text" name="stock" id="stock">
							</div>

							<div class="form-2">
								<label for="description">Description</label>
								<textarea name="description" id="description" rows="8" cols="45"></textarea>
							</div>

							<div class="form-2">
								<label for="image_url">Image URL</label>
								<input type="url" name="image_url" id="image_url">
							</div>

							<div class="form-3">
								<label for="sku">SKU</label>
								<input type="text" name="sku" id="sku">
							</div>

							<div class="form-3">
								<label for="cost">Cost</label>
								<input type="text" name="cost" id="cost">
							</div>

							<div class="form-3">
								<label for="weight">Weight</label>
								<input type="text" name="weight" id="weight">
							</div>

							<div class="form-3">
								<label for="size">Size</label>
								<input type="text" name="size" id="size">
							</div>

							<div class="form-2">
								<label for="extra_info">Extra Information</label>
								<textarea name="extra_info" id="extra_info" rows="5" cols="45"></textarea>
							</div>


							<div class="cta">
								<input type="submit" name="add" id="add" value="Add Product">
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