<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 8</title>
</head>

<div class="container">
	<div class="text-center">

		<h1 class="mt-5 mb-4" style="background-color: #e48873;">Question 8 - .........Numbers</h1>

		<form class="text-center" method="post">
			<label for="lines">Number of Lines:</label>
			<input type="number" name="lines" id="lines" min="1" max="30">
			<br><br>
			<input type="submit" name="submit" value="Generate Pattern">
			<br><br>
		</form>

		<?php
			// Creating the function to generate the pattern
			function generatePattern($lines) {
				$pattern = '';

				for ($i = 1; $i <= $lines; $i++) {
					$dots = str_repeat('.', $lines - $i);
					$pattern .= $dots . $i . str_repeat('.', $i - 1) . '<br>';
				}

				return $pattern;
			}

			if (isset($_POST['submit'])) {
				$lines = $_POST['lines'];
				$pattern = generatePattern($lines);

				echo $pattern;
			}
		?>







		<br><br>

		<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

	</div>
</div>


<body>

</body>
</html>