<?php 
$paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";

//read the post from PayPal system and add 'cmd' 
$req = 'cmd=_notify-validate'; 

foreach ($_POST as $key => $value) { 
    $value = urlencode(stripslashes($value)); 
    $req .= "&$key=$value"; 
}

$paymentVariables = "" ;
		foreach($_POST as $key => $value){
			$paymentVariables = $paymentVariables . $key." = ". $value."\n";
		}

//send email to CampSoftware
$Name = "Troop 184" ; //senders name 
$email = "bellzax@gmail.com" ; //senders e-mail adress 
$headers = "From: ". $Name . " <" . $email . ">\r\n" ; //optional headerfields 
$headers .= 'Cc: bellzax@gmail.com' . "\r\n";
$to = "bellzax@gmail.com" ; //recipient 
$subject = "Ocenee Camp Order Variables" ; //subject 
$message = "Payment Variables\n" . $paymentVariables . "\nEND" ; //mail body 
mail($to, $subject, $message, $headers) ; //mail command :) 



//post back to PayPal system to validate 
$header = "POST /cgi-bin/webscr HTTP/1.1\r\n"; 
$header .= "Content-Type: application/x-www-form-urlencoded\r\n"; 
$header .= "Host: www.paypal.com\r\n"; 
$header .= "Connection: close\r\n"; 
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n"; 
$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30); 
// 

//error connecting to paypal 
if (!$fp) { 
    // 
} 
     
//successful connection     
if ($fp) { 
    fputs ($fp, $header . $req); 
     
    while (!feof($fp)) { 
        $res = fgets ($fp, 1024); 
        $res = trim($res); //NEW & IMPORTANT 
		
		$paidDate = date("Y-m-d");
		// assign posted variables to local variables
		$item_name = $_POST['item_name'];
		$item_name1 = $_POST['item_name1'];
		$item_name2 = $_POST['item_name2'];
		$item_name3 = $_POST['item_name3'];
		$item_name4 = $_POST['item_name4'];
		$item_number = $_POST['item_number'];
		$item_number1 = $_POST['item_number1'];
		$item_number2 = $_POST['item_number2'];
		$item_number3 = $_POST['item_number3'];
		$item_number4 = $_POST['item_number4'];
		$payment_status = $_POST['payment_status'];
		$payment_amount = $_POST['mc_gross'];
		$payment_currency = $_POST['mc_currency'];
		$txn_id = $_POST['txn_id'];
		$receiver_email = $_POST['receiver_email'];
		$payer_email = $_POST['payer_email'];
		$quantity1 = $_POST['quantity1'];
		$quantity2 = $_POST['quantity2'];
		$quantity3 = $_POST['quantity3'];
		$quantity4 = $_POST['quantity4'];
		$address_street = $_POST['address_street'];
		$address_city = $_POST['address_city'];
		$address_state = $_POST['address_state'];
		$address_zip = $_POST['address_zip'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$option_selection1_1 = $_POST['option_selection1_1'];;
		$option_selection2_1 = $_POST['option_selection2_1'];
		$option_selection1_2 = $_POST['option_selection1_2'];;
		$option_selection2_2 = $_POST['option_selection2_2'];;
		$option_selection1_3 = $_POST['option_selection1_3'];;
		$option_selection2_3 = $_POST['option_selection2_3'];;
		$option_selection1_4 = $_POST['option_selection1_4'];;
		$option_selection2_4 = $_POST['option_selection2_4'];;
		
		//loop through the $_POST array.
		$paymentVariables = "" ;
		foreach($_POST as $key => $value){
			$paymentVariables = $paymentVariables . $key." = ". $value."\n";
		}

        
        if (strcmp ($res, "INVALID") == 0) { 
            //insert into DB in a table for bad payments for you to process later
            
			echo " A problem occured.<br /><br />The response from the PayPal Instant Payment Notification was: <b>" .$res ."</b>";
            
        } 
        
                 
        if (strcmp($res, "VERIFIED") == 0) { 
            //insert order into database     
            
            $ProcessTransaction = true ;
			$ProesssMessage = "" ;
			
			// check the payment_status is Completed
			if ( $payment_status != "Completed" ) { $ProcessTransaction = false ; $ProesssMessage = $ProesssMessage . "Status was not Completed.\n" ; }
			
			// check that txn_id has not been previously processed
			
			// check that receiver_email is your Primary PayPal email
			if ( $receiver_email != "service@troop184fortgatlin.com" ) { $ProcessTransaction = false ; $ProesssMessage = $ProesssMessage . "Payment came from an invalid email account.\n" ; }
			
			// check that payment_amount is correct
			
			// payment_currency is correct
			if ( $payment_currency != "USD" ) { $ProcessTransaction = false ; $ProesssMessage = $ProesssMessage . "Currency was not in USD.\n" ; }
			
			if ( $ProcessTransaction != true ) {
			
				// echo the response
				echo "A problem occured:<br />" . $ProesssMessage . "<br /><br />The response from the PayPal Instant Payment Notification was: <b>" .$res ."</b>";
			
			} else {
				
				// ALL GOOD!	
		$items = "";
		if ($item_name1 == null || $item_name1 == ""){	
		}
		else{
			$items = "<tr><td>" .$item_name1. "</td><td>" .$quantity1. "</td></tr>\r\n";
		}
		
		if ($item_name2 == null || $item_name2 == ""){	
		}
		else {
			$items .= "<tr><td>" .$item_name2. "</td><td>" .$quantity2. "</td></tr>\r\n";
		}
		
		if ($item_name3 == null || $item_name3 == ""){	
		}
		else {
			$items .= "<tr><td>" .$item_name3. "</td><td>" .$quantity3. "</td></tr>\r\n";
		}
		
		if ($item_name4 == null || $item_name4 == ""){
		}
		else {
			$items .= "<tr><td>" .$item_name4. "</td><td>" .$quantity4. "</td></tr>\r\n";
		}
	
			}
			
                        
        } 
		
	  }

    } 

    fclose($fp); 

?>
</body>
</html>