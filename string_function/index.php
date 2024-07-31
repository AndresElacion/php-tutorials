<?php
    $username = "Andrei Elacion";
    $array_username = array("Andrei", "Elacion");
    $phone = "123-412-444";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "0");
    // $username = str_pad($username, 20, rand(1, 10));
    // $phone = str_replace("-", "/", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "Andrei");
    // $phone = strlen($phone);
    // $username = strpos($username, "d");
    // $username = substr($username, 0, 5);
    $fullname = explode(" ", $username);
    $array_username = implode(" ", $array_username);

    echo $array_username . "<br>";

    foreach($fullname as $name) {
        echo $name . "<br>";
    }
?>