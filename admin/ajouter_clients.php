<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "succés de connexion<br/>";
			$id=$_POST['id'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$email=$_POST['email'];
			$motpass=$_POST['motpass'];
			$tel=$_POST['tel'];
			if($resultat=mysql_query("insert into clients values('$id','$nom','$prenom','$email','$motpass','$tel');")){
				echo "ajouter avec succes !";
				
			}
			}






}
?>