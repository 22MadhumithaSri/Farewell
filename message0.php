<?php
session_start();
$uname=$_SESSION['username'];
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];


// $send=mail($email,$name,$message);

$conn=mysqli_connect("localhost","root","","farewell");

if($conn)
{
$sql="INSERT INTO message(uname,name,email,message) VALUES('$uname','$name','$email','$message');";
$result=mysqli_query($conn,$sql);
if($result)
{   
	$_SESSION['eemail']=$email;
	$_SESSION['mmessage']=$message;
    header("location:mail.php");
}
}
else
{
	header("location: f.html");
}

?>