<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "succés de connexion<br/>";
			$v1 = $_POST['ref'];
			
			if($resultat=mysql_query("delete from produits where ref = '$v1';")){
				echo "suprimer avec succes !";
				
			}
			}
}
?>