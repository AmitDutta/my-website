<?php
header("Content-type: text/plain");
require("config.inc.php");

//retrieve data
// $id = trim($_GET["id"]);
$lat = trim($_GET["lat"]);
$lon = trim($_GET["lon"]);
$time = trim($_GET["time"]);

//connect to the DB
$db = connect();

//set the query to check the credentials 
// $query = "update current_location set lat = '$lat', lon = '$lon', recorded_time = '$time' where id = '$id'";
$query = "insert into current_location values('','$lat','$lon','$time')";

//execute it
$result = mysql_query($query, $db);

if(!$result)
{
	echo "Location not saved. Try again later";
}
else
{
	echo "Location saved correctly.";
}

mysql_close($db);
?>