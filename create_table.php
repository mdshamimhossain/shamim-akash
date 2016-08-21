<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "SHOP";
$conn = mysqli_connect($servername,$username,$password,$db);
$quary = "CREATE TABLE REGI(
	NAME varchar(111),
	UNAME varchar(20) not null,	
	EMAIL varchar(111),
	PHONE varchar(22),
	GENDER varchar(10),
	PAYMENT	varchar(22),
	ADDRESS	varchar(111),
	PASSWORD varchar(22),	
	
	primary key (UNAME)
	)";
$sql = mysqli_query($conn,$quary);
if ($sql)
{echo "Table Created";}
else
{echo "Table is not created";}
?>