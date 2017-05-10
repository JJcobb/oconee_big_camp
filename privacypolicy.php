<?php
	require("includes/sessionStart.php");
	include("includes/db_connect.php");
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title>Oconee Big Camp Privacy Policy</title>

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

				<h1>Privacy Policy</h1>

			</section>

			<section class="content-container container-first">

				<section class="info-box-full clearfix">

					<p>At Oconee Big Camp, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by oconeebigcamp.com and how we use it.</p>

					<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at camp@oconeecamp.com.</p>

					<h2>Log Files</h2>

					<p>Oconee Big Camp follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services’ analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users’ movement on the website, and gathering demographic information.</p>

					<h2>Privacy Policies</h2>

					<p>You may consult this list to find the Privacy Policy for each of the advertising partners of Oconee Big Camp</p>

					<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on oconeebigcamp.com, which are sent directly to users’ browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

					<p>Note that Oconee Big Camp has no access to or control over these cookies that are used by third-party advertisers.</p>

					<h2>Third Party Privacy Policies</h2>

					<p>Oconee Big Camp’s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>

					<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers’ respective websites. What Are Cookies?</p>

					<h2>Children’s Information</h2>

					<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

					<p>Oconee Big Camp does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
					
					<h2>Online Privacy Policy Only</h2>

					<p>This privacy policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in oconeebigcamp.com. This policy is not applicable to any information collected offline or via channels other than this website.</p>

					<h2>Security Statement</h2>

					<p>For your security, our ordering process uses secure socket layer (SSL) software. Your information is encrypted to arrive privately and unaltered, to our server only.</p>
					
					<p>If you're still concerned about ordering online, please call us at (321) 456-7890.</p>
					
					<h2>Consent</h2>

					<p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
						
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