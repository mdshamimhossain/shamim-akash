<?php
//data INSERT
$name = $_POST['name'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$payment = $_POST['payment'];
$address = $_POST['address'];
$password = $_POST['password'];


$conn = mysqli_connect("localhost","root","","SHOP");

$query = "INSERT INTO REGI (NAME,UNAME,EMAIL,PHONE,GENDER,PAYMENT,ADDRESS,PASSWORD)VALUES ('$name','$uname','$email','$phone','$gender','$payment','$address','$password')";
$result=mysqli_query($conn,$query);
if($result)
{echo "Data inserted";}
else
{echo "Data is Not insertded";}
?>