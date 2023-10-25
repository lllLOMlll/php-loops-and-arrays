<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1 class="mt-5 mb-3">Registration</h1>

            <?php
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Create an associative array: username and password
                    $data = array(
                    'username' => $username,
                    'password' => $password
                    );

                    // Encode the data as JSON
                    $jsonData = json_encode($data) . "\n";

                    // Write the JSON data to the file or create the file if it doesn't exist
                    file_put_contents('users.txt', $jsonData, FILE_APPEND);

                    // Link the login page
                    header('Location: login.php');
                    exit;
                }
            ?>



            <!-- 'action' :  indicate where to send the forme when submitted (if empty(""), the form is send to the same URL, same page) -->
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name ="submit" value="Register">
            </form>

        </div>
    </div>

</body>
</html>
