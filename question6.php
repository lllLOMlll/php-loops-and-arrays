<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 6</title>
</head>

<div class="container">
	<div class="text-center">

		<h1 class="mt-5 mb-4" style="background-color: #21409a; color: white;">Question 6 - Checkerboard</h1>

		<?php
				// Creating the function
		function generateCheckerboard() {
			echo '<table class="checkerboard-table table-center">';

						// Starting a nested loop (8x8)
			for ($i = 0; $i < 8; $i++) {
							// <tr> = line. I'm starting the line here
				echo '<tr>';

				for ($j = 0; $j < 8; $j++) {
					if (($i + $j) % 2 === 0) {
										// Even numbers = BLACK
						echo '<td style="background-color: black;"></td>';
					} else {
										// Odd number = WHITE
						echo '<td style="background-color: white;"></td>';
					}
				}

							// Changing line. Going to the next line for the next iteration of the loop
				echo '</tr>';
			}

			echo '</table>';
		}

				// Calling the function
		generateCheckerboard();
		?>





		<br><br>

		<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

	</div>
</div>


<body>

</body>
</html>