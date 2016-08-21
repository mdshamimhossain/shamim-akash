<?php
//connection
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
if($conn)
echo "Conncted Successfully";
else
echo "Not Connected";
?>