<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Demo</title>
</head>

<body>
    <?php
    // ========================================
    // SECTION 1: For Loop
    // ========================================

    echo "<h3>For Loop:</h3>";
    // Count from 1 to 5
    for ($i = 1; $i <= 5; $i++) {
        echo "Count: $i<br>";
    }

    // Using for loop with an array
    $fruits = ["Apple", "Banana", "Orange", "Mango", "Grape"];
    echo "<br>Fruits List:<br>";
    for ($i = 0; $i < count($fruits); $i++) {
        echo ($i + 1) . ". " . $fruits[$i] . "<br>";
    }

    // ========================================
    // SECTION 2: While Loop
    // ========================================

    echo "<h3>While Loop:</h3>";
    $counter = 1;
    while ($counter <= 3) {
        echo "Loop iteration: $counter<br>";
        $counter++;
    }

    // While with a condition
    $target = rand(1, 10);
    $attempts = 0;
    while ($attempts < $target) {
        $attempts++;
        echo "Attempt $attempts of $target<br>";
    }

    // ========================================
    // SECTION 3: Do-While Loop
    // ========================================

    echo "<h3>Do-While Loop:</h3>";
    $num = 1;
    do {
        echo "Number: $num<br>";
        $num *= 2;
    } while ($num <= 8);

    // ========================================
    // SECTION 4: Foreach Loop
    // ========================================

    echo "<h3>Foreach Loop:</h3>";

    // Simple array iteration
    $colors = ["Red", "Blue", "Green", "Yellow"];
    foreach ($colors as $color) {
        echo "Color: $color<br>";
    }

    // Associative array iteration
    $person = [
        "name" => "Antoine Gaton",
        "age" => 36,
        "city" => "Fort Lauderdale",
        "occupation" => "Developer"
    ];

    echo "<br>Person Details:<br>";
    foreach ($person as $key => $value) {
        echo ucfirst($key) . ": " . $value . "<br>";
    }

    // ========================================
    // SECTION 5: Loop Control
    // ========================================

    echo "<h3>Loop Control Statements:</h3>";

    // Break example
    echo "Break Example:<br>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 6) {
            break; // Exit loop when i equals 6
        }
        echo "$i ";
    }

    // Continue example
    echo "<br><br>Continue Example (skip even numbers):<br>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            continue; // Skip even numbers
        }
        echo "$i ";
    }

    // ========================================
    // SECTION 6: Nested Loops
    // ========================================

    echo "<h3>Nested Loops:</h3>";

    // Multiplication table (3x3)
    echo "Multiplication Table:<br>";
    echo "<table border='1' style='border-collapse: collapse'>";
    for ($i = 1; $i <= 3; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 3; $j++) {
            echo "<td style='padding: 5px'>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // ========================================
    // SECTION 7: Practical Example
    // ========================================

    echo "<h3>Practical Example - Shopping Cart:</h3>";

    $cart = [
        ["item" => "T-Shirt", "price" => 19.99, "quantity" => 2],
        ["item" => "Jeans", "price" => 49.99, "quantity" => 1],
        ["item" => "Socks", "price" => 9.99, "quantity" => 3]
    ];

    $total = 0;
    echo "<table border='1' style='border-collapse: collapse'>";
    echo "<tr><th>Item</th><th>Price</th><th>Quantity</th><th>Subtotal</th></tr>";

    foreach ($cart as $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;
        echo "<tr>";
        echo "<td style='padding: 5px'>" . $item['item'] . "</td>";
        echo "<td>$" . number_format($item['price'], 2) . "</td>";
        echo "<td>" . $item['quantity'] . "</td>";
        echo "<td>$" . number_format($subtotal, 2) . "</td>";
        echo "</tr>";
    }

    echo "<tr><td colspan='3'><strong>Total</strong></td>";
    echo "<td><strong>$" . number_format($total, 2) . "</strong></td></tr>";
    echo "</table>";
    ?>
</body>

</html>