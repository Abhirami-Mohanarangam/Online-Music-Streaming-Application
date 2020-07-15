<?php
session_start();
if(isset($_SESSION['user_id'])==0){
header("location:login.php");	
}else{
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>choose Playlist</title>
	<meta charset="UTF-8">
	<meta name="description" content="Shuffle.com">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    <!-- Playlist section -->
   	<section class="playlist-section spad">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Search Results</h2>
			</div>
			<div class="container">
                <div class="category-links">
                    <a href="top10Songs.php">Top 10 Songs</a>
					<a href="artist.php">Artists</a>
					<a href="albums.php">Albums</a>
					<a href="home.php">My Playlist</a>
				</div>
			</div>                                                
			<div class="clearfix"></div>
			<div class="row playlist-area">
               <h4>Albums</h4> 
				<?php
					include('config.php');
					$search = $_GET['search'];
					$album = "select * from albums where name like '%".$search."%';";
                    $result = $con->query($album);
                    if($result->num_rows == 0){
                        echo 'No results Found!';
                    }
                    else{
                        while($row = $result->fetch_assoc()){
                    ?>
                    <div class="mix col-lg-3 col-md-4 col-sm-6">
                        <div class="playlist-item">
                            <a href="selectedAlbum.php?aid=<?php echo $row['id']?>">
                                <img src="images/albums/<?php echo $row['img_path'];?>" height="296px" width="424px" alt="">
                            </a>
                            <h5><?php echo $row['name'];?></h5>
                        </div>
                    </div>
                    <?php

                        }
                    }
				?>
            </div>
            <div class="row playlist-area">
                <h4>Artists</h4>
                <?php
                    include('config.php');
					$artist = "select * from artists where name like '%".$search."%';";
                    $result1 = $con->query($artist);
                    if($result1->num_rows == 0){
                        echo '<br><br><br>
                        No results Found!';
                    }
                    else{
                        while($row = $result1->fetch_assoc()){
                    ?>
                    <div class="mix col-lg-3 col-md-4 col-sm-6">
                        <div class="playlist-item">
                            <a href="selectedArtist.php?aid=<?php echo $row['id']?>">
                                <img src="images/artists/<?php echo $row['img_path'];?>" height="296px" width="424px" alt="">
                            </a>
                            <h5><?php echo $row['name'];?></h5>
                        </div>
                    </div>
                    <?php

                        }
                    }
				?>
            </div>
            <div class="row playlist-area">        
                <h4>Songs</h4>
                <section class="category-section spad">
                    <div class="container-fluid">
                        <div class="category-items">
                            <div class="row">
                                <?php
                                    include('config.php');
                                    $songs = "select * from songs where name like '%".$search."%';";
                                    $result2 = $con->query($songs);
                                    if($result2->num_rows == 0){
                                        echo 'No results Found!';
                                    }
                                    else{
                                        while($row = $result2->fetch_assoc()){
                                ?>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="similar-song">
                                        <img class="ss-thumb" src="images/albums/<?php echo $row['img_path']?>" alt="">
                                        <div class="jp-gui jp-interface">
                                            <div class="ss-controls">
                                                <div class="songs-links">
                                                    <a href="listenSong.php?sid=<?php echo $row['id']?>"><i class="fa fa-play" style='font-size:36px; color:orange;'></i></a>
                                                    <a href="choosePlaylist.php?sid=<?php echo $row['id']?>&page=Album&aid=<?php echo $_GET['aid']?>"><i class="fa fa-plus" style='font-size:36px; color:orange;'></i></a>
                                                </div>
                                                <div class="player_controls_box">
                                                    <h4><?php echo $row['name']?></h4>
                                                    <p><?php echo $row['count']?></p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</body>
</html>
<?php
}
?>