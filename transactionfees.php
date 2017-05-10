<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Transaction Fees</title>

		<style>
			@import url("css/reset.css");
			@import url("css/styles.css");
			@import url("css/font-awesome/css/font-awesome.min.css");
		</style>

		<!--<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">-->

		<script src="js/jquery.js"></script>
		<script src="js/functions.js"></script>

	</head>
	<body>

		<div class="container">

			<?php
				require("includes/header.php");
			?>

			<section class="banner">

				<h1>Transaction Fees</h1>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<h2>Shipping Policy</h2>
			
        			<p>Oconee Big Camp will ship orders within two days of purchase. It will be delivered through the UPS with standard shipping. OBC covers the shipping for you so you do not need to worry about that. Your package will take anywhere from 3 to 10 business days to arrive at your address depending on your location.</p>
        			
        			<p>We do not ship overseas or outside of the United States.</p>

					<h2>Tax policy</h2>

					<p>If an item is subject to sales tax in the state to which the order is shipped, tax is generally calculated on the total selling price of each individual item. The amount of tax charged on your order will depend upon many factors including the type of item purchased, and destination of the shipment. Factors can change between the time you place an order and the time of credit card charge authorization, which could affect the calculation of sales taxes. The amount appearing on your order as Estimated Tax may differ from the sales taxes ultimately charged.</p>
					
					<p>All transactions are completed with US dollars.</p>

					<h2>Return Policy</h2>

					<p>We want you to be satisfied with any product you purchase from Oconee Big Camp. You can return any product you buy online for a full refund within 30 days of purchase.</p> 
	
					<p>Items must be unworn, unwashed, and undamaged with original tags intact. Store purchases require a copy of the receipt to return and can only be returned in the store. Purchases made through the online store can be returned through mail or in person.</p> 

					<p>To return an online purchase by mail you must send an email to support with the title REFUND. You will then receive a shipping label in your email. Make sure to use the same email you used for the purchase. Email at camp@oconeecamp.com.</p>

					<p>Camp packages and tickets can only be completely refunded 30 days before the first day that the package starts. Refunds 15 days before the first day of the package will only be refunded for half the cost. Refunds will not be given out within 15 days of the first day of the package.</p> 
	
					<p>To refund your package or ticket make sure to call our phone number: (321) 456-7890.</p>

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