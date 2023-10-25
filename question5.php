<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 5</title>
</head>

<div class="container">
	<div class="text-center">

		<h1 class="mt-5 mb-4" style="background-color: #ff0984;">Question 5 - charFreq()</h1>

		<form class="text-center" method="post">
			<label for="inputString">Input String:</label>
			<input type="text" name="inputString" id="inputString">
			<br><br>
			<input type="submit" name="submit" value="Generate Frequency Listing">
			<br><br>
		</form>
		
		<?php
		function charFreq($string) {
					// Remove spaces and convert the string to lowercase
			$string = str_replace(' ', '', strtolower($string));

					// Define an array of consonants
			$consonants = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];

					// Initialize an empty array to store the frequencies
			$frequency = [];

					// Iterate over each character in the string
			for ($i = 0; $i < strlen($string); $i++) {
				$character = $string[$i];

						// Check if the character is a consonant
				if (in_array($character, $consonants)) {
							// If the character is already in the frequency array, increment its count
					if (isset($frequency[$character])) {
						$frequency[$character]++;
					}
							// Otherwise, initialize its count to 1
					else {
						$frequency[$character] = 1;
					}
				}
			}

					// Display the frequency listing
			foreach ($frequency as $consonant => $count) {
				echo "Consonant '$consonant' appears $count times <br>";
			}
		}

		if (isset($_POST['submit'])) {
			$inputString = $_POST['inputString'];
			charFreq($inputString);
		}
		?>





		<br><br>

		<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

	</div>
</div>


<body>

</body>
</html>