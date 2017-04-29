<?php
session_start();
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			$test=false;
			echo "succés de connexion<br/>";
			$u=$_POST['emaill'];
			$p=$_POST['passwordl'];
			if($resultat=mysql_query("select * from clients;")){
				while($ligne=mysql_fetch_row($resultat)){
					if ($u==$ligne[3] && $p==$ligne[4]){
						$test = true;
						echo " $u welcome";
						
						$_SESSION['user'] = $ligne[0]. ""; ;
					}
				}
				if (! $test){
					echo "clients pas trover ! ";
			}}
				
						
}
if ($test==true){
	header("Location: shop.php", true, 301);
}



}

?>