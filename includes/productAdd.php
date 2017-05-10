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
	   $product_id = "";
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
  
   if (empty($_POST["stock"])) {
		$valid = false;
   } else {
	   if((strlen($_POST["stock"]) <= 3))
		{
			if(ctype_digit($_POST["stock"])){
				$stock = test_input($_POST["stock"]);
			}else{
				$stockErr = "* stock must contain only numbers";
				$valid = false;
			}
		}
		else
		{
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
			$image_urlErr = "* sku must be 7 characters long";
			$valid = false;
		}
   }
   
	
//-------------- start mysql post --------------//		
   if($valid){
	   	header("Location: ../products_view.php");
	   
		$sql = "INSERT INTO products (`product_name`, `description`, `category`, `sub_category`, `price`, `cost`, `stock`, `image_url`, `weight`, `size`, `extra_info`, `sku`) VALUES ('$product_name', '$description', '$category', '$subcat', '$price', '$cost', '$stock', '$image_url', '$weight', '$size', '$extra_info', '$sku')";

		if ($mysqli->query($sql) === TRUE){
		}else{
			echo "Error: " . $sql . "<br>" . $mysqli->error;
		}
   }else{
	   	header("Location: http://localhost/ecommerce/A/products_add.php");
		
   }
	$mysqli->close();						
		
		exit;
}
?>