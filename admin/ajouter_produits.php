<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			echo "succés de connexion<br/>";
			$ref=$_POST['ref'];
			$nom=$_POST['nom'];
			$desc=$_POST['desc'];
			$prix=$_POST['prix'];
			$quantite=$_POST['quantite'];
			
			$nomPhoto=$_FILES['img']['name'];
			$file_tmp_name=$_FILES['img']['tmp_name'];
			
			if($resultat=mysql_query("insert into produits values('$ref','$nom','$desc','$prix','$quantite','$nomPhoto');")){
				echo "ajouter avec succes !";
				
			}
			move_uploaded_file($file_tmp_name,"C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\EshopperV1\Eshopper\images/$nomPhoto");
			}
}
?>