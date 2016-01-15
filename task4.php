<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<div>
		<form action="task4.php" method="post">
			<div>
				<label for="one">Enter number
					<input type="text" id="one" name="number" placeholder="Enter number" />
				</label>
			</div>
			<div>
				<label for="two">Enter number
					<input type="text" id="two" name="number" placeholder="Enter number" />
				</label>
			</div>
			<div>
				<label for="three">Enter number
					<input type="text" id="three" name="number" placeholder="Enter number"  />
				</label>
			</div>
			<div>
				<label for="four">Enter number
					<input type="text" id="four" name="number" placeholder="Enter number"  />
				</label>
			</div>
			<div>
				<label for="five">Enter number
					<input type="text" id="five" name="number" placeholder="Enter number"  />
				</label>
			</div>
			<div>
				<label for="six">Enter number
					<input type="text" id="six" name="number" placeholder="Enter number"  />
				</label>
			</div>
			<div>
				<label for="seven">Enter number
					<input type="text" id="seven" name="number" placeholder="Enter number" />
				</label>
			</div>
			<div>
				<label for="eight">Enter number
					<input type="text" id="eight" name="number" placeholder="Enter number" />
				</label>
			</div>
			<div>
				<label for="nine">Enter number
					<input type="text" id="nine" name="number" placeholder="Enter number" />
				</label>
			</div>
			<div>
				<label for="ten">Enter number
					<input type="text" id="ten" name="number" placeholder="Enter number" />
				</label>
			</div>
			<div>
					<input type="submit" value="Sort" />
			</div>
		</form>
		
		<?php 
		$array = $_POST['number'];
		if (is_array($array)) {
			echo 'Sorted numbers are :';
			sort($array);
			foreach ($array as $val) {
				echo $val;
			}
			$min = $array[0];
			$max = $array[count($array) - 1];
			echo 'The minimal value is $min and the max is $max';
		}
		
		?>
	</div>
</body>
</html>