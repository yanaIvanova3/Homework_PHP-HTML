<?php 
	$first = $_POST['first'];
	$second = $_POST['second'];
	$operations = $_POST['operations']		
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
	<div>
			<form action="task1.php" method="post">
				<div>
					<label for="first">First number</label>
					<input type="text" name="first" id="first" value="first"/>
				</div>
				<div>
					<label for="second">Second number</label>
					<input type="text" name="second" id="second" value="second"/>
				</div>
				<div>
					<label for="add">Add</label>
						<input type="radio" name="operations" id="add" value="add" checked="checked">
					<label for="substract">	Substract </label>
						<input type="radio" name="operations" id="subtract" value="subtract">
					<label for="Multyply">Multyply</label>
						<input type="radio" name="operations" id="multyply" value="times">
					<label for="Divide">Divide</label>
						<input type="radio" name="operations" id="divide" value="divide">
				</div>
				<div>
					<input type="submit" name="answer" id="answer" value="Calculate">
				</div>
		</form>
	</div>
	<?php 
	var_dump($_POST);
	?>
	<p>The answer is:
		<?php
		
			if ($_POST['operations'] == 'add') {
				echo $first + $second;
			} else if ($_POST['operations'] == 'subtract') {
				echo $first - $second;
			} else if ($_POST['operations'] == 'times') {
				echo $first * $second;
			} else if ($_POST['operations'] == 'divide') {
				echo $first / $second;
			} else {
				echo "You haven`t selected operation to perform";
			}
		?>
	</p>
	</body>
</html>