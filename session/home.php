<?php
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
    <p>This is the home page<br></p>
    <form action="../session/home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

if(isset($_POST["logout"])) {
    session_destroy();

    header("Location: ../session/index.php");
}
?>