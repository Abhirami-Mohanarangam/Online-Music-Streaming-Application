<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    include('config.php');
    $playlist_id = $_GET['pid'];
    $sql = "CALL deletePlaylist('".$playlist_id."')";
    $con->query($sql);
    header("location:home.php");
?>
</body>
</html>