<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "lib";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$name = $_POST['name'];
$pass = $_POST['password'];
$menu = $_POST['menu'];
$address = $_POST['address'];
$payment = $_POST['payment'];

// Insert data into student table
$sql = "INSERT INTO student (name, password, menu, address, payment) 
        VALUES ('$name', '$pass', '$menu', '$address', '$payment')";

if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color:green; text-align:center;'>Data Inserted Successfully!</h2>";
    echo "<div style='text-align:center; font-size:18px;'>";
    echo "Thank you, <strong>$name</strong>.<br>";
    echo "Your order for <strong>$menu</strong> has been recorded.<br>";
    echo "Address: <em>$address</em><br>";
    echo "Payment: <strong>$payment</strong>";
    echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>









