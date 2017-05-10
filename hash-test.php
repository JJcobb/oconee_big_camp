<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$test = 'hello';
echo $password1 = password_hash("hello", PASSWORD_DEFAULT)."<br>";
echo $password = password_hash($test, PASSWORD_DEFAULT)."<br>";
	
$hash = $password;
if (password_verify("hello", $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
</body>
</html>