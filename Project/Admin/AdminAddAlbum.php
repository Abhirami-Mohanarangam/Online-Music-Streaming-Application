<?php
	session_start();
	if(isset($_SESSION['user_id'])==0){
	header("location:index.php");	
	}else{
		include('config.php');
		$name = $_GET['name'];
		$image_path = $_GET['image'];
		$sql = "call checkAlbum( '".$name."')";	
		$result = $con->query($sql);
		if($result->num_rows != 0){
			echo "<script>alert('Album Name already exists');
					window.location.href = 'AdminAlbum.php'</script>";
		}	
		else{
			include('config.php');
			$query = "call addAlbum('".$name."','".$image_path."')";
			$con->query($query);
			echo '<script>alert("1 Record Added")
						window.location.href = "AdminAlbum.php"</script>';
		}
		
	}
		
?>
