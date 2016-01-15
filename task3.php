<?php
$method = $_POST['method'];
$temp = $_POST['temp'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php 
if ($method == 'fahren') {
	$answer = 5/9 * ($temp - 32);
} elseif ($method == 'celsius') {
	$answer = 9/5 * tempin + 32;
}

echo $answer;

?>
	<div>
		<form action="task3.php" method="post">
			<div>
				<label for="temp">Enter temperature</label>
				<input type="text" id="temp" name="temp" />
			</div>
			<div>
				<label for="fahren">Celsius to Fahrenheit</label>
				<input type="radio" id="fahren" name="method" />
			</div>
			<div>
				<label for="celsius">Fahrenheit to Celsius</label>
				<input type="radio" id="celsius"  name="method" />
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</div>	
</body>
</html>