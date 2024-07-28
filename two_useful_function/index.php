<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../two_useful_function/index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>

        <label>password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="Log in">
    </form>
    <br>
</body>
</html>
<!-- ^ Exercise ^ -->
<?php

    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        if(empty($username)) {
            echo "username is missing";
        } elseif(empty($password)) {
            echo "password is missing";
        } else {
            echo "Hello {$username}";
        }
    }
 // isset() = return true if a variable is declared and not null
 // empty() = return true if a variable is not declared, false, null, ""

//  $username = "andrei";
//  $password = null;

//  if(isset($username)) {
//     echo "This variable username is set <br>";
//  } else {
//     echo "This variable username is not set <br>";
//  }

//  if(!isset($password)) {
//     echo "This variable password is not set <br>";
//  } else {
//     echo "This variable password is set <br>";
//  }

//  if(empty($username)) {
//     echo "This variable username is empty <br>";
//  } else {
//     echo "This variable username is not empty <br>";
//  }

//  if(!empty($password)) {
//     echo "This variable password is not empty <br>";
//  } else {
//     echo "This variable password is empty <br>";
//  }
?>