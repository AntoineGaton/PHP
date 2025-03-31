<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    // This is a comment
    /*
    This is a multi-line comment
    */
    //-----------------------------
    // Echo
    echo "Hello World!";
    echo "<br>";
    echo "Hello " . " PHP" . "!";
    echo "<br><br>";
    //-----------------------------
    // Variables
    $name = "Antoine Gaton";
    $age = 36;
    $city_of_birth = "Bronx, NY";
    $current_city = "Fort Lauderdale, FL";
    $is_married = true;
    $favorite_number = 3.14;
    $null_variable = null;

    //Print Variables and their types
    echo "Name: {$name}";
    echo " | " . gettype($name);
    echo "<br>";
    echo "Age: $age";
    echo " | " . gettype($age);
    echo "<br>";
    echo "City of Birth: $city_of_birth";
    echo " | " . gettype($city_of_birth);
    echo "<br>";
    echo "Current City: $current_city";
    echo " | " . gettype($current_city);
    echo "<br>";
    echo "Is Married: $is_married";
    echo " | " . gettype($is_married);
    echo "<br>";
    echo "Favorite Number: $favorite_number";
    echo " | " . gettype($favorite_number);
    echo "<br>";
    echo "Null Variable: $null_variable";
    echo " | " . gettype($null_variable);
    echo "<br>";
    ?>
</body>

</html>