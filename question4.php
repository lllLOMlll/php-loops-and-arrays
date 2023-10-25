<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Question 4</title>
</head>


	<div class="container">
		<div class="text-center">

			<h1 class="mt-5 mb-4" style="background-color: #fedf17;">Question 4 - Function Word1()</h1>

			<form class="text-center" method="post">
				<label for="word1">Word 1:</label>
				<input type="text" name="word1" id="word1">
				<br><br>

				<label for="word2">Word 2:</label>
				<input type="text" name="word2" id="wor2">
				<br><br>

				<label for="word3">Word 3:</label>
				<input type="text" name="word3" id="word3">
				<br><br>

				<input type="submit" name="submit" value="Just do it!">
				<br><br>
			</form>

			<?php
				function Word1($word1, $word2, $word3) {
					// Display the word
					echo "Word 1: " . $word1 . "<br>";
					echo "Word 2: " .$word2 . "<br>";
					echo "Word 3: " . $word3 . "<br> <br>";



					// Find the length of the longest word
					$longestLength = max(strlen($word1), strlen($word2), strlen($word3));

					// Display the length of the longest word
					echo "Length of the longest word: $longestLength <br><br>";

					// Display vowels in each word
					// preg_replace() : built-in function -> search and replace
					// /i = upper or lower-case
					echo "Vowels in word 1: " . preg_replace('/[^aeiouy]/i', '', $word1) . "<br>";
					echo "Vowels in word 2: " . preg_replace('/[^aeiouy]/i', '', $word2) . "<br>";
					echo "Vowels in word 3: " . preg_replace('/[^aeiouy]/i', '', $word3) . "<br><br>";

					// Display each word in reverse and uppercase
					// strrev() = reverse string
					// strtoupper() = built-in function in PHP that convert all characters in uppercase
					echo "Word 1 in reverse uppercase: " . strtoupper(strrev($word1)) . "<br>";
					echo "Word 2 in reverse uppercase: " . strtoupper(strrev($word2)) . "<br>";
					echo "Word 3 in reverse uppercase: " . strtoupper(strrev($word3)) . "<br><br>";

					// Display each word split with a dash (-), lowercasing every other letter starting with the first one of each word
					// $word1Split is empty to store each new letter
					$word1Split = '';
					$word2Split = '';
					$word3Split = '';

					for ($i = 0; $i < strlen($word1); $i++) {
						$letter = $word1[$i];
						// $word1Split is empty at the first iteration but building the word with each iteration
						$word1Split .= ($i % 2 === 0) ? strtolower($letter) : strtoupper($letter);
						$word1Split .= '-';
						
					}

					for ($i = 0; $i < strlen($word2); $i++) {
						$letter = $word2[$i];
						$word2Split .= ($i % 2 === 0) ? strtolower($letter) : strtoupper($letter);
						$word2Split .= '-';
						
					}

					for ($i = 0; $i < strlen($word3); $i++) {
						$letter = $word3[$i];
						$word3Split .= ($i % 2 === 0) ? strtolower($letter) : strtoupper($letter);
						$word3Split .= '-';
					
					}

					echo "Word 1 split with alternating case: $word1Split <br>";
					echo "Word 2 split with alternating case: $word2Split <br>";
					echo "Word 3 split with alternating case: $word3Split <br><br>";

					// Style the lowercase letter in blue and uppercase letter in red
					echo '<style>';
					echo 'span.lowercase { 
						color: blue; 
					}';
					echo 'span.uppercase { 
						color: red; 
					}';
				echo '</style>';

				// Display each word with alternate case styling
				echo 'Word 1 with alternate case styling: ';
				for ($i = 0; $i < strlen($word1); $i++) {
					$letter = $word1[$i];
					if ($i % 2 === 0) {
						echo "<span class='lowercase'>$letter</span>";
					} else {
						echo "<span class='uppercase'>$letter</span>";
					}
				}
				echo '<br>';

				echo 'Word 2 with alternate case styling: ';
				for ($i = 0; $i < strlen($word2); $i++) {
					$letter = $word2[$i];
					if ($i % 2 === 0) {
						echo "<span class='lowercase'>$letter</span>";
					} else {
						echo "<span class='uppercase'>$letter</span>";
					}
				}
				echo '<br>';

				echo 'Word 3 with alternate case styling: ';
				for ($i = 0; $i < strlen($word3); $i++) {
					$letter = $word3[$i];
					if ($i % 2 === 0) {
						echo "<span class='lowercase'>$letter</span>";
					} else {
						echo "<span class='uppercase'>$letter</span>";
					}
				}
				echo '<br>';
			}

			if (isset($_POST['submit'])) {
				$word1 = $_POST['word1'];
				$word2 = $_POST['word2'];
				$word3 = $_POST['word3'];

				Word1($word1, $word2, $word3);
			}
		?>


		<br><br>

		<a href="index.php" style="text-decoration: none;"><h2 class="mb-5" style="color: white; background-color: black;">HOME</h2></a>

	</div>
</div>


<body>

</body>
</html>