<?php
    // COOKIE = Information about a user stored in a users web-browser targeted advertisement, browsing preferences, and other non-sensitive data

    // This is to set time for cookie
    setcookie("fav_food", "pizza", time() + (86400 * 2), "../php/cookie/index.php");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "../php/cookie/index.php");
    setcookie("fav_dessert", "ice cream", time() + (86400 * 4), "../php/cookie/index.php");

    // This is to reset the cookie
    // setcookie("fav_food", "pizza", time() - 0, "../php/cookie/index.php");
    // setcookie("fav_food", "burger", time() - 0, "../php/cookie/index.php");
    // setcookie("fav_dessert", "ice cream", time() - 0, "../php/cookie/index.php");

    // foreach($_COOKIE as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_COOKIE["fav_food"])) {
        echo "Buy some {$_COOKIE["fav_food"]}";
    } else {
        echo "I dont know you favorite food";
    }
?>