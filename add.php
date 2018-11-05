<?php
session_start();
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
		$v = $_SESSION['user'];
		$v1 = $_SESSION['ref'];
		$v2 = $_SESSION['prix'];
		$v3 = $_SESSION['quantite'];
		$req="insert into pannier(refproduit, idclient, quantite, prix) values ('$v1','$v', '$v2', '$v3')";
		mysql_query($req) or die(mysql_error());
		$result=mysql_query("SELECT quantite as total from produits where ref = '$v1';");
		$data=mysql_fetch_assoc($result);
		if ($data['total'] >= 1) {
		$req2="update produits set quantite = (quantite - 1) where ref = '$v1';";
		mysql_query($req2) or die(mysql_error());		
		}
		else {
			echo "fin stock ! dsl ";
		}
						
}
	if ($data['total'] != 0 ){ 
	header("Location: shop.php", true, 301);
	}



}

?>	