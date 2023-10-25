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

		<h1 class="mt-5 mb-4" style="background-color: #66d313;">Question 10 - ****V****</h1>

		<form class="text-center" method="post">
			<label for="symbol">Symbol</label>
			<input type="text" name="symbol" id="symbol" maxlength="1">
			<br><br>

			<label for="numberOfLines">Number of lines:</label>
			<input type="number" name="numberOfLines" id="numberOfLines" min="1" max="30">
			<br><br>


			<input type="submit" name="submit" value="****V****">
			<br><br>
		</form>

		<div class="text-start">
			<?php
			function createTriangle($numLines, $printSymbol) {
				// Create a table 1x2 (1 row, 2 cells) to contain both figures
				echo "<table>";
				// TABLE 1
				echo "<tr>";
				echo "<td>";
				for ($i = 1; $i <= $numLines; $i++) {
					// Printing when $j <= $i (increasing the printing with each line)
					for ($j = 1; $j <= $i; $j++) {
						echo $printSymbol . " ";
					}
					// Changing line after each iteration
					echo "<br>";
				}
				echo "</td>";

				// TABLE 2
				echo "<td>";
				for ($i = 1; $i <= $numLines; $i++) {
					for ($j = $numLines - $i; $j > 0; $j--) {
						// &nbsp = non-breaking space. I need this or the spaces wont print. The second triangle will be like the first
						echo "&nbsp;" . " ";
					}
					for ($k = 1; $k <= $i; $k++) {
						echo $printSymbol . " ";
					}
					echo "<br>";
				}
				echo "</td>";
				echo "</tr>";
				echo "</table>";
			}

			if (isset($_POST['submit'])) {
				$numLines = $_POST['numberOfLines'];
				$printSymbol = $_POST['symbol'];
				createTriangle($numLines, $printSymbol);
			}
			?>

		</div>

		<br><br>

		<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

	</div>
</div>


<body>

</body>
</html>