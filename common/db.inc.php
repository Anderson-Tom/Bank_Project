<?php
/*GROUP UNIT - Group A 
* By :
* Tom Anderson
* Peter Elliot
* Ciara McMahon
* Liam Maloney
*/
$hostname = "xxxxx";
$username = "xxxxx";
$password = "xxxxx";

$dbname = "xxxxx";

$con = mysql_connect($hostname, $username, $password);

if (!$con)
{
	die ("Could not connect : ".mysql_error());
}

if (!mysql_select_db($dbname, $con))
{
	die("Error in selecting the database");
} 

?>