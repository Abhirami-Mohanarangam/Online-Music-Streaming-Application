<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    include('config.php');
    $playlist_id = $_GET['pid'];
    $song_id = $_GET['sid'];
    $sql = "CALL insertSongToPlaylist('".$playlist_id."','".$song_id."')";
    $con->query($sql);
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        $aid = $_GET['aid'];
        header("location:selected$page.php?aid=$aid");
    }
    else{
        header("location:top10Songs.php");
    }
?>
</body>
</html>