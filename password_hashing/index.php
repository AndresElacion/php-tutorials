<?php
    // hashing = transforming sensitive data (password) into letters, numbers, and/or symbols
    // via a mathematical process. (similar to encryption) hides the original data from 3rd parties

    $password = "password01";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("password01", $hash)) {
        echo "You are logged in";
    } else {
        echo "Incorrect password";
    }
?>