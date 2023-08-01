<?php
$servername="localhost";
$username="root";
$password="";
$dbname="rumahsakit";

$conn=@mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
	{
		die("connection Failed:".@mysqli_connect_error());
	}
?>