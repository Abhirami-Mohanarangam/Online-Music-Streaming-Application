<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        include('config.php');
		$pname = $_GET['pname'];
		$username = $_GET['username'];
		$sql = "CALL createPlaylist('".$pname."','".$username."');";
		$con->query($sql);
		echo '<script>alert("Playlist created Successfully")</script>';
	?>
<script>
    window.location.href='home.php?username=<?php echo $username ?>';
    </script>
</body>
</html>
