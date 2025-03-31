<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Variables, Input, and Output Demo</title>
</head>

<body>
    <?php
    // ========================================
    // SECTION 1: Variable Types in PHP
    // ========================================

    // String - for text
    $name = "Antoine Gaton";

    // Integer - whole numbers
    $age = 36;

    // Float/Double - decimal numbers
    $height = 5.8;

    // Boolean - true/false
    $is_married = true;

    // Array - ordered collection
    $hobbies = ["coding", "reading", "gaming"];

    // Associative Array - key-value pairs
    $contact = [
        "email" => "swe.antgaton@gmail.com",
        "phone" => "555-0123",
        "city" => "Fort Lauderdale"
    ];

    // Null
    $null_variable = null;

    // Constant (cannot be changed)
    define("PI", 3.14159);

    // ========================================
    // SECTION 2: Output Methods
    // ========================================

    echo "<h2>Different Ways to Output in PHP</h2>";

    // 1. Basic echo
    echo "1. Using echo: Hello, $name!<br>";

    // 2. Print (similar to echo)
    print("2. Using print: You are $age years old<br>");

    // 3. var_dump() - displays structured information
    echo "3. Using var_dump():<br>";
    var_dump($hobbies);
    echo "<br>";

    // 4. print_r() - prints human-readable information
    echo "4. Using print_r():<br>";
    echo "<pre>";
    print_r($contact);
    echo "</pre>";

    // 5. String formatting with sprintf
    $formatted = sprintf("5. %s is %.2f feet tall<br>", $name, $height);
    echo $formatted;

    // ========================================
    // SECTION 3: Input Handling
    // ========================================

    echo "<h2>Input Form Example</h2>";
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="user_name">Name:</label>
        <input type="text" name="user_name" id="user_name"><br><br>

        <label for="user_age">Age:</label>
        <input type="number" name="user_age" id="user_age"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // This checks if the form was submitted using POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Modern approach - replace FILTER_SANITIZE_STRING with htmlspecialchars
        $user_name = htmlspecialchars($_POST['user_name'] ?? '');

        // This validation is still good - keep using filter_input for integers
        $user_age = filter_input(INPUT_POST, 'user_age', FILTER_VALIDATE_INT);

        echo "<h3>Form Results:</h3>";
        echo "Submitted Name: " . $user_name . "<br>";

        // ERROR HANDLING for age input:
        if ($user_age === false) {
            // This runs if the age input wasn't a valid integer
            // (like if someone typed "twenty" instead of 20)
            echo "Invalid age provided<br>";
        } else if ($user_age === null) {
            // This runs if the age field was left empty
            echo "Age was not provided<br>";
        } else {
            // This runs if age is a valid integer
            // Safe to display because we already validated it's a proper number
            echo "Submitted Age: $user_age<br>";
        }
    }

    // ========================================
    // SECTION 4: Variable Information
    // ========================================

    echo "<h2>Variable Information</h2>";

    // Check variable types
    echo "Variable Types:<br>";
    echo "name is " . gettype($name) . "<br>";
    echo "age is " . gettype($age) . "<br>";
    echo "height is " . gettype($height) . "<br>";
    echo "hobbies is " . gettype($hobbies) . "<br>";

    // Check if variables are set
    echo "<br>Variable Status:<br>";
    echo "Is name set? " . (isset($name) ? "Yes" : "No") . "<br>";
    echo "Is undefined_var set? " . (isset($undefined_var) ? "Yes" : "No") . "<br>";

    // Variable scope example
    function demonstrateScope() {
        global $name; // Access global variable
        $local_var = "I'm local";
        echo "<br>Inside function:<br>";
        echo "Global \$name: $name<br>";
        echo "Local variable: $local_var<br>";
    }

    demonstrateScope();
    ?>
</body>

</html>