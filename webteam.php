<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Web Development Team</title>

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

				<h1>Team</h1>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<h2>Zachary Bell</h2>

					<div class="listed-item client-info clearfix">


						<div class="info-left">

							<h3 class="webteamheader">Back-End Developer</h3>
							<br>
							<h3 class="webteamheader">Tasks</h3>
							<br>
							<div class = "webteamlist">
							<ul>
								<li>Account System</li>
								<li>Payment System</li>
							</ul>
							</div>


						</div>
					</div>

				</section>

				<section class="info-box-full clearfix">

					<h2>Cameron Coclough</h2>

					<div class="listed-item client-info clearfix">

						<div class="info-left">

							<h3 class="webteamheader">Content Manager</h3>
							<br>
							<h3 class="webteamheader">Tasks</h3>
							<div class = "webteamlist">
								<ul>
									<li>Ratings</li>
								</ul>
							</div>

						</div>
						
					</div>
						
				</section>

				<section class="info-box-full clearfix">

					<h2>Angel Noa</h2>

					<div class="listed-item client-info clearfix">

						<div class="info-left">

							<h3 class="webteamheader">Content Manager</h3>
							<br>
							<h3 class="webteamheader">Tasks</h3>
							<div class = "webteamlist">
								<ul>
									<li>Privacy Policy</li>
									<li>Transaction Fees</li>
								</ul>
							</div>

						</div>
						
					</div>

				</section>

				<section class="info-box-full clearfix">

					<h2>Catherine O'Leary</h2>

					<div class="listed-item client-info clearfix">

						<div class="info-left">

							<h3 class="webteamheader">Back-End Developer</h3>
							<br>
							<h3 class="webteamheader">Tasks</h3>
							<div class = "webteamlist">
								<ul>
									<li>Login System</li>
									<li>Shopping System</li>
								</ul>
							</div>

						</div>

					</div>
						
				</section>

				<section class="info-box-full clearfix">

					<h2>Jacob Vogelbacher</h2>

					<div class="listed-item client-info clearfix">

						<div class="info-left">

							<h3 class="webteamheader">Front-End Developer</h3>
							<br>
							<h3 class="webteamheader">Tasks</h3>
							<div class = "webteamlist">
								<ul>
									<li>Front-end Design</li>
									<li>Responsive Design</li>
									<li>Use Cases</li>
									<li>Site Search</li>
									<li>Product Review System</li>
									<li>Analytics Integration</li>
								</ul>
							</div>

						</div>

					</div>
						
				</section>

				<section class="info-box-full clearfix">

					<h2>Contact</h2>

					<p>
						Phone: (321) 456-7890
						<br>
						Email: camp@oconeecamp.com
						<br>
						Address: 2000 Oconee Trail, GA 31067
					</p>

					<!--<div class="listed-item client-info clearfix">


						<div class="info-left">

							<h3 class="webteamheader">Front-End Developer</h3>
							<br>
							<h3 class="webteamheader">Tasks</h3>
							<div class = "webteamlist">
							<ul>
								<li>Front-end Design</li>
								<li>Responsive Design</li>
								<li>Use Cases</li>
								<li>Site Search</li>
								<li>Product Review System</li>
								<li>Analytics Integration</li>
							</ul>
							</div>
	


						</div>-->
						
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