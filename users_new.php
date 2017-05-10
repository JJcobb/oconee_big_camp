<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	if(isset($_GET['current_url'])){
	   $url = $_GET['current_url'];
	}else {
	   $url = "home.php"; // default page for 
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Oconee Big Camp New Account</title>

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

				$accountIDErr = $usernameErr = $emailErr = $phoneErr = $password1Err = $password2Err = $accountEmailErr = $accountPhoneErr = $fnameErr = $lnameErr = $addressErr = $cityErr = $stateErr = $zipErr = $validErr = "";

				require("includes/userCreate.php");
			?>

			<section class="banner">

				<h1>Profile</h1>

			</section>

			<section class="content-container">

				<section class="info-box-full clearfix">

					<h2>New Account</h2>

					<div class="listed-item clearfix">

						<div class="info-left">

							<!--<h3 class="accountHeader">Contact and Shipping</h3>-->

							<!--<form class="accountInfo" method="post">

								<label for="accountUser">Username</label>
								<?php echo $usernameErr; ?>
								<input type="text" class="accountUser" name="accountUser">
								<br>
								<?php echo $password1Err; ?>
								<input type="password" value="" class="accountPass1" name="accountPass1" placeholder="To change password enter a New Password">
								<?php echo $password2Err; ?>
								<input type="password" value="" class="accountPass2" name="accountPass2" placeholder="Reenter the New Password">
								<br>
								<?php echo $emailErr; ?>
								<input type="email" class="accountEmail" name="accountEmail">
								<?php echo $phoneErr; ?>
								<input type="tel" class="accountPhone" name="accountPhone">
								<br>
								<?php echo $fnameErr; ?>
								<input type="text" class="accountFirst" name="accountFirst">
								<?php echo $lnameErr; ?>
								<input type="text" class="accountLast" name="accountLast">
								<br>
								<?php echo $addressErr; ?>
								<input type="text" class="accountStreet" name="accountStreet">
								<br>
								<?php echo $cityErr; ?>
								<input type="text" class="accountCity" name="accountCity">
								<?php echo $stateErr; ?>
								<input type="text" class="accountState" maxlength="2" name="accountState">
								<?php echo $zipErr; ?>
								<input type="text" class="accountZip" maxlength="5" name="accountZip">
								<div class="cta">
									<input type="submit" value="Save Changes">
								</div>
							</form>-->


							<form class="accountInfo" method="post">
								<input type="hidden" name="url" id="url" value="<?php echo $url ?>">
								<label for="accountUser">Username</label>

								<?php
									if($usernameErr){
										echo "<p class='error-text'>".$usernameErr."</p>";
									}
								?>

								<input type="text" class="accountUser" name="accountUser" id="accountUser">

								<br>

								<div class="form-block accountPass1">
									<label for="accountPass1">Password</label>

									<?php
										if($password1Err){
											echo "<p class='error-text'>".$password1Err."</p>";
										}
									?>

									<input type="password" name="accountPass1" id="accountPass1" placeholder="Password">
								</div>

								<div class="form-block accountPass2">
									<label for="accountPass2">Confirm Password</label>

									<?php
										if($password2Err){
											echo "<p class='error-text'>".$password2Err."</p>";
										}
									?>

									<input type="password" name="accountPass2" id="accountPass2" placeholder="Reenter Password">
								</div>
								
								<br>

								<div class="form-block accountEmail">
									<label for="accountEmail">Email</label>

									<?php
										if($emailErr){
											echo "<p class='error-text'>".$emailErr."</p>";
										}
									?>

									<input type="email" name="accountEmail" id="accountEmail">
								</div>
								
								<div class="form-block accountPhone">
									<label for="accountPhone">Phone</label>

									<?php
										if($phoneErr){
											echo "<p class='error-text'>".$phoneErr."</p>";
										}
									?>

									<input type="tel" name="accountPhone" id="accountPhone">
								</div>
								
								<br>

								<div class="form-block accountFirst">
									<label for="accountFirst">First Name</label>

									<?php
										if($fnameErr){
											echo "<p class='error-text'>".$fnameErr."</p>";
										}
									?>

									<input type="text" name="accountFirst" id="accountFirst">
								</div>
								
								<div class="form-block accountLast">
									<label for="accountLast">Last Name</label>

									<?php
										if($lnameErr){
											echo "<p class='error-text'>".$lnameErr."</p>";
										}
									?>

									<input type="text" name="accountLast" id="accountLast">
								</div>
								
								<br>

								<label for="accountStreet">Street Address</label>

								<?php
									if($addressErr){
										echo "<p class='error-text'>".$addressErr."</p>";
									}
								?>

								<input type="text" class="accountStreet" name="accountStreet" id="accountStreet">
								
								<br>

								<div class="form-block accountCity">
									<label for="accountCity">City</label>

									<?php
										if($cityErr){
											echo "<p class='error-text'>".$cityErr."</p>";
										}
									?>

									<input type="text" name="accountCity" id="accountCity">
								</div>
								
								<!--<div class="form-block accountState">
									<label for="accountState">State</label>
									<?php echo $stateErr; ?>
									<input type="text" maxlength="2" name="accountState" id="accountState">
								</div>-->

								<div class="form-block accountState">
									<label for="accountState">State</label>

									<?php
										if($stateErr){
											echo "<p class='error-text'>".$stateErr."</p>";
										}
									?>

									<select name="accountState" id="accountState">
										<option selected disabled>Select One</option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
								
								<div class="form-block accountZip">
									<label for="accountZip">ZIP</label>

									<?php
										if($zipErr){
											echo "<p class='error-text'>".$zipErr."</p>";
										}
									?>

									<input type="text" maxlength="5" name="accountZip" id="accountZip">
								</div>
								
								<div class="cta">
									<input type="submit" value="Create Account">
								</div>

							</form>


						</div>

						<div class="info-right">
						
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