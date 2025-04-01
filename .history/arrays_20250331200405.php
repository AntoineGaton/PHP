<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays Demo</title>
    <style>
    pre {
        background: #f4f4f4;
        padding: 10px;
        border-radius: 5px;
    }

    .section {
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <?php
    // ========================================
    // SECTION 1: Array Types
    // ========================================

    echo "<div class='section'>";
    echo "<h3>1. Array Types:</h3>";

    // Indexed Array
    $fruits = ["Apple", "Banana", "Orange", "Mango"];
    echo "Indexed Array:<br>";
    print_r($fruits);
    echo "<br><br>";

    // Associative Array
    $person = [
        "name" => "Antoine Gaton",
        "age" => 36,
        "city" => "Fort Lauderdale",
        "is_developer" => true
    ];
    echo "Associative Array:<br>";
    print_r($person);
    echo "<br><br>";

    // Multidimensional Array
    $employees = [
        ["name" => "John", "position" => "Developer", "salary" => 75000],
        ["name" => "Jane", "position" => "Designer", "salary" => 65000],
        ["name" => "Bob", "position" => "Manager", "salary" => 85000]
    ];
    echo "Multidimensional Array:<br>";
    print_r($employees);
    echo "</div>";

    // ========================================
    // SECTION 2: Array Operations
    // ========================================

    echo "<div class='section'>";
    echo "<h3>2. Array Operations:</h3>";

    // Adding elements
    $numbers = [1, 2, 3];
    array_push($numbers, 4);    // Add to end
    array_unshift($numbers, 0); // Add to beginning
    echo "After adding elements: ";
    print_r($numbers);
    echo "<br>";

    // Removing elements
    array_pop($numbers);     // Remove from end
    array_shift($numbers);   // Remove from beginning
    echo "After removing elements: ";
    print_r($numbers);
    echo "<br>";

    // Merging arrays
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];
    $merged = array_merge($array1, $array2);
    echo "Merged arrays: ";
    print_r($merged);
    echo "</div>";

    // ========================================
    // SECTION 3: Array Functions
    // ========================================

    echo "<div class='section'>";
    echo "<h3>3. Array Functions:</h3>";

    $numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3];

    // Sorting
    $sorted = $numbers;
    sort($sorted);
    echo "Sorted array: ";
    print_r($sorted);
    echo "<br>";

    // Unique values
    $unique = array_unique($numbers);
    echo "Unique values: ";
    print_r($unique);
    echo "<br>";

    // Sum and average
    echo "Sum: " . array_sum($numbers) . "<br>";
    echo "Average: " . (array_sum($numbers) / count($numbers)) . "<br>";

    // Min and Max
    echo "Min: " . min($numbers) . "<br>";
    echo "Max: " . max($numbers) . "<br>";
    echo "</div>";

    // ========================================
    // SECTION 4: Array Transformation
    // ========================================

    echo "<div class='section'>";
    echo "<h3>4. Array Transformation:</h3>";

    // Map function
    $numbers = [1, 2, 3, 4, 5];
    $doubled = array_map(function($n) {
        return $n * 2;
    }, $numbers);
    echo "Doubled numbers: ";
    print_r($doubled);
    echo "<br>";

    // Filter function
    $even = array_filter($numbers, function($n) {
        return $n % 2 == 0;
    });
    echo "Even numbers: ";
    print_r($even);
    echo "<br>";

    // Reduce function
    $sum = array_reduce($numbers, function($carry, $n) {
        return $carry + $n;
    }, 0);
    echo "Sum using reduce: $sum<br>";
    echo "</div>";

    // ========================================
    // SECTION 5: Practical Examples
    // ========================================

    echo "<div class='section'>";
    echo "<h3>5. Practical Examples:</h3>";

    // Shopping Cart
    $cart = [
        ["item" => "Laptop", "price" => 999.99, "quantity" => 1],
        ["item" => "Mouse", "price" => 29.99, "quantity" => 2],
        ["item" => "Keyboard", "price" => 59.99, "quantity" => 1]
    ];

    // Calculate total using array_reduce
    $total = array_reduce($cart, function($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0);

    echo "Cart Total: $" . number_format($total, 2) . "<br><br>";

    // User Roles and Permissions
    $roles = [
        "admin" => ["create", "read", "update", "delete"],
        "editor" => ["create", "read", "update"],
        "viewer" => ["read"]
    ];

    function checkPermission($role, $permission) {
        global $roles;
        return in_array($permission, $roles[$role] ?? []);
    }

    echo "Editor can delete? " .
         (checkPermission("editor", "delete") ? "Yes" : "No") . "<br>";
    echo "Admin can update? " .
         (checkPermission("admin", "update") ? "Yes" : "No") . "<br>";
    echo "</div>";

    // ========================================
    // SECTION 6: Array Search and Existence
    // ========================================

    echo "<div class='section'>";
    echo "<h3>6. Array Search and Existence:</h3>";

    $fruits = ["apple", "banana", "orange", "grape"];

    // Check if element exists
    echo "Is 'banana' in array? " .
         (in_array("banana", $fruits) ? "Yes" : "No") . "<br>";

    // Find element index
    $index = array_search("orange", $fruits);
    echo "Index of 'orange': $index<br>";

    // Check if key exists
    echo "Does index 5 exist? " .
         (array_key_exists(5, $fruits) ? "Yes" : "No") . "<br>";
    echo "</div>";
    ?>
</body>

</html>