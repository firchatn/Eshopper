<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
h3 {
	color : white;
	background-color : pink;
	text-align : center;
	border : solid;
	border-color : pink;
	border-radius : 25px;
}
</style>

</head>
<body>
<center>
<h1>welcome to admin page !!! </h1>
<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "<h3>listes des clients</h3>";
			if($resultat=mysql_query("select * from clients;")){
				echo "<center> <table  id='customers'>";
				while($ligne=mysql_fetch_row($resultat)){
					$id=$ligne[0];
					$nom=$ligne[1];
					$prenom=$ligne[2];
					$email=$ligne[3];
					$motpass=$ligne[4];
					$tel=$ligne[5];
					echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td><td>$email</td><td>$motpass</td><td>$tel</td><tr>";
			
		}
		echo "</table> </center>";
}}
}
?>
<form method="post" action = "suprimerclient.php" enctype="multipart/form-data">
id :<input type="text" name="ref"/>


<button type="sumbit"> suprimer </button>

</form>
</center>
</body>
</html>
