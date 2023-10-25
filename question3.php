<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 3</title>
</head>

	<div class="container">
		<div class="text-center">

			<h1 class="mt-5 mb-4" style="background-color: #66d313;">Question 3 - Functions sum, multiply, subtract</h1>

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

				<input type="submit" name="submit" value="Sum, Multiply and Subtract">
				<br><br>
			</form>

			<?php
			function myFunction($num1, $num2, $num3, $num4, $num5) {

 				// SUM
				function sum($num1, $num2, $num3, $num4, $num5) {
					return $num1 + $num2 + $num3 + $num4 + $num5;
				}

 				// MULTIPLY
				function multiply($num1, $num2, $num3, $num4, $num5) {
					return $num1 * $num2 * $num3 * $num4 * $num5;
				}

  				// SUBTRACT
				function subtract($num1, $num2, $num3, $num4, $num5) {
					return $num1 - $num2 - $num3 - $num4 - $num5;
				}

  				// Calling the functions and storing the results in variables
				$sum = sum($num1, $num2, $num3, $num4, $num5);
				$multiplication = multiply($num1, $num2, $num3, $num4, $num5);
				$subtraction = subtract($num1, $num2, $num3, $num4, $num5);

  				// Displaying the results
				echo "The sum: $num1 + $num2 + $num3 + $num4 + $num5 = $sum <br>";
				echo "The multiplication: $num1 x $num2 x $num3 x $num4 x $num5 = $multiplication <br>";
				echo "The subtraction: $num1 - $num2 - $num3 - $num4 - $num5 = $subtraction <br>";

  				// OUTER SUM
				$outerSum = $sum + $multiplication + $subtraction;
				echo "The outer sum: $sum + $multiplication + $subtraction = $outerSum <br>";

  				// OUTER MULTIPLICATION
				$outerMultiplication = $sum * $multiplication * $subtraction;
				echo "The outer multiplication: $sum x $multiplication x $subtraction = $outerMultiplication <br>";

  				// OUTER SUBTRACTION
  				$outerSubtraction = $sum - $multiplication - $subtraction;
				echo "The outer subtraction: $sum - $multiplication - $subtraction = $outerSubtraction <br>";
			}

			if (isset($_POST['submit'])) {
				$number1 = $_POST['number1'];
				$number2 = $_POST['number2'];
				$number3 = $_POST['number3'];
				$number4 = $_POST['number4'];
				$number5 = $_POST['number5'];

				// Calling the function
				myFunction($number1, $number2, $number3, $number4, $number5);
			}
			?>


			<br><br>

			<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

		</div>
	</div>


<body>

</body>
</html>