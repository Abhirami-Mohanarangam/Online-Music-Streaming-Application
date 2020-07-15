<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    include('config.php');
    $playlist_id = $_GET['pid'];
    $song_id = $_GET['sid'];
    $var = $_GET['var'];
    $sql = "CALL deleteSongFromPlaylist($playlist_id,$song_id)";
    $con->query($sql); 

    header("location:selectedPlaylist.php?pid=$playlist_id&var=$var");
?>
</body>
</html>