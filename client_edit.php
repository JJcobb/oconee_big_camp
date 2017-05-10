<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");

	if( $_SESSION['loggedin'] == 'false' ){
		header("Location: login.php");
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Oconee Big Camp Account</title>

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

				$accountIDErr = $usernameErr = $emailErr = $phoneErr = $password1Err = $password2Err = $accountEmailErr = $accountPhoneErr = $fnameErr = $lnameErr = $addressErr = $cityErr = $stateErr = $zipErr = $validErr = "";

				require("includes/accountEdit.php")
			?>

			<section class="banner">

				<h1>Profile</h1>

			</section>

			<section class="content-container">

				<section class="info-box-full clearfix">

					<h2>Edit Account</h2>

					<div class="listed-item clearfix">

						<div class="info-left">
							<?php					
							  $sql = "SELECT id, username, first_name, last_name, email, phone, street, city, state, zip FROM users WHERE id = '$sesID'";

							  //run the query against the mysqli query function
							  $result = $mysqli->query($sql);

							  if (mysqli_num_rows($result) == 0){ 
								  echo "No user was found.";
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
								 }
							  } 
						  ?>

							<h3 class="accountHeader">Contact and Shipping</h3>
							<form class="accountInfo" method="post">

								<?php echo $accountIDErr; ?>
								<input type="hidden" autocomplete value="<?php echo $id ?>" class="accountID" name="accountID">

								<label for="accountUser">Username</label>

								<?php
									if($usernameErr){
										echo "<p class='error-text'>".$usernameErr."</p>";
									}
								?>

								<input type="text" autocomplete value="<?php echo $username ?>" class="accountUser" name="accountUser" id="accountUser">

								<br>

								<div class="form-block accountPass1">
									<label for="accountPass1">New Password</label>
									
									<?php
										if($password1Err){
											echo "<p class='error-text'>".$password1Err."</p>";
										}
									?>

									<input type="password" value="" name="accountPass1" id="accountPass1" placeholder="New Password">
								</div>

								<div class="form-block accountPass2">
									<label for="accountPass2">Confirm New Password</label>
									
									<?php
										if($password2Err){
											echo "<p class='error-text'>".$password2Err."</p>";
										}
									?>

									<input type="password" value="" name="accountPass2" id="accountPass2" placeholder="Reenter New Password">
								</div>
								
								<br>

								<div class="form-block accountEmail">
									<label for="accountEmail">Email</label>
									
									<?php
										if($emailErr){
											echo "<p class='error-text'>".$emailErr."</p>";
										}
									?>

									<input type="email" autocomplete value="<?php echo $email ?>" name="accountEmail" id="accountEmail">
								</div>
								
								<div class="form-block accountPhone">
									<label for="accountPhone">Phone</label>
									
									<?php
										if($phoneErr){
											echo "<p class='error-text'>".$phoneErr."</p>";
										}
									?>

									<input type="tel" autocomplete value="<?php echo $phone ?>" name="accountPhone" id="accountPhone">
								</div>
								
								<br>

								<div class="form-block accountFirst">
									<label for="accountFirst">First Name</label>
									
									<?php
										if($fnameErr){
											echo "<p class='error-text'>".$fnameErr."</p>";
										}
									?>

									<input type="text" autocomplete value="<?php echo $first_name ?>" name="accountFirst" id="accountFirst">
								</div>
								
								<div class="form-block accountLast">
									<label for="accountLast">Last Name</label>
									
									<?php
										if($lnameErr){
											echo "<p class='error-text'>".$lnameErr."</p>";
										}
									?>

									<input type="text" autocomplete value="<?php echo $last_name ?>" name="accountLast" id="accountLast">
								</div>
								
								<br>

								<label for="accountStreet">Street Address</label>
								
								<?php
									if($addressErr){
										echo "<p class='error-text'>".$addressErr."</p>";
									}
								?>

								<input type="text" autocomplete value="<?php echo $street ?>" class="accountStreet" name="accountStreet" id="accountStreet">
								
								<br>

								<div class="form-block accountCity">
									<label for="accountCity">City</label>
									
									<?php
										if($cityErr){
											echo "<p class='error-text'>".$cityErr."</p>";
										}
									?>

									<input type="text" autocomplete value="<?php echo $city ?>" name="accountCity" id="accountCity">
								</div>
								
								<div class="form-block accountState">
									<label for="accountState">State</label>
									
									<?php
										if($stateErr){
											echo "<p class='error-text'>".$stateErr."</p>";
										}
									?>

									<input type="text" autocomplete value="<?php echo $state ?>" maxlength="2" name="accountState" id="accountState">
								</div>
								
								<div class="form-block accountZip">
									<label for="accountZip">ZIP</label>
									
									<?php
										if($zipErr){
											echo "<p class='error-text'>".$zipErr."</p>";
										}
									?>

									<input type="text" autocomplete value="<?php echo $zip ?>" maxlength="5" name="accountZip" id="accountZip">
								</div>
								
								<div class="cta">
									<input type="submit" value="Save Changes">
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