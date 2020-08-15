<?php
session_start();
if(!isset($_SESSION['roll']))
{
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>

<body bgcolor="black">
<center>
	<br><br><br><br><br><br>
	<h1><font color="#ffa500" size="100"><b>SUCCESS</b></font></h1>
	<h2><font color="#ffa500"><b>Your files has been successfully uploaded</b></font></h2>

<br>
<br>
<br>
<br>
<br>
<button size="5"><a href="anonymous.php">Back</a></button></center>
</body>
</html>