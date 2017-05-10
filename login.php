<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	if(isset($_GET['current_url'])){
	   $url = $_GET['current_url'];
	}else {
	   $url = "home.php"; // default page for 
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Login to Oconee Big Camp</title>
		<style>
			@import url("css/reset.css");
			@import url("css/styles.css");
			@import url("css/font-awesome/css/font-awesome.min.css");
		</style>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--<script type="text/javascript" src="js/login_validation.js"></script>-->
		<script src="js/functions.js"></script>

		<?php
			include_once("includes/analyticstracking.php");
		?>
		
	</head>
	<body>
		<div class="container">
			<?php
				require("includes/header.php");
				require("includes/login_validate.php");
			?>
		

			<section class="banner">

				<h1>Log In</h1>

			</section>
		
			<div class="content-container" id="login">
				<?php
					if($loginErr){
						echo "<p class='error-text'>".$loginErr."</p>";
					}
				?>
				<form method="post" name="login" class="login">
					<input type="hidden" name="url" id="url" value="<?php echo $url ?>">
					<input type="text" name="username" id="username" placeholder="Username">
					<br>
					<input type="password" name="password" id="password" placeholder="Password">
					
					<input type="submit" id="login-submit" value="Log In">
					
					<div id="results"></div>
					
					<!--
					<div class="cta">
						<a href="#">Log In</a>
					</div>
					-->
				</form>

				<h3 class="cta secondary-cta">
					<a href = "users_new.php" >Create Account</a>
				</h3>
			
			</div>
		
			<?php
				require("includes/footer.php");
			?>
		</div>
	</body>
</html>