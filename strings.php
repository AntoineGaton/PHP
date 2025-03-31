<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Operations Demo</title>
</head>

<body>
    <?php
    // ========================================
    // SECTION 1: String Declaration Methods
    // ========================================

    // Single quotes - literal string
    $str1 = 'Hello World';

    // Double quotes - allows variable interpolation
    $name = "Antoine Gaton";
    $greeting = "Hello, $name!";

    // Heredoc - for multi-line strings with variable interpolation
    $text = <<<EOT
    Dear $name,
    This is a multi-line
    text using heredoc.
    EOT;

    // Nowdoc - for multi-line strings without interpolation
    $literal = <<<'EOT'
    This is literal text
    $name won't be interpolated
    EOT;

    // ========================================
    // SECTION 2: String Operations
    // ========================================

    // String concatenation using .
    $first_name = "Antoine";
    $last_name = "Gaton";
    $full_name = $first_name . " " . $last_name;

    // String functions
    echo "<h3>String Operations:</h3>";
    echo "Length of name: " . strlen($full_name) . "<br>";
    echo "Uppercase: " . strtoupper($full_name) . "<br>";
    echo "Lowercase: " . strtolower($full_name) . "<br>";
    echo "First letter capitalized: " . ucfirst($full_name) . "<br>";
    echo "Words capitalized: " . ucwords($full_name) . "<br>";

    // ========================================
    // SECTION 3: String Manipulation
    // ========================================

    $sentence = "    Hello World! How are you?    ";
    echo "<h3>String Manipulation:</h3>";

    // Trimming
    echo "Original: '$sentence'<br>";
    echo "Trimmed: '" . trim($sentence) . "'<br>";

    // Substring
    echo "First 5 chars: " . substr($full_name, 0, 5) . "<br>";
    echo "Last 5 chars: " . substr($full_name, -5) . "<br>";

    // Replace
    echo "Replace: " . str_replace("Antoine", "Mr.", $full_name) . "<br>";

    // Position
    echo "Position of 'Gaton': " . strpos($full_name, "Gaton") . "<br>";

    // ========================================
    // SECTION 4: String Formatting
    // ========================================

    $price = 19.95;
    $quantity = 3;

    // sprintf for formatted strings
    $order = sprintf("Order: %d items at $%.2f each", $quantity, $price);
    echo "<h3>Formatted Strings:</h3>";
    echo $order . "<br>";

    // number_format for numeric strings
    $total = $price * $quantity;
    echo "Total: $" . number_format($total, 2) . "<br>";

    // ========================================
    // SECTION 5: String Searching and Validation
    // ========================================

    $email = "example@email.com";
    echo "<h3>String Validation:</h3>";

    // String contains
    echo "Contains '@': " . (str_contains($email, "@") ? "Yes" : "No") . "<br>";

    // Starts with
    echo "Starts with 'ex': " . (str_starts_with($email, "ex") ? "Yes" : "No") . "<br>";

    // Ends with
    echo "Ends with '.com': " . (str_ends_with($email, ".com") ? "Yes" : "No") . "<br>";

    // Pattern matching
    echo "Is valid email? " . (filter_var($email, FILTER_VALIDATE_EMAIL) ? "Yes" : "No") . "<br>";
    ?>
</body>

</html>