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

<h1>welcome to admin page !!! </h1>

<div id="list" style="text-align: left">
<ul>
	<li><a href="ajouter_clients.html">ajouter client</a></li>
	<li><a href="ajouter_admin.html">ajouter admin</a></li>
	<li><a href="ajouter_produit.html">ajouter produit</a></li>
	<li><a href="ajouter_societe.html">ajouter societe</a></li>
</ul>
</div>
<div id="adminss" style="text-align: left">


<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "<h3>listes des admins</h3>";
			if($resultat=mysql_query("select * from admins;")){
				echo "<table id='customers'>";
				echo "<tr><td>ID</td><td>PASS</td><tr>";
				while($ligne=mysql_fetch_row($resultat)){
					$id=$ligne[0];
					$nom=$ligne[1];
					echo "<tr><td>$id</td><td>$nom</td><tr>";
			
		}
		echo "</table>";
			}
		}
}
?>



</div>

<center>
<form method="post" action = "">


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

			
			
			}
			echo "<h3>liste des societe</h3>";
			if($resultat=mysql_query("select * from societe;")){
				echo "<center> <table id='customers'>";
				while($ligne=mysql_fetch_row($resultat)){
					$nom=$ligne[0];
					$id=$ligne[1];
					$pays=$ligne[2];
					$tel=$ligne[3];
					$email=$ligne[4];
					echo "<tr><td>$nom</td><td>$id</td><td>$pays</td><td>$tel</td><td>$email</td><tr>";
		}
		echo "</table> </center>";	
			}
			
			
			
						echo "<h3>liste des produits</h3> ";
			if($resultat=mysql_query("select * from produits;")){
				echo "<center> <table id='customers'>";
				while($ligne=mysql_fetch_row($resultat)){
					$ref=$ligne[0];
					$nom=$ligne[1];
					$desc=$ligne[2];
					$prix=$ligne[3];
					$quantite=$ligne[4];
					echo "<tr><td>$ref</td><td>$nom</td><td>$desc</td><td>$prix</td><td>$quantite</td><tr>";
		}
		echo "</table> </center>";	
			}
			
			}






}
?>

</form>
<center>
</body>
</html>
