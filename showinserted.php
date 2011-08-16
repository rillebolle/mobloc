<?php
if(!isset($dbh)){
   $dbh=mysql_connect ("localhost", "användarnamn", "lösenord") or die ('I cannot connect to the database because: ');   
   $databas = mysql_select_db ("dindatabas");
} 
	$sql = "select * from sms order by id desc";
	$res = mysql_query($sql);
	while ($rad = mysql_fetch_array($res)){
		
	echo $rad['mess'] ."<br/><br/>";
	//beroende på vilken teckenuppsättning du har på din hemsida så kan du vara tvungen att koda om texten ifall
	// å ä ö blir till konstiga tecken.
	//echo utf8_encode($rad['mess'] ."<br/><br/>"); 
	//echo utf8_decode($rad['mess'] ."<br/><br/>");
	}

?>
