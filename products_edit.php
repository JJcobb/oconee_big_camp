<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	require("includes/admin_validate.php");
	

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if(isset($_GET["product"])){
			$product_id = $_GET["product"];
		}
		else{
			$product_id = NULL;
		}
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Edit Product</title>

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
				include("includes/admin_validate.php");
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

					<h2>Edit Product</h2>

					<div class="listed-item clearfix">
						<?php					
								  $sql = "SELECT product_name, description, category, sub_category, sku, price, stock, cost, image_url, weight, size, extra_info, active FROM products WHERE id = '$product_id'";

								  //run the query against the mysqli query function
								  $result = $mysqli->query($sql);

								  if (mysqli_num_rows($result) == 0){ 
									  echo "No product was found.";
									  $product_name = NULL;
									  $description = NULL;
									  $category = NULL;
									  $sub_category = NULL;
									  $sku = NULL;
									  $price = NULL;
									  $stock = NULL;
									  $cost = NULL;
									  $image_url = NULL;
									  $weight = NULL;
									  $size = NULL;
									  $extra_info = NULL;
									  $active = NULL;
								  }else{ 
									 while($row = $result->fetch_assoc()) { 
										  $product_name =$row['product_name'];
										  $description =$row['description'];
										  $category =$row['category'];
										  $sub_category =$row['sub_category'];
										  $sku =$row['sku'];
										  $price =$row['price'];
										  $stock =$row['stock'];
										  $cost =$row['cost'];
										  $image_url =$row['image_url'];
										  $weight =$row['weight'];
										  $size =$row['size'];
										  $extra_info =$row['extra_info'];
										  $active =$row['active'];
										 
									 }
								  } 
							  ?>

						<form action="includes/productEdit.php" method="post" name="product-edit" class="checkout-form label-form">
							<div class="form-2">
								<input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id ?>">
							</div>
							
							<div class="form-2">
								<label for="product_name">Product Name</label>
								<input type="text" name="product_name" id="product_name" value="<?php echo $product_name ?>">
							</div>

							<label>Category</label>

							<select name="category" id="category">
								<option <?php if($category=="Events"){echo "selected";}?>>Events</option>
								<option <?php if($category=="Accommodations"){echo "selected";}?>>Accommodations</option>
								<option <?php if($category=="Merchandise"){echo "selected";}?>>Merchandise</option>
								<option <?php if($category=="Clothing"){echo "selected";}?>>Clothing</option>
								<option <?php if($category=="Equipment"){echo "selected";}?>>Equipment</option>
							</select>

							<div class="form-2">
								<label for="subcat">Sub Category</label>
								<input type="text" name="subcat" id="subcat" value="<?php echo $sub_category ?>">
							</div>

							<div class="form-3">
								<label for="price">Price</label>
								<input type="text" name="price" id="price" value="<?php echo $price ?>">
							</div>

							<div class="form-3">
								<label for="stock">Quantity in Stock</label>
								<input type="text" name="stock" id="stock" value="<?php echo $stock ?>">
							</div>

							<div class="form-2">
								<label for="description">Description</label>
								<textarea name="description" id="description" rows="8" cols="45"><?php echo $description ?></textarea>
							</div>

							<div class="form-2">
								<label for="image_url">Image URL</label>
								<input type="url" name="image_url" id="image_url" value="<?php echo $image_url ?>">
							</div>

							<div class="form-3">
								<label for="sku">SKU</label>
								<input type="text" name="sku" id="sku" value="<?php echo $sku ?>">
							</div>

							<div class="form-3">
								<label for="cost">Cost</label>
								<input type="text" name="cost" id="cost" value="<?php echo $cost ?>">
							</div>

							<div class="form-3">
								<label for="weight">Weight</label>
								<input type="text" name="weight" id="weight" value="<?php echo $weight ?>">
							</div>

							<div class="form-3">
								<label for="size">Size</label>
								<input type="text" name="size" id="size" value="<?php echo $size ?>">
							</div>

							<div class="form-2">
								<label for="extra_info">Extra Information</label>
								<textarea name="extra_info" id="extra_info" rows="5" cols="45"><?php echo $extra_info ?></textarea>
							</div>
							
							<label for="active">Status</label>
							<select name="active" id="active">
								<option value="active" <?php if($active=="active"){echo "selected";}?>>Active</option>
								<option value="removed" <?php if($active=="removed"){echo "selected";}?>>Removed</option>
							</select>

						
						<div class="cta">
							<input type="submit" name="update" id="update" value="Update">
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