<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "workfrom"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database); // Provide the database name here

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "CREATE TABLE product (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

$sql = "INSERT INTO product (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "Table product created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> -->




<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post">
        First value: <input type="text" name="firstval"><br>
        Second value: <input type="text" name="secondval"><br>
        Operator: <input type="text" name="operator"><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    class calcu {
        public $num1;
        public $num2;

        function __construct($num1, $num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function add() {
            return $this->num1 + $this->num2;
        }

        public function sub() {
            return $this->num1 - $this->num2;
        }

        public function mul() {
            return $this->num1 * $this->num2;
        }

        public function div() {
            return $this->num1 / $this->num2;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstval = $_POST["firstval"];
        $secondval = $_POST["secondval"];
        $operator = $_POST["operator"];
        $store = new calcu($firstval, $secondval);

        if ($operator == "+") {
            $result = $store->add();
        } elseif ($operator == "-") {
            $result = $store->sub();
        } elseif ($operator == "*") {
            $result = $store->mul();
        } elseif ($operator == "/") {
            if ($secondval != 0) {
                $result = $store->div();
            } else {
                $result = "Cannot divide by zero";
            }
        } else {
            $result = "Invalid operator";
        }

        echo "<h1>Result: " . $firstval . " " . $operator . " " . $secondval . " = " . $result . "</h1>";
    }
    ?>
</body>
</html>





