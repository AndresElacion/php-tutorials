<?php
    // SESSION = SUPER GLOBAL VARIABLE used to store information on a user to be used across multiple pages.
    // A user is assigned a session-id
    // ex. login credentials

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is the login page<br></p>

    <a href="../session/home.php">HOME</a>

    <form action="../session/index.php" method="post">
        <label for="username">username</label>
        <input type="text" name="username">

        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])) {
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: ../session/home.php");
        } else {
            echo "Missing username/password";
        }
    }
?>