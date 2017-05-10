function init(){
	console.log("JavaScript loaded");
	//Setting the variables
	var username, password;
	var userValid = false, passValid = false;
	var data = "username=" + username + "&password=" + password;
	
	//Have they written in a username?
	$("#username").focus(function(){
		console.log("On username");
		$("#username").css("border-color", "white");
	});
	$("#username").blur(function(){
		var str = $('#username').val();
		if(str != ''){
			userValid = true;
			username = str;
			$("#username").css("border-color", "green");
		}
		else{
			userValid = false;
			$("#username").css('border-color','red');
		}
	});

	//Have they given a password?
	$("#password").focus(function(){
		console.log("On Password");
		$("#password").css("border-color", "white");
	});
	$("#password").blur(function(){
		var str = $('#password').val();
		if(str != ''){
			passValid = true;
			password = str;
			$("#password").css("border-color", "green");
		}
		else{
			passValid = false;
			$("#password").css('border-color','red');
		}
	});
	
	//When Login Button is clicked
	$('#login-submit').click(function(event){
		event.preventDefault();
		//Check to see if information is valid
		var saveData = (userValid == true && passValid == true);
		if(saveData){
			console.log("saveData is true");
			if (typeof(Storage) !== "undefined") {
				// Store
				data = "username=" + username + "&password=" + password;
				
				//AJAX call to php file
				$.ajax({
					method: "post",
					url: "includes/login_validate.php?",
					data: data,
					success: function(data){
						window.location.href = 'home.php'
						//$("#results").html(data);
					}
				});
			}
		}
		
	});
}
window.addEventListener('load', init, false);
