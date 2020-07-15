<!DOCTYPE html>
<html lang="zxx">
<head>
</head>
<body>
    <?php
        include('config.php');
        $song_id = $_GET['sid'];
        $sql = "CALL updateSongCount('".$song_id."');";
        $con->query($sql);
        $sql = "CALL getSong('".$song_id."');";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
    ?>
    <script>
    window.location.href='songs/<?php echo $row["path"] ?>';
    </script>
</body>
</html>
