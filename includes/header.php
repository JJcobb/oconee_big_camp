<header class="clearfix" id="header">

	<!--<div class="header-top">-->
		<div class="header-container clearfix">

			<div class="logo">
				<a href="home.php">
					<img src="img/logo-text-header.png" alt="Oconee Big Camp" height="42" width="132">
				</a>
			</div>


			<div class="hamburger-menu">
				<a href="javascript:void(0)" class="open-menu">&#9776;</a>
				<a href="javascript:void(0)" class="close-menu">X</a>
			</div>
			


			<div class="menu-container expand clearfix">

				<div class="main-menu">
					<nav>
						<ul>
							<li class="search-mobile">
								<form action="search_results.php" method="get">
									<input type="text" name="search" class="search-input" placeholder="Search">
									<!--<input type="submit" name="submit" id="submit" value="Search">-->
								</form>
							</li>

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
								<a href="register.php">Events</a>
							</li>
							<?php
								$current_url = $_SERVER['REQUEST_URI'];
								if($_SESSION['loggedin'] == 'false'){
									echo "<li>\n";
									echo "<a href='users_new.php?current_url=$current_url'>Register</a>\n";
									echo "</li>\n";
									echo "<li>\n";
									echo "<a href='login.php?current_url=$current_url'>Log In</a>\n";
									echo "</li>\n";
								}
							?>
							<?php
								if($_SESSION['loggedin'] == 'true'){

									echo "<li id='logoutButton'>\n";
									echo "<a href='logout.php'>Logout</a>\n";
									echo "</li>\n";
								}
							?>
							<!--<li id="logoutButton">
								<a href="logout.php">Logout</a>
							</li>-->
						</ul>
					</nav>
				</div>

				<div class="main-menu sub-main-menu">
					<nav>
						<ul>
						<?php
							/*session_start();*/
							//Login Check
							//$_SESSION['loggedin'];
							
							/*if( !isset($_SESSION['loggedin']) ){
								$_SESSION['loggedin'] = 'false';
							}*/

							if($_SESSION['loggedin'] == 'true'){
								echo '
								<li>
									<!--<a href="client.php">Account</a>-->
									<a href="client.php"><i class="fa fa-user"></i></a>

									<ul class="dropdown">
									
										
												<li><p>Hello, 
												' .
													$_SESSION['sesUser']
												
												. '
												</p></li>
												<li><a href="client.php">Profile</a></li>
												 ';

								if ($_SESSION['access'] == "admin" || $_SESSION['access'] == "privileged")	{
									echo '
										<li><a href="admin.php">Admin</a></li>
									';
								}			

								echo '				
								<li><a href="logout.php">Log out</a></li>
								</ul>

								</li>
								<li>
									<!--<a href="cart.php">Cart</a>-->
									<a href="cart.php"><i class="fa fa-shopping-cart" title="Cart"></i></a>
								</li>
								';
								}else{
									echo '
										<li>
											<a href="cart.php"><i class="fa fa-shopping-cart" title="Cart"></i></a>
										</li>
									';
								}
							?>
							<li class="search-desktop">
								<form action="search_results.php" method="get">
									<input type="text" name="search" class="search-input" placeholder="Search">
									<!--<input type="submit" name="submit" id="submit" value="Search">-->
								</form>
							</li>
						</ul>
					</nav>
				</div>

			</div>

		</div>

</header>