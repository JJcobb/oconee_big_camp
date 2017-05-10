<?php

include("db_connect.php");

//test and clean inpput data
function test_input($data) {
   $data = trim($data);
   $data = str_replace("'","''",$data);
   $data = str_replace('"','""',$data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


// define variables and set to empty values
$accountUserErr = $passwordErr = $accountPass1Err = $accountPass2Err = $password1Err = $password2Err = $accountEmailErr = $accountPhoneErr = $accountFirstErr = $accountLastErr = $accountStreetErr = $accountCityErrErr = $accountState = $accountZipErr = $validErr = "";
$accountUser = $password = $accountPass1 = $accountPass2 = $password1 = $password2 = $accountEmail = $accountPhone = $phone = $accountFirst = $accountLast = $accountStreet = $accountCity = $accountState = $accountZip = $valid = "";

$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//using above instead of isset
	//validating inputs
   if (empty($_POST["user_id"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["user_id"]) <= 11)	{
			if(ctype_digit($_POST["user_id"])){
				$user_id = test_input($_POST["user_id"]);
			}else{
				$valid = false;
			}
		}else{
			$valid = false;
		}
		
   }
	
	
   if (empty($_POST["username"])) {
		$usernameErr = "* A username is required";
		$valid = false;
   } else {
	   if(strlen($_POST["username"]) <= 25)	{
			if(ctype_alnum($_POST["username"])){
				$username = test_input($_POST["username"]);
				
			}else{
				$usernameErr = "* Username must contain only numbers and letters";
				$valid = false;
			}
		}else{
			$usernameErr = "* Username must be less than 25 characters";
			$valid = false;
		}
		
   }
  
   if (empty($_POST["email"])) {
		$emailErr = "* An Email is required";
		$valid = false;
   } else {
	// check if e-mail address is well-formed
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$emailErr = "* Invalid email format";
		$valid = false;
	}else{
		$email = test_input($_POST["email"]);
		
	}
   }
	
   if (empty($_POST["phone"])) {
		
   } else {
	   if((strlen($_POST["phone"]) <= 15)){
			  	$phone = test_input($_POST["phone"]);
		   		$phone = preg_replace('/\D+/', '', $phone);		
		}else{
			$phoneErr = "* Phone number must be 12 characters long and not contain dashes(-)";
			$valid = false;
		}
   }
   
   if (empty($_POST["fname"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["fname"]) <= 25){
			if(ctype_alpha($_POST["fname"])){
				$fname = test_input($_POST["fname"]);
				
			}else{
				$fnameErr = "* First name can only contain only letters";
				$valid = false;
			}
		}else{
			$fnameErr = "* First name must be less than 25 characters";
			$valid = false;
		}
   }
   
   if (empty($_POST["lname"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["lname"]) <= 25){
			if(ctype_alpha($_POST["lname"])){
				$lname = test_input($_POST["lname"]);
				
			}else{
				$lnameErr = "* Last name can only contain only letters";
				$valid = false;
			}
		}else{
			$lnameErr = "* Last name must be less than 25 characters";
			$valid = false;
		}	
   }
   
   if (empty($_POST["city"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["city"]) <= 25){
			$city = test_input($_POST["city"]);
			
		}else{
			$cityErr = "* City must be less than 25 letters long";
			$valid = false;
		}	
   }
   
   if (empty($_POST["street"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["street"]) <= 50)	{
			$address = test_input($_POST["street"]);
			
		}else{
			$addressErr = "* Address must be less than 50 characters";
			$valid = false;
		}
		
   }
   
   if (empty($_POST["state"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["state"]) == 2){
			if(ctype_alpha($_POST["state"])){
				$state = test_input($_POST["state"]);
				
			}else{
				$stateErr = "* State cna only contain letters";
				$valid = false;
			}
		}else{
			$stateErr = "* State must be 2 letters long";
			$valid = false;
		}	
   }

   if (empty($_POST["zip"])) {
		$valid = false;
   } else {
	   if((strlen($_POST["zip"]) == 5))
		{
			if(ctype_digit($_POST["zip"])){
				$zip = test_input($_POST["zip"]);
				
			}else{
				$zipErr = "* Zip Code must contain only numbers";
				$valid = false;
			}
		}
		else
		{
			$zipErr = "* Zip Code must be 5 characters long";
			$valid = false;
		}
   }
	
   if (empty($_POST["country"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["country"]) <= 25){
			$country = test_input($_POST["country"]);
			
		}else{
			$countryErr = "* country must be less than 25 letters long";
			$valid = false;
		}	
   }
	
   if (empty($_POST["access"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["access"]) <= 25){
			$access = test_input($_POST["access"]);
			
		}else{
			$accessErr = "* access level must be less than 25 letters long";
			$valid = false;
		}	
   }
	
   if (empty($_POST["active"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["active"]) <= 25){
			$active = test_input($_POST["active"]);
			
		}else{
			$activeErr = "* active level must be less than 25 letters long";
			$valid = false;
		}	
   }

//-------------- start mysql post --------------//		
	
   if($valid){
	   	header("Location: ../users_view.php");
	   
		
	    if($username!=""){
			$sql = "UPDATE users SET `username`='$username' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($email!=""){
			$sql = "UPDATE users SET `email`='$email' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($fname!=""){
			$sql = "UPDATE users SET first_name='$fname' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($lname!=""){
			$sql = "UPDATE users SET last_name='$lname' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($address!=""){
			$sql = "UPDATE users SET street='$address' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($city!=""){
			$sql = "UPDATE users SET city='$city' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($state!=""){
			$sql = "UPDATE users SET state='$state' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($zip!=""){
			$sql = "UPDATE users SET zip='$zip' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
				$profile_comp = 0;
			}
		}
		if($phone!=""){
			$sql = "UPDATE users SET phone='$phone' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($country!=""){
			$sql = "UPDATE users SET country='$country' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($access!=""){
			$sql = "UPDATE users SET access='$access' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if(active!=""){
			$sql = "UPDATE users SET active='$active' WHERE id = '$user_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
   }
		$mysqli->close();						
		
		exit;
}
?>