<?php
if(isset($_REQUEST['msisdn'])){
if(!isset($dbh)){
   $dbh=mysql_connect ("localhost", "anv�ndarnamn", "l�senord") or die ('I cannot connect to the database because: ');   
   $databas = mysql_select_db ("dindatabas"); 
} 

$timestamp = time();
$msisdn = $_REQUEST['msisdn'];
$nr = "0".substr($msisdn, 2);
//$operator = $_REQUEST['operator']; //om du vill spara vilken operat�r som skickade
$message = substr($_REQUEST['message'], 0, 198); //storleken p� kolumnen i databasen �r bara 200 tecken, men det g�r ju att �ka.
$h = intval(date("G", $timestamp));
$m = intval(date("i", $timestamp));
$date = date("Y-m-d", $timestamp);
//andra datumformat att v�lja p� f�r att spara i databasen.
//$time = date("H:i", $timestamp);
//$timesql = date("Hi", $timestamp);
//$datesql = date("Ymd", $timestamp);
//$datetime = date("YmdHi", $timestamp);


$sql = "INSERT INTO `sms` (`nr`, `date`,`h`,`m`, `mess`) VALUES ('$nr', '$date', $h, $m, '$message');";
//echo "$sql";
mysql_query($sql);
echo utf8_encode("Tack f�r ditt meddelande. ");

}
else{
	echo utf8_encode("Du kan bara anv�nda tj�nsten fr�n en mobiltelefon");
}
//test:
//?msisdn=46700000000&message=hej
?>
