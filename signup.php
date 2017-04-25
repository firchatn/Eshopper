<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$nom = $_POST['names'];
$email = $_POST['emails'];
$pass = $_POST['passwords'];

$sql = "INSERT INTO clients (nom, email, password)
VALUES ('$nom', '$email','$pass')";


if ($conn->query($sql) === TRUE) {
    header("location: shop.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
