<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "succés de connexion<br/>";
			if($resultat=mysql_query("select * from clients;")){
				echo "<center> <table border=1>";
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
			}






}
?>