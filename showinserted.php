<?php
if(!isset($dbh)){
   $dbh=mysql_connect ("localhost", "anv�ndarnamn", "l�senord") or die ('I cannot connect to the database because: ');   
   $databas = mysql_select_db ("dindatabas");
} 
	$sql = "select * from sms order by id desc";
	$res = mysql_query($sql);
	while ($rad = mysql_fetch_array($res)){
		
	echo $rad['mess'] ."<br/><br/>";
	//beroende p� vilken teckenupps�ttning du har p� din hemsida s� kan du vara tvungen att koda om texten ifall
	// � � � blir till konstiga tecken.
	//echo utf8_encode($rad['mess'] ."<br/><br/>"); 
	//echo utf8_decode($rad['mess'] ."<br/><br/>");
	}

?>
