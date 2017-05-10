<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Redirect</title>

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

				<h1>Redirect</h1>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<h2>You Cannot View This Page</h2>

					<div class="listed-item client-info clearfix">

						<div class="info-left">

							<p><a href="login.php">Login</a></p>

        					<p><a href="client.php">User Profile</a></p>

    						<p><a href="logout.php">Logout</a></p>

						</div>

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