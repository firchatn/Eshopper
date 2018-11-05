<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "succés de connexion<br/>";
			$username=$_POST['username'];
			$motpass=$_POST['motpass'];
			if($resultat=mysql_query("insert into admins values('$username','$motpass');")){
				echo "ajouter avec succes !";
				
			}
			}






}
?>