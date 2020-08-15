<?php
session_start();
$uname=$_SESSION['username'];
$name=$_POST["name"];
$email=$_POST["email"];
$question1=$_POST["question1"];
$question2=$_POST["question2"];

$conn=mysqli_connect("localhost","root","","farewell");

if($conn)
{
$sql="INSERT INTO secrete_message(uname,name,email,question1,question2) VALUES('$uname','$name','$email','$question1','$question2');";
$result=mysqli_query($conn,$sql);
if($result)
{
	$_SESSION['eemail']=$email;
	$_SESSION['qquestion1']=$question1;
	$_SESSION['qquestion2']=$question2;
	header("location:mail1.php");
}
else
{
	header("location:message.php");
}
}
else
{
	header("location:f.html");
}

?>








