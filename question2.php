<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 2</title>
</head>

	<div class="container">
		<div class="text-center">

			<h1 class="mt-5 mb-4" style="background-color: #039c4b;">Question 2 - Vowel?</h1>

			<form class="text-center" method="post">
				<label for="number1">Enter a character:</label>
				<!-- maxlength="1" so the user can enter only one character -->
				<input type="text" maxlength="1", name="character" id="character">


				<input type="submit" name="submit" value="Submit">
				<br><br>
			</form>

			<?php
				function findVowel($character) {
					$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
					// in_array = build-in function in PHP that returns true or false
					// In that case: is $character is in the array $vowels?
					if (in_array($character, $vowels)) {
						echo '<p style="font-weight: bold; color: green;">True</p>';
					} else {
						echo '<p style="font-weight: bold; color: red;">False</p>';
					}
				}

				if (isset($_POST['submit'])) {
					$character = $_POST['character'];
					// Calling the function
					findVowel($character);
				}
			?>


			<br><br>

			<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

		</div>
	</div>


<body>

</body>
</html>