<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	require("includes/admin_validate.php");
	require("includes/priv_validate.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp View Users</title>

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

					<h2>Users</h2>

					<div class="listed-item clearfix">

						<table>
							<thead class="condensed">
								<tr>
									<!--<th>ID</th>-->
									<th>Username</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Address</th>
									<th>Status</th>
									<th>Edit</th>
								</tr>
							</thead>

							<tbody>
								<?php					
								  $sql = "SELECT id, username, first_name, last_name, email, phone, street, city, state, zip, active FROM users";

								  //run the query against the mysqli query function
								  $result = $mysqli->query($sql);

								  if (mysqli_num_rows($result) == 0){ 
									  echo "No users were found.";
								  }else{ 
									 while($row = $result->fetch_assoc()) { 
										  $id =$row['id'];
										  $username =$row['username'];
										  $first_name =$row['first_name'];
										  $last_name =$row['last_name'];
										  $email =$row['email'];
										  $phone =$row['phone'];
										  $street =$row['street'];
										  $city =$row['city'];
										  $state =$row['state'];
										  $zip =$row['zip'];
										  $active =$row['active'];
										 
											print "<tr><td data-title='Username'>$username</td>";
											print "<td data-title='Name'>$first_name $last_name</td>";
											print "<td data-title='Email'>$email</td>";
											print "<td data-title='Phone'>$phone</td>";
											print "<td data-title='Address'>$street, $city, $state, $zip</td>";
										 	print "<td data-title='status'>$active</td>";
											print "<td data-title='Edit'><a href='users_edit.php?user=$id' title='Edit'><i class='fa fa-pencil-square-o'></i></a></td></tr>";
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