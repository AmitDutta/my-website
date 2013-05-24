<?php


//DB parameters

$dbHost = "10.34.46.6";
$dbUser = "amitdutt";
$dbPassword = "b-Uy=}y+ch_@";
$dbName = "amitdutt_sitedb";

//connect to the db
function connect()
{
	$db = mysql_connect($GLOBALS["dbHost"], $GLOBALS["dbUser"], $GLOBALS["dbPassword"]);
	if($db == false)
		die("Error while connecting to the DB");
	mysql_select_db($GLOBALS["dbName"], $db)
		or die("Error while connecting to the DB");
	return $db;
}

?>
