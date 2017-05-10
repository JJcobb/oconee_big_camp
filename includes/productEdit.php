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
   if (empty($_POST["product_id"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["product_id"]) <= 11)	{
			if(ctype_digit($_POST["product_id"])){
				$product_id = test_input($_POST["product_id"]);
			}else{
				$valid = false;
			}
		}else{
			$valid = false;
		}
		
   }
	
   if (empty($_POST["product_name"])) {
		$product_nameErr = "* A product name is required";
		$valid = false;
   } else {
	   if(strlen($_POST["product_name"]) <= 45)	{
			$product_name = test_input($_POST["product_name"]);
		}else{
			$product_nameErr = "* product name must be less than 45 characters";
			$valid = false;
		}
		
   }
	
   if (empty($_POST["category"])) {
   } else {
	   if(strlen($_POST["category"]) <= 25){
			$category = test_input($_POST["category"]);
		}else{
			$categoryErr = "* sub categories must be less than 16 characters";
			$valid = false;
		}
   }
   
   if (empty($_POST["subcat"])) {
   } else {
	   if(strlen($_POST["subcat"]) <= 25){
			$subcat = test_input($_POST["subcat"]);
		}else{
			$subcatErr = "* sub categories must be less than 16 characters";
			$valid = false;
		}
   }
   
   if (empty($_POST["price"])) {
		$priceErr = "* A price is required";
		$valid = false;
   } else {
	   if(strlen($_POST["price"]) <= 12){
			$price = test_input($_POST["price"]);
		}else{
			$priceErr = "* price must be less than 12 characters";
			$valid = false;
		}
   }

   if (empty($_POST["cost"])) {
		$costErr = "* A cost is required";
		$valid = false;
   } else {
	   if(strlen($_POST["cost"]) <= 12){
			$cost = test_input($_POST["cost"]);
		}else{
			$costErr = "* cost must be less than 9 characters";
			$valid = false;
		}
   }
  
   if ($_POST["stock"]=="") {
		$valid = false;
   } else {
	   if((strlen($_POST["stock"]) <= 3)) {
			if(ctype_digit($_POST["stock"])){
				$stock = test_input($_POST["stock"]);
			}else{
				$stockErr = "* stock must contain only numbers";
				$valid = false;
			}
		}else{
			$stockErr = "* stock must be 4 or less characters long";
			$valid = false;
		}
   }
	
   if (empty($_POST["description"])) {
   } else {
	   if((strlen($_POST["description"]) <= 500)){
			  	$description = test_input($_POST["description"]);
		}else{
			$descriptionErr = "* description must be 273 characters long or less";
			$valid = false;
		}
   }
	
   if (empty($_POST["image_url"])) {
   } else {
	   if((strlen($_POST["image_url"]) <= 200)){
			  	$image_url = test_input($_POST["image_url"]);
		}else{
			$image_urlErr = "* image url must be 121 characters long or less";
			$valid = false;
		}
   }
	
   if (empty($_POST["weight"])) {
   } else {
	   if((strlen($_POST["weight"]) <= 25)){
			  	$weight = test_input($_POST["weight"]);
		}else{
			$weightErr = "* weight must be 14 characters long or less";
			$valid = false;
		}
   }
	
   if (empty($_POST["size"])) {
   } else {
	   if((strlen($_POST["size"]) <= 25)){
			  	$size = test_input($_POST["size"]);
		}else{
			$sizeErr = "* size must be 15 characters long or less";
			$valid = false;
		}
   }
	
   if (empty($_POST["extra_info"])) {
   } else {
	   if((strlen($_POST["extra_info"]) <= 100)){
			  	$extra_info = test_input($_POST["extra_info"]);
		}else{
			$extra_infoErr = "* extra_info must be 24 characters long or less";
			$valid = false;
		}
   }
	
   if (empty($_POST["sku"])) {
		$valid = false;
   } else {
	   if((strlen($_POST["sku"]) <= 6)){
			  	$sku= test_input($_POST["sku"]);
		}else{
			$skuErr = "* sku must be 7 characters long";
			$valid = false;
		}
   }
	
   if (empty($_POST["active"])) {
		$valid = false;
   } else {
	   if((strlen($_POST["active"]) <= 7)){
			  	$active= test_input($_POST["active"]);
		}else{
			$activeErr = "* active must be 7 characters long or less";
			$valid = false;
		}
   }
   
	
//-------------- start mysql post --------------//	
   if($valid){
	   	header("Location: ../products_view.php");
	   
		if($product_name!=""){
			$sql = "UPDATE products SET product_name='$product_name' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($description!=""){
			$sql = "UPDATE products SET description='$description' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($category!=""){
			$sql = "UPDATE products SET category='$category' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($subcat!=""){
			$sql = "UPDATE products SET sub_category='$subcat' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($price!=""){
			$sql = "UPDATE products SET price='$price' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($cost!=""){
			$sql = "UPDATE products SET cost='$cost' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($stock!=""){
			$sql = "UPDATE products SET stock='$stock' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
		if($image_url!=""){
			$sql = "UPDATE products SET image_url='$image_url' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
				$profile_comp = 0;
			}
		}
		if($weight!=""){
			$sql = "UPDATE products SET weight='$weight' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($size!=""){
			$sql = "UPDATE products SET size='$size' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($extra_info!=""){
			$sql = "UPDATE products SET extra_info='$extra_info' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($sku!=""){
			$sql = "UPDATE products SET sku='$sku' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
	    if($active!=""){
			$sql = "UPDATE products SET active='$active' WHERE id = '$product_id'";
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}
   }else{
	   echo "update failed";
   }
	$mysqli->close();						
		
		exit;
}
?>