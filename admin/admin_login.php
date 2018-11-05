<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("projectweb")){
			$test=false;
			$u=$_POST['username'];
			$p=$_POST['password'];
			if($resultat=mysql_query("select * from admins;")){
				while($ligne=mysql_fetch_row($resultat)){
					if ($u==$ligne[0] && $p==$ligne[1]){
						$test = true;
						echo " $u welcome";
					}
				}
				if (! $test){
					echo "admin pas trover ! ";
			}}
				
						
}
if ($test==true){
	header("Location: adminindex.php", true, 301);
}



}

?>