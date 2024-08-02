<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username"><br>

        <label for="age">Age:</label><br>
        <input type="text" name="age"><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email"><br>

        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])) {
        // SANITIZE
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        // echo "Hello {$username} <br>";
        // echo "You are {$age} years old <br>";
        // echo "Your email is {$email} <br>";

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        // if(empty($age)) {
        //     echo "That number is not a valid number";
        // } else {
        //     echo "Your are {$age} years old";
        // }

        if(empty($email)) {
            echo "That email is not a valid email";
        } else {
            echo "Your email is {$email}";
        }
    }
?>
