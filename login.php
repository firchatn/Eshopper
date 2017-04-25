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


$email = $_POST['emaill'];
$pass = $_POST['passwordl'];

$sql = "SELECT id FROM clients WHERE email = '$email' and password = '$pass'";
$result = $conn->query($sql)
$count = mysqli_num_rows($result);
if($count == 1) {
         header("location: shop.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }

$conn->close();
