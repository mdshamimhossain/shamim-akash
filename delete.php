<?php
//data INSERT
$name = $_POST['name'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = mysqli_connect("localhost","root","","SHOP");

$query = "DELETE FROM REGI WHERE UNAME = '$uname'";
$result=mysqli_query($conn,$query);
if($result)
{echo "Your Account is delete..!!";}
else
{echo "Not Deleted ";}
?>