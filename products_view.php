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

		<title>Oconee Big Camp View Products</title>

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

					<h2>Products</h2>

					<div class="cta">
						<a href="products_add.php">Add Product</a>
					</div>

					<div class="listed-item clearfix">

						<!--<label>Sort by Category:</label>

						<select>
							<option>All</option>
							<option>Events</option>
							<option>Accommodations</option>
							<option>Merchandise</option>
							<option>Camping Clothing</option>
							<option>Camping Equipment</option>
						</select>-->

						<table class="condensed">
							<thead>
								<tr>
									<th class="cart-product">Name</th>
									<th>Category</th>
									<th>Sub Category</th>
									<th>SKU</th>
									<th>Price</th>
									<th>Stock</th>
									<th>Status</th>
									<th>Edit</th>
								</tr>
							</thead>

							<tbody>
								<?php					
								  $sql = "SELECT id, product_name, category, sub_category, sku, price, stock, active FROM products";

								  //run the query against the mysqli query function
								  $result = $mysqli->query($sql);

								  if (mysqli_num_rows($result) == 0){ 
									  echo "No product was found.";
								  }else{ 
									 while($row = $result->fetch_assoc()) { 
										  $id =$row['id'];
										  $product_name =$row['product_name'];
										  $category =$row['category'];
										  $sub_category =$row['sub_category'];
										  $sku =$row['sku'];
										  $price =$row['price'];
										  $stock =$row['stock'];
										  $active =$row['active'];
										 
										print "<tr><td class='cart-product admin-product' data-title='Name'>$product_name</td>";
										print "<td data-title='Category'>$category</td>";
										print "<td data-title='Sub-Category'>$sub_category</td>";
										print "<td data-title='SKU'>$sku</td>";
										print "<td data-title='Price'>$$price</td>";
										print "<td data-title='Stock'>$stock</td>";
										print "<td data-title='status'>$active</td>";
										print "<td data-title='Edit'><a href='products_edit.php?product=$id' title='Edit'><i class='fa fa-pencil-square-o'></i></a></td>";
										 
									 }
								  } 
							  ?>

							</tbody>
						</table>

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