<?php
// array = special type of variable which can hold more then one value at a time
$foods = array("apple","orange","banana","coconut");

// $foods[0] = "pineapple"; // change the index
// array_push($foods, "pineapple", "kiwi"); // add new element to end of the array
// array_pop($foods); // remove the last element on array
// array_shift($foods); // remove the first element on array
$reversed_foods = array_reverse($foods); // returns new array
// echo count($foods); // count element to an array

// foreach($foods as $food){
// echo $food . "<br>";
// }

foreach($reversed_foods as $food){
echo $food . "<br>";
}
?>