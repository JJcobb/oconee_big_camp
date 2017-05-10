<?php

include("db_connect.php");

echo "Hello World";

	//Update
	//echo "Hello World";
	
	$id = $_GET["id"];
	//$_GET["product".$id];
	
	//echo "Number of IDs: " . $_GET["id"];
	$max = $_GET["id"]; //The highest id value. AKA length-1;
	
	//echo "<br><br> Product Quantities: <br>";
	
	for ($i = 0; $i <= $max; $i++){
		//echo $_GET["product".$i] . "<br>";
		//echo "Product ID: " . $_GET["product_id".$i] . "<br>";
		
		$product_id = $_GET["product_id".$i];
		$quantity = $_GET["quantity".$i];
		$order_id = $_GET["order_id".$i];
		
		//echo "Table ID number: " . $table_id;
		
		
		//Update the quanity in the database, table = orders
		$sql = "UPDATE orders SET quantity = $quantity WHERE order_id = $order_id AND product_id= $product_id";
		$result = $mysqli->query($sql);

		if ($result === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $mysqli->error;
		}
	}
	

	
	header("location: ../orders_edit.php?order=".$order_id."")


/*


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
	echo "<br>order id: ".$_POST["order_id"];
   if (empty($_POST["order_id"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["order_id"]) <= 10)	{
			if(ctype_digit($_POST["order_id"])){
				$order_id = test_input($_POST["order_id"]);
			}else{
				$valid = false;
			}
		}else{
			$valid = false;
		}
		
   }
	echo "<br>product id: ".$_POST["product_id"];
	if (empty($_POST["product_id"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["product_id"]) <= 3)	{
			if(ctype_digit($_POST["product_id"])){
				$product_id = test_input($_POST["product_id"]);
			}else{
				$valid = false;
			}
		}else{
			$valid = false;
		}
		
   }
	
	echo "<br>quantiy: ".$_POST["quantity"];
   if (empty($_POST["quantity"])) {
		$valid = false;
   } else {
	   if(strlen($_POST["quantity"]) <= 3)	{
			if(ctype_digit($_POST["quantity"])){
				$quantity = test_input($_POST["quantity"]);
			}else{
				$valid = false;
			}
		}else{
			$valid = false;
		}
		
   }
	
//-------------- start mysql post --------------//		
   if($valid){
	   	header("Location: ../orders_view.php");
	   
		if($quantity!=""){
			$sql = "UPDATE orders SET quantity='$quantity' WHERE order_id = '$order_id' AND product_id = '$product_id'";
			
			$result = $mysqli->query($sql);

			if ($result === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . $mysql->error;
			}
			
			/*
			if ($mysqli->query($sql) === TRUE){
			}else{
				echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
			//end comment
		}
   }
	$mysqli->close();						
		
		exit;
}
*/
?>