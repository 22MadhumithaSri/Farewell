<?php

if(isset($_POST['lname']))
{
        session_start();
        $_SESSION['name']=$_POST['lname2'];
        //Storing the name of user in SESSION variable.
        	$username=$_POST["lname2"];
        	$rollno=$_POST["rollno2"];
$year=$_POST["year2"];
$department=$_POST["department2"];
$contact=$_POST["contact2"];
$email=$_POST["emailid2"];
//$password=$_POST["password"];

echo "um:$username";

$conn=mysqli_connect("localhost","root","","farewell");



if($conn)
{
$sql="INSERT INTO log(username2,rollno2,year2,department2,contact2,email2) VALUES('$username','$rollno','$year','$department','$contact','$email');";
$result=mysqli_query($conn,$sql);

if($result)
{
header("location: content.html");
}
else
{
header("location: signup.php");
}
        }
    }
    else
    {
    	echo "ni";
    }
?>