<?php
// invoke a function and pass argument
    function happy_birthday($name, $age) {
        echo "Happy Birthday {$name} <br>";
        echo "You are {$age} years old <br><br>";
    }

    happy_birthday("spongebob", 23);
 ///////////////////////////////////////////
    function is_even($number) {
        return $number % 2;
    }

    echo is_even(11), "<br><br>";

    function hypotenuse($a, $b) {
        // $c = sqrt($a ** 2 + $b ** 2);
        $c = $a + $b;
        return $c;
    }

    echo hypotenuse(2, 5);
?>