<?php

$HOST= "localhost";     // The host you want to connect to.
$USER= "upandaway_co";    // The database username. 
$PASSWORD= "Kd99db;N2#iw";    // The database password. 
$DATABASE="upandaway";    // The database name.

$connection = mysql_connect($HOST, $USER, $PASSWORD);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db($DATABASE);
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
	}
	
	
	 
?>
