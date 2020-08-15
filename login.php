<?php

        session_start();
         
        //Storing the name of user in SESSION variable.
        $rollno=$_POST['lrollno'];
        $password=$_POST['lpassword'];
        $conn=mysqli_connect("localhost","root","","farewell");
        if($conn)
        {
        	$sql="SELECT * FROM log WHERE rollno='$rollno';";
        	$result=mysqli_query($conn,$sql);
        	$row=mysqli_fetch_assoc($result);
                $username=$row['username'];
        	if($row['password']==$password && $row['rollno']==$rollno)
        	{
                        session_start();
                        $_SESSION['roll']=$rollno;
                        $_SESSION['username']=$username;
        		header("location: anonymous.php");
        	}
        	else
        	{
        		?>
        		<script type="text/javascript">
        			alert("Invalid username or password");
        			window.location.href="index.php";
        		</script>
        		<?php
        	}
        }      
        
       
?>

