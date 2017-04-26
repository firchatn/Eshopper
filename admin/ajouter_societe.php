<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "succés de connexion<br/>";
			$id=$_POST['id'];
			$nom=$_POST['nom'];
			$pays=$_POST['pays'];
			$email=$_POST['email'];
			$tel=$_POST['tel'];
			if($resultat=mysql_query("insert into societe values('$nom','$id','$pays','$tel','$email');")){
				echo "ajouter avec succes !";
				
			}
			}






}
?>