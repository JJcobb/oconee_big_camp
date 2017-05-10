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
   if (empty($_POST["accountID"])) {
		$accountIDErr = "* An accountID is required";
		$valid = false;
   } else {
	   if(strlen($_POST["accountID"]) <= 3)	{
			if(ctype_digit($_POST["accountID"])){
				$accountID = test_input($_POST["accountID"]);
				
			}else{
				$accountIDErr = "* accountID must contain only numbers";
				$valid = false;
			}
		}else{
			$accountIDErr = "* accountID must be less than 3 characters";
			$valid = false;
		}
		
   }
	
   if (empty($_POST["accountUser"])) {
		$usernameErr = "* A username is required";
		$valid = false;
   } else {
	   if(strlen($_POST["accountUser"]) <= 25)	{
			if(ctype_alnum($_POST["accountUser"])){
				$username = test_input($_POST["accountUser"]);
				
			}else{
				$usernameErr = "* Username must contain only numbers and letters";
				$valid = false;
			}
		}else{
			$usernameErr = "* Username must be less than 25 characters";
			$valid = false;
		}
		
   }
   
   if (empty($_POST["accountPass1"])) {
		$password1Err = "* A password is required";
   } else {
	   if(strlen($_POST["accountPass1"]) <= 25){
			$password1 = test_input($_POST["accountPass1"]);
		}else{
			$passwordErr = "* Password must be less than 25 characters";
			$valid = false;
		}
   }
   
   if (empty($_POST["accountPass2"])) {
		$password2Err = "* A password is required";
   } else {
	   if(strlen($_POST["accountPass2"]) <= 25){
			$password2 = test_input($_POST["accountPass2"]);
		}else{
			$password2Err = "* Password must be less than 25 characters";
			$valid = false;
		}
   }
   
  if($password1==$password2){
	   $password = test_input($_POST["accountPass1"]);
	   $hash_password = md5($password);
	   //Zach's attempt to make the password hashing work
	   //$password = password_hash($password, PASSWORD_BCRYPT);
	   
   }else{
	   $password2Err = "* Passwords words must match";
	   $valid = false;
   }
	
  
   if (empty($_POST["accountEmail"])) {
		$emailErr = "* An Email is required";
		$valid = false;
   } else {
	// check if e-mail address is well-formed
	if (!filter_var($_POST["accountEmail"], FILTER_VALIDATE_EMAIL)) {
		$emailErr = "* Invalid email format";
		$valid = false;
	}else{
		$email = test_input($_POST["accountEmail"]);
		
	}
   }
	
   if (empty($_POST["accountPhone"])) {
		$phoneErr = "* A Phone Number is required";
		$valid = false;		
   } else {
	   if((strlen($_POST["accountPhone"]) <= 12)){
			  	$phone = test_input($_POST["accountPhone"]);
		   		$phone = preg_replace('/\D+/', '', $phone);
				
		}else{
			$phoneErr = "* Phone number must be 12 characters long and not contain dashes(-)";
			$valid = false;
		}
   }
   
   if (empty($_POST["accountFirst"])) {
   		$fnameErr = "* A first name is required";
		$valid = false;
   } else {
	   if(strlen($_POST["accountFirst"]) <= 25){
			if(ctype_alpha($_POST["accountFirst"])){
				$fname = test_input($_POST["accountFirst"]);
				
			}else{
				$fnameErr = "* First name can only contain only letters";
				$valid = false;
			}
		}else{
			$fnameErr = "* First name must be less than 25 characters";
			$valid = false;
		}
   }
   
   if (empty($_POST["accountLast"])) {
   		$lnameErr = "* A last name is required";
		$valid = false;
   } else {
	   if(strlen($_POST["accountLast"]) <= 25){
			if(ctype_alpha($_POST["accountLast"])){
				$lname = test_input($_POST["accountLast"]);
				
			}else{
				$lnameErr = "* Last name can only contain only letters";
				$valid = false;
			}
		}else{
			$lnameErr = "* Last name must be less than 25 characters";
			$valid = false;
		}	
   }
   
   if (empty($_POST["accountCity"])) {
   		$cityErr = "* City is required";
		$valid = false;
   } else {
	   if(strlen($_POST["accountCity"]) <= 25){
			$city = test_input($_POST["accountCity"]);
			
		}else{
			$cityErr = "* City must be less than 25 letters long";
			$valid = false;
		}	
   }
   
   if (empty($_POST["accountStreet"])) {
   		$addressErr = "* Address is required";
		$valid = false;
   } else {
	   if(strlen($_POST["accountStreet"]) <= 50)	{
			$address = test_input($_POST["accountStreet"]);
			
		}else{
			$addressErr = "* Address must be less than 50 characters";
			$valid = false;
		}
		
   }
   
   if (empty($_POST["accountState"])) {
   		$stateErr = "* State is required";
		$valid = false;
   } else {
	   if(strlen($_POST["accountState"]) == 2){
			if(ctype_alpha($_POST["accountState"])){
				$state = test_input($_POST["accountState"]);
				
			}else{
				$stateErr = "* State can only contain letters";
				$valid = false;
			}
		}else{
			$stateErr = "* State must be 2 letters long";
			$valid = false;
		}	
   }

   if (empty($_POST["accountZip"])) {
		$valid = false;
		$zipErr = "* Zip code is required";
   } else {
	   if((strlen($_POST["accountZip"]) == 5))
		{
			if(ctype_digit($_POST["accountZip"])){
				$zip = test_input($_POST["accountZip"]);
				
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
	
//-------------- start mysql post --------------//		
   if($valid){
	   	header("Location: client.php");
	   
	    if($username!=""){
			$sql = "UPDATE users SET `username`='$username' WHERE id = '$accountID' LIMIT 1";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($hash_password!=""){
			$sql = "UPDATE users SET `password`='$hash_password' WHERE id = '$accountID' LIMIT 1";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($email!=""){
			$sql = "UPDATE users SET `email`='$email' WHERE id = '$accountID' LIMIT 1";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($fname!=""){
			$sql = "UPDATE users SET first_name='$fname' WHERE id = '$accountID'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($lname!=""){
			$sql = "UPDATE users SET last_name='$lname' WHERE id = '$accountID'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($address!=""){
			$sql = "UPDATE users SET street='$address' WHERE id = '$accountID'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($city!=""){
			$sql = "UPDATE users SET city='$city' WHERE id = '$accountID'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($state!=""){
			$sql = "UPDATE users SET state='$state' WHERE id = '$accountID'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($zip!=""){
			$sql = "UPDATE users SET zip='$zip' WHERE id = '$accountID'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
				$profile_comp = 0;
			}
		}
		if($phone!=""){
			$sql = "UPDATE users SET phone='$phone' WHERE username = '$username'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}

		$mysqli->close();						
		
		exit;
   } else {
   		   	   


   }
}
?>