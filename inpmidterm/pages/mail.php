<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];
$recipient = "sarveshdesaigp@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$query = "INSERT INTO `contact` (name, email, subject, message) VALUES ('$name', '$email', '$website', '$message')";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `contact` (name, email, subject, message) VALUES ('$name', '$email', '$website', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
