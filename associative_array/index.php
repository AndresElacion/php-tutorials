<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../associative_array/index.php" method="post">
        <label>Enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>
    <br>
</body>
</html>

<?php
    $capitals = array(
        "USA"=> "Washington D.C.",
        "Japan"=> "Kyoto",
        "South Korea"=> "Seoul", 
        "India"=> "New Helhi"
    );

    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";
?>
<!-- ^ Exercise ^ -->
<?php
    // // associative array = An array made of key=>value pairs

    // $capitals = array(
    //     "USA"=> "Washington D.C.",
    //     "Japan"=> "Kyoto",
    //     "South Korea"=> "Seoul", 
    //     "India"=> "New Helhi"
    // );

    // $capitals["USA"] = "Las Vegas"; // update a key value pair
    // $capitals["Philippines"] = "Manila"; // add a new key value pair
    // array_pop($capitals); // will remove the last pair on the array
    // array_shift($capitals); // will remove the first pair on the array
    // $keys = array_keys($capitals); // this will return new array
    // $values = array_values($capitals); // this will return the value on the array
    // $flips = array_flip($capitals); // this will return new associative array
    // $reverses = array_reverse($capitals); // this will reverse the array
    // // echo count($capitals);

    // foreach($capitals as $key => $value) {
    //     echo "Key: {$key} = Value: {$value} <br>"; // this will print key value pair
    // }

    // foreach($keys as $key) {
    //     echo "Key: {$key} <br>"; // this will print key
    // }

    // foreach($values as $value) {
    //     echo "Value: {$value} <br>"; // this will print value
    // }

    // foreach($flips as $key => $value) {
    //     echo "Key: {$key} = Value: {$value} <br>"; // this will flip the key value pair
    // }

    // foreach($reverses as $key => $value) {
    //     echo "Key: {$key} = Value: {$value} <br>"; // this will reverse the array
    // }
?>