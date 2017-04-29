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

mysql_query("CREATE TABLE clients (
	  id INT AUTO_INCREMENT,
	  name VARCHAR(20),
	  email VARCHAR(20),
	  password VARCHAR(20),
	  ecart VARCHAR(20)
	  PRIMARY KEY(id)
	)") Or die(mysql_error());


mysql_query("CREATE TABLE user (
	  id INT AUTO_INCREMENT,
	  name VARCHAR(20),
	  email VARCHAR(20),
	  password VARCHAR(20),
	  PRIMARY KEY(id)
	)") Or die(mysql_error());

mysql_query("CREATE TABLE produit (
	  id INT AUTO_INCREMENT,
	  name VARCHAR(20),
	  des VARCHAR(200),
	  prix NUMBER,
	  quantite NUMBER,
	  img VARCHAR(20)
	  PRIMARY KEY(id)
	)") Or die(mysql_error());
	
mysql_query("CREATE TABLE pannier (
	  id INT AUTO_INCREMENT,
	  nefproduit VARCHAR(20),
	  idclient VARCHAR(200),
	  prix NUMBER,
	  quantite NUMBER,
	  PRIMARY KEY(id)
	)") Or die(mysql_error());


$conn->close();
?>
