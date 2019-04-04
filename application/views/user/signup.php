<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "defuse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// ---------------------------------------------------------------------------//

$name = $_POST['name'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$college =  $_POST['college'];
$level = 0;


$sql = "INSERT INTO users (name, email, phone, college, level)
VALUES ('$name', '$email', '$phone', '$college', $level)";

echo $sql;

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location: http://localhost/p2.html");
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Error: Contact Admin";
}

$conn->close();


?>
