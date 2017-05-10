<?php
	//Make a connection
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

	if(isset($_GET['current_url'])){
	   $url = test_input($_GET['current_url']);
	}else {
	   $url = "home.php"; // default page for 
	}

	
	$loginErr = "";

	if(!$_POST == ""){
		
		
		if (!isset($_SESSION)) {
			session_start();
		}
		
		if (isset($_SESSION)) {
			$_SESSION['loggedin'] = 'false';
			$username = test_input($_POST["username"]);
			$password = test_input($_POST["password"]);
			
			//Zach's attempt to make the password hashing work
			/*$query = "SELECT * FROM users WHERE username='$username'";
			
			$result = $mysqli->query($query);
			//Zach's code
			if (mysqli_num_rows($result) == 0){ 
				  echo "No user was found.";
			  }else{ 
				 while($row = $result->fetch_assoc()) { 
					  $id =$row['id'];
					  $access  =$row['access'];
					 $passwordHash =$row['password'];
				 }

				if (password_verify($password, $passwordHash)) {
					echo 'Password is valid!';
					$_SESSION['loggedin'] = 'true';
					$_SESSION['sesUser'] = $username;
					$_SESSION['id'] = $id;
					if($access == "admin"){
						header('location: ../admin.php');
					}else if($access == "user"){
						header('location: ../home.php');
					}else if($access == "privileged"){
						header('location: ../home.php');
					}
				} else {
					echo 'Invalid password.';
				}
			  } */


			 /* More password hashing attempts */
			/*$query = "SELECT * FROM users WHERE username='$username'";
			$result = $mysqli->query($query);

			while( $row = $result->fetch_object() ) { 

				if ( !password_verify($password, $row->password) ){

					header("Location: ../login.php");
					exit();
				}
			}*/

			/*$query = "SELECT * FROM users WHERE username='$username'";*/


			$hash_password = md5($password);
			/* MD5 Hashing */
			$query = "SELECT * FROM users WHERE username='$username' and password='$password' OR password='$hash_password'";


			
			/* Original Query */
			/*$query = "SELECT * FROM users WHERE username='$username' and password='$password'";*/

			
			$result = $mysqli->query($query);
			
			//Zac's code
			  if (mysqli_num_rows($result) == 0){ 
				  $loginErr = "* Username and Password do not match any combination";
			  }else{ 
				 while($row = $result->fetch_assoc()) { 
					  $id =$row['id'];
					  $access  =$row['access'];
					  $active =$row['active'];
				 }			

				if($active=="active"){
					$_SESSION['loggedin'] = 'true';
					$_SESSION['sesUser'] = $username;
					$_SESSION['id'] = $id;
					$_SESSION['access'] = $access;	 

					
					if($access == "admin"){
						header('location: admin.php');
					}else if($access == "user"){
						header('location: '.$url);
					}else if($access == "privileged"){
						header('location: '.$url);
					}	

				}else{
					$loginErr = "* Username and Password do not match any combination";
				}
				 
			  } 
			
			
			
			if (!$result) {
				die('Could not query:' . mysql_error());
			}	
		}
	}
?>
