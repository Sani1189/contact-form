<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$sql = "INSERT INTO contact (first_name, last_name, email, phone, subject, message) VALUES ('$first_name', '$last_name', '$email', '$phone', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your message!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
