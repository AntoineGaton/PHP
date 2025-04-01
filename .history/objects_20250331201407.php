<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Objects and OOP Demo</title>
    <style>
    .section {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ddd;
    }

    pre {
        background: #f4f4f4;
        padding: 10px;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <?php
    // ========================================
    // SECTION 1: Basic Class and Object
    // ========================================

    class Person {
        // Properties
        public $name;
        private $age;
        protected $email;

        // Constructor
        public function __construct($name, $age, $email) {
            $this->name = $name;
            $this->age = $age;
            $this->email = $email;
        }

        // Getter and Setter methods
        public function getAge() {
            return $this->age;
        }

        public function setAge($age) {
            if ($age >= 0 && $age <= 150) {
                $this->age = $age;
                return true;
            }
            return false;
        }

        // Regular method
        public function introduce() {
            return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
        }
    }

    // Creating an object
    $person = new Person("Antoine", 36, "example@email.com");
    echo "<div class='section'>";
    echo "<h3>Basic Object:</h3>";
    echo $person->introduce() . "<br>";
    echo "</div>";

    // ========================================
    // SECTION 2: Inheritance
    // ========================================

    class Employee extends Person {
        private $position;
        private $salary;

        public function __construct($name, $age, $email, $position, $salary) {
            parent::__construct($name, $age, $email);
            $this->position = $position;
            $this->salary = $salary;
        }

        public function getJobDetails() {
            return "{$this->name} works as a {$this->position}";
        }

        // Method overriding
        public function introduce() {
            return parent::introduce() . " I work as a {$this->position}.";
        }
    }

    $employee = new Employee("John", 30, "john@company.com", "Developer", 75000);
    echo "<div class='section'>";
    echo "<h3>Inheritance:</h3>";
    echo $employee->introduce() . "<br>";
    echo $employee->getJobDetails() . "<br>";
    echo "</div>";

    // ========================================
    // SECTION 3: Interface
    // ========================================

    interface PaymentProcessor {
        public function processPayment($amount);
        public function refund($amount);
    }

    class CreditCardPayment implements PaymentProcessor {
        public function processPayment($amount) {
            return "Processing \${$amount} via Credit Card";
        }

        public function refund($amount) {
            return "Refunding \${$amount} to Credit Card";
        }
    }

    $payment = new CreditCardPayment();
    echo "<div class='section'>";
    echo "<h3>Interface:</h3>";
    echo $payment->processPayment(100) . "<br>";
    echo "</div>";

    // ========================================
    // SECTION 4: Traits
    // ========================================

    trait Logger {
        public function log($message) {
            return "Logging: " . $message;
        }
    }

    trait Timestamp {
        public function getTimestamp() {
            return date('Y-m-d H:i:s');
        }
    }

    class Transaction {
        use Logger, Timestamp;

        public function process() {
            $time = $this->getTimestamp();
            $message = "Transaction processed at $time";
            return $this->log($message);
        }
    }

    $transaction = new Transaction();
    echo "<div class='section'>";
    echo "<h3>Traits:</h3>";
    echo $transaction->process() . "<br>";
    echo "</div>";

    // ========================================
    // SECTION 5: Static Methods and Properties
    // ========================================

    class Calculator {
        public static $pi = 3.14159;

        public static function add($a, $b) {
            return $a + $b;
        }

        public static function multiply($a, $b) {
            return $a * $b;
        }
    }

    echo "<div class='section'>";
    echo "<h3>Static Methods:</h3>";
    echo "Pi: " . Calculator::$pi . "<br>";
    echo "2 + 3 = " . Calculator::add(2, 3) . "<br>";
    echo "</div>";

    // ========================================
    // SECTION 6: Abstract Class
    // ========================================

    abstract class Shape {
        abstract public function getArea();
        abstract public function getPerimeter();

        public function describe() {
            return "This is a shape.";
        }
    }

    class Rectangle extends Shape {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function getArea() {
            return $this->width * $this->height;
        }

        public function getPerimeter() {
            return 2 * ($this->width + $this->height);
        }
    }

    $rectangle = new Rectangle(5, 3);
    echo "<div class='section'>";
    echo "<h3>Abstract Class:</h3>";
    echo "Rectangle Area: " . $rectangle->getArea() . "<br>";
    echo "Rectangle Perimeter: " . $rectangle->getPerimeter() . "<br>";
    echo "</div>";
    ?>
</body>

</html>