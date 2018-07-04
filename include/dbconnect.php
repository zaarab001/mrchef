<?php


//Define variable for connection
$hostname = "localhost";
$username="root";
$pass="";
$db_name="ibbul_eti";


//db Connection
$dbC = mysqli_connect($hostname, $username, $pass, $db_name);
if ($dbC)
{
	//echo 'DB Connected';	
}
	else
{
	//echo 'DB not Connected';
}

?>