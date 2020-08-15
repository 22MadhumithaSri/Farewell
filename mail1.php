<?php
session_start();
$to = $_SESSION['eemail'];
$subject = "My subject";
$txt = $_SESSION['qquestion1'];
$txt1 = $_SESSION['qquestion2'];
$headers = "From: madhusandhip@gmail.com" . "\r\n" .
"CC:$to";

//mail($to,$subject,$txt,$txt1,$headers);

if(mail($to,$subject,$txt,$txt1,$headers))
{
?>
            <script type="text/javascript">
              alert("Mail sent successfully");
              window.location.href="anonymous.php";
            </script>
            <?php
          }
else
{
?>
            <script type="text/javascript">
              alert("Mail didnt sent....Plzz try again");
              window.location.href="message.php";
            </script>
            <?php
          }
?>