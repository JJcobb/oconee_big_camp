<footer>

	<div class="footer-nav">

		<div class="footer-links">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="client.php">Account</a></li>
				<li><a href="cart.php">Cart</a></li>
								
				<?php

					if( isset($_SESSION['id']) ){

						$admin_query = "SELECT access FROM users WHERE id = ".$_SESSION['id'];
						$admin_result = $mysqli->query($admin_query);
						while ( $row = $admin_result->fetch_object() ) {
					      			    
					    	if( $row->access == "admin" || $row->access == "privileged" ) {

					    		echo '<li><a href="admin.php">Admin</a></li>';
					    	}
						}
					}
				?>

			</ul>
		</div>

		<!--<div class="footer-links">
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="cart.php">Cart</a></li>
			</ul>
		</div>-->

		<div class="footer-links">
			<ul>
				<li>
					<a href="lodging.php">Lodging</a>

					<ul>
						<li><a href="catalog.php?category=cabin">Cabins</a></li>
						<li><a href="catalog.php?category=treehouse">Treehouses</a></li>
						<li><a href="catalog.php?category=tent">Tents</a></li>
						<li><a href="catalog.php?category=tipi">Tipis</a></li>
					</ul>
				</li>
				
			</ul>
		</div>

		<div class="footer-links">
			<ul>
				<li>
					<a href="store.php">Store</a>

					<ul>
						<li><a href="catalog.php?category=merchandise">Merchandise</a></li>
						<li><a href="catalog.php?category=clothing">Camping Clothing</a></li>
						<li><a href="catalog.php?category=equipment">Camping Equipment</a></li>
					</ul>
				</li>
				
			</ul>
		</div>

		<div class="footer-links">
			<ul>
				<li>
					<a href="register.php">Register</a>

					<ul>
						<li><a href="register.php#detox">Digital Detox</a></li>
						<li><a href="register.php#team">Team Building</a></li>
						<li><a href="register.php#survival">Survival Weekend</a></li>
						<li><a href="register.php#single-day">Single Day Events</a></li>
					</ul>
				</li>
				
			</ul>
		</div>


		<div class="footer-links">
			<ul>
				<li>
					<a href="webteam.php">Company</a>

					<ul>
						<li><a href="webteam.php">Web Team</a></li>
						<li><a href="privacypolicy.php">Privacy Policy</a></li>
						<li><a href="transactionfees.php">Transaction Fees</a></li>
					</ul>
				</li>
				
			</ul>
		</div>

		<!--<ul>
			<li>
				<a href="home.php">Home</a>
			</li>
			<li>
				<a href="about.php">About</a>
			</li>
			<li>
				<a href="lodging.php">Lodging</a>
			</li>
			<li>
				<a href="store.php">Store</a>
			</li>
			<li>
				<a href="register.php">Register</a>
			</li>
		</ul>-->

	</div>

	<div class="footer-socials">
		<ul>
			<li>
				<a href="#"><img src="img/facebook-green.svg" alt="Facebook" height="35" width="35"></a>
			</li>
			<li>
				<a href="#"><img src="img/twitter-green.svg" alt="Twitter" height="35" width="35"></a>
			</li>
			<li>
				<a href="#"><img src="img/instagram-green.svg" alt="Instagram" height="35" width="35"></a>
			</li>
			<li>
				<a href="#"><img src="img/youtube-green.svg" alt="YouTube" height="35" width="35"></a>
			</li>
			<li>
				<a href="#"><img src="img/google-plus-green.svg" alt="Google Plus" height="35" width="35"></a>
			</li>
		</ul>
	</div>

	<div class="footer-contact">
		<p>
			<a href="mailto:camp@oconeecamp.com">camp@oconeecamp.com</a> 
			<span class="spacing-border">|</span> 
			<a href="tel:3214567890">(321) 456-7890</a>
		</p>
	</div>

	<div class="footer-contact footer-contact-mobile">
		<p>
			<a href="webteam.php">Company Info</a> 
		</p>
	</div>

	<p>Designed by Group MfE-62001</p>
	<p>This site is not official and is an assignment for a UCF Digital Media course</p>

</footer>