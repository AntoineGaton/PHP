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
    $is_student = false;
    $gpa = 3.8;
    

    //Print Variables
    echo "Name: {$name}";
    echo "<br>";
    echo "Age: $age";
    echo "<br>";
    echo "City of Birth: $city_of_birth";
    echo "<br>";
    ?>
</body>

</html>