<?php
	session_start();
	if(isset($_SESSION['user_id'])==0){
	header("location:index.php");	
	}else{
		require_once('config.php');
		$name = $_GET['name'];
		$path = $_GET['song_path'];
		$image_path = $_GET['image'];
		$flag = 0;
		if(strcmp($_GET['page'],'Artists')==0){
			$sql = "call checkAlbum('".$_GET['album']."')";	
			$result = $con->query($sql);
			if($result->num_rows == 0){
				echo '<script>alert("Album Name does not exist. Create New")
							window.location.href="AdminAlbum.php"</script>';
			}
			$row = $result->fetch_assoc();
			$album_id = $row['id'];
			$flag = 1;
		}
		else{
			$album_id = $_GET['aid']; 
		}
		include('config.php');
		$sql1 = "call checkSong('".$name."')";
		$result1 = $con->query($sql1);
		if($result1 == 0){
			$query = "call addSong('".$name."','".$path."',$album_id,'".$image_path."')";
			$result2 = $con->query($query);
			if($flag == 1){
				$row1 = $result2->fetch_assoc();
				$song_id = $row1['id'];
				$artist_id = $_GET['aid'];
				include('config.php');
				$query2 = "call addArtistSong($artist_id,$song_id)";
				$con->query($query2);
				
			}
			echo '<script>alert("1 Record Added");
						window.location.href = "AdminView'.$_GET['page'].'.php"</script>';
		}
		else{
			echo '<script>alert("Song Name already exists");
						window.location.href = "AdminSong.php?id='.$_GET['id'].'&page='.$_GET['page'].'"</script>';
		}
			
	}
		
?>
