<?php
var_dump[$_REQUEST];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<div>
		<form action="task5.php" method="post">
			<div>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" />
			</div>
			<div>
				<label for="password">Enter password</label>
				<input type="password" id="password" name="password"/>
			</div>
			<div>
				<label for="repear_password">Repeat password</label>
				<input type="password" id="repeatPassword"  name="repeatPassword"/>
			</div>
			<div>
				<input type="submit" name="submit" id="submit" value="submit"/>
			</div>
		</form>
	</div>
</body>
</html>