<?php

if(isset($_POST['lname']))
{
        session_start();
        $_SESSION['name']=$_POST['lname'];
        //Storing the name of user in SESSION variable.
        	$username=$_POST["lname"];
        	$rollno=$_POST["rollno"];
$year=$_POST["year"];
$department=$_POST["department"];
$contact=$_POST["contact"];
$email=$_POST["emailid"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

if($password==$cpassword)
{
                   $conn=mysqli_connect("localhost","root","","farewell");
               if($conn)
               {
                   $sql="INSERT INTO log(username,rollno,year,department,contact,email,password) VALUES('$username','$rollno','$year','$department','$contact','$email','$password');";
                    $result=mysqli_query($conn,$sql);

                   if($result)
                   {
                       header("location: index.php");
                   }
                   else
                   {
                       header("location: signup.php");
                   }
                }
               else
               {
                   header("location: f.html");
               }
           }
 else
 {
    ?>
    <script type=text/javascript>
        alert("Enter the correct confirm password");
          window.location.href="signup.php";
      </script>
      <?php
 }
}
else
    {
        header("location: signup.php");
        session_destroy();
    }

?>