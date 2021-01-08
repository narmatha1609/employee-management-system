<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$city=$_POST['city'];
}

$server='localhost";
$user="root";
$pw="";
$db="sample";

$conn=new mysqli($server,$user,$pw,$db);
if($conn->$connect_error)
{
die("connection failed".$conn->$connect_error);
}

else
{
$sql="insert into register(name,email,password,phone,city)values('$name','$email','$password','$phone','$city')";
$result=$conn->query($sql);

if($result==TRUE)
{
echo'<script>window.alert("register successfully")</script>';
echo'<script>setTimeout(function(){window.location.href="login.html"},100);</scripts>';
}
else
{
echo'<script>window.alert("registeration failed")</script>';
echo'<script>setTimeout(function(){window.location.href="register.html"},100);</scripts>';
}
}
$conn->close();
?>


