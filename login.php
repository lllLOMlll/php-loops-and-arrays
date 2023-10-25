<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="text-center">

            <h1 class="mt-5 mb-3">Login</h1>

            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Retrieve the stored registration information
                $users = file('users.txt');

                foreach ($users as $user) {
                    $data = json_decode($user, true);

                    if ($username === $data['username'] && $password === $data['password']) {
                        // link to the index page
                        header('Location: index.php');
                        exit;
                    }
                }

                echo "<p style='color:red; font-weight:bold;'>Wrong Username or Password</p>";


            }
            ?>



            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submit" value="Login">
            </form>


        </div>
    </div>

</body>
</html>
