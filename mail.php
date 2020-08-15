<?php
session_start();
$to = $_SESSION['eemail'];
$subject = "My subject";
$txt = $_SESSION['mmessage'];
$headers = "From: madhusandhip@gmail.com" . "\r\n" .
"CC:$to";


if(mail($to,$subject,$txt,$headers))
{
?>
    <script type=text/javascript>
        alert("Mail sent successfully");
          window.location.href="message.php";
      </script>
      <?php
}
else
{
?>
    <script type=text/javascript>
        alert("Mail didn't sent succesfully!!! Try again");
          window.location.href="message.php";
      </script>
      <?php
}
?>