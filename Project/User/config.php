<?php
	$con = mysqli_connect("localhost","root","","music_streaming_app");
	if(mysqli_connect_errno()){
		echo "failed to connect to MYSQL :" .mysqli_connect_error();
	}
?>