<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 1</title>
</head>


	<div class="container">
		<div class="text-center">

			<h1 class="mt-5 mb-4" style="background-color: #03a8a0;">Question 1 - maxOfFive()</h1>

			<form class="text-center" method="post">
				<label for="number1">Number 1:</label>
				<input type="number" name="number1" id="number1">
				<br><br>

				<label for="number2">Number 2:</label>
				<input type="number" name="number2" id="number2">
				<br><br>

				<label for="number3">Number 3:</label>
				<input type="number" name="number3" id="number3">
				<br><br>

				<label for="number4">Number 4:</label>
				<input type="number" name="number4" id="number4">
				<br><br>

				<label for="number5">Number 5:</label>
				<input type="number" name="number5" id="number5">
				<br><br>

				<input type="submit" name="submit" value="Find the largest of your 5 numbers">
				<br><br>
			</form>

				<?php
			function maxOfFive($num1, $num2, $num3, $num4, $num5) {
				// 'max' is a function that return the biggest of 'n' numbers
				return max($num1, $num2, $num3, $num4, $num5);
			}

			if (isset($_POST['submit'])) {
				$number1 = (int)$_POST['number1'];
				$number2 = (int)$_POST['number2'];
				$number3 = (int)$_POST['number3'];
				$number4 = (int)$_POST['number4'];
				$number5 = (int)$_POST['number5'];

				// Passing the value of the biggest number to the variable $maxNumber
				$maxNumber = maxOfFive($number1, $number2, $number3, $number4, $number5);
				echo '<p style="font-weight: bold;">The largest number is: ' . $maxNumber . '</p>';

			}
			?>

			<br><br>

			<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

		</div>
	</div>


<body>

</body>
</html>