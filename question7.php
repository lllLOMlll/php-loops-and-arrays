<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 7</title>
</head>

<div class="container">
	<div class="text-center">

		<h1 class="mt-5 mb-4" style="background-color: #04adff;">Question 7 - Interest rate earnings</h1>

		<form class="text-center" method="post">
			<label for="days">Days:</label>
			<input type="number" name="days" id="days" min="0">
			<br><br>



			<input type="submit" name="submit" value="Earnings">
			<br><br>
		</form>

		<?php
			// Creating the function
			function calculateDailyEarnings($days) {
				$dailyEarnings = 0;
			

				for ($i = 0; $i < $days; $i++) {
					if ($i % 30 === 0 && $i !== 0) {
						// Interest rate every 30 days
						$interestRate = 0.012; 
					} else {
						// Normal interest rate
						$interestRate = 0.032; 
					}

					$dailyEarnings += 10000 * ($interestRate / 365);
				}

				// Calling the function
				return $dailyEarnings;
			}

			if (isset($_POST['submit'])) {
				$days = $_POST['days'];
				$earnings = calculateDailyEarnings($days);
				$earningsFormatted = number_format($earnings, 2); // Format earnings with 2 decimal places
				$total = $earningsFormatted + 10000;

				echo "Earnings in interest: " . $earningsFormatted. "$" . "<br>";
				echo "Total (10 000$ + interest): " . $total . "$" . "<br>";


			}
		?>





		<br><br>

		<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

	</div>
</div>


<body>

</body>
</html>