<?php
//create_database
$servername = "localhost";
$username = "root";
$passward = "";

$conn=mysqli_connect($servername,$username,$passward);
$sql = "CREATE DATABASE SHOP";
mysqli_query($conn,$sql);

	if ($sql)
	{echo "Database is created";}
	else
	{echo "Database Not Created";}

?>