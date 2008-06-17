<?php 

	// on se connecte à MySQL 
	$db = mysql_connect('localhost', 'root', ''); 
	// connexion à la base echo $nomBD;
	mysql_select_db("spip",$db); 
	
?>