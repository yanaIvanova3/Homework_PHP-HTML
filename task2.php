<?php
$username = $_POST['username'];
$password = $_POST['password'];
$repeatPassword = $_POST['repeat_password'];


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
function validPassword($password) {
	if( !preg_match( '/[^A-Za-z0-9]+/', $password) || strlen( $password) < 8) {
 		echo "Password should be at least 8 chars long and should have at least 1 non-alphanumeric symbol!";
	} else {
		hash('md5', $password);
		hash('md5', $repeatPassword);
		echo 'Your username is $username, your encrypted password is $password';
	}
}
if ($_POST['password'] != $_POST['repeatPassword']) {
	echo "Passwords do not match!";
} else {
	validPassword($password);
}
?>
	<div>
		<form action="" method="post">
			<div>
				<label for="username">First Name</label>
				<input type="text" id="username" name="username" />
			</div>
			<div>
				<label for="password">Enter password</label>
				<input type="password" id="password" name="password"/>
			</div>
			<div>
				<label for="repear_password">Repeat password</label>
				<input type="password" id="repeat_password"  name="repeat_password"/>
			</div>
			<div>
				<input type="submit" name="submit" id="submit" value="submit"/>
			</div>
		</form>
	</div>
</body>
</html>