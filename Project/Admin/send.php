<?php
require_once('config.php');
$mymsg = $_POST['adminmsg'];
$name = $_POST['name'];
$to = $_POST['email'];
$subject = 'Shuffle Music user feedbacks';
$from = 'shufflemusic@gmail.com';
$header = 'From '. $from;
$message = "Hello ".$name ." thank you for sending as you feedback. <br/>" .$mymsg;
mail($to,$subject,$message,$header);
$updateStatus = mysqli_query($con,"UPDATE feedback SET status ='1'") or die (mysqli_error());
echo "<script>alert('Message has been sent!');window.location.href='feedbacks.php';</script>";
?>