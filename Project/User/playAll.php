<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Play All</title>
    <style>
        #playlist{
            list-styly:none;

        }
        #playlist li a:link{
            color: white;
            text-decoration:none;
        }
        #playlist li a:hover{
            color: red;
        }
        #playlist li a:active{
           color: blue;
       }
    </style>
</head>
<body style="background: url(images/play-all-bg.jpg); backgroung-size: 100%;">
<center>
    <audio src="" controls class="controls" id="audioPlayer">
        Sorry, your browser does not support HTML5!
    </audio>
    <ul id="playlist">
    <?php
        include('config.php');
        $var = 0;
        $sql = "CALL getPlaylistSongs('".$_GET['pid']."')";
        $result = $con->query($sql);
        while($row = $result->fetch_assoc()){
        ?>
            <li><a href="songs/<?php echo $row['path']?>"><?php echo $row['name']?></a></li>
        <?php
        }
    ?>
    </ul>
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script>
        audioPlayer();
        function audioPlayer(){
            var currentSong = 0;
            $("#audioPlayer")[0].src = $("#playlist li a")[0];
            $("#audioPlayer")[0].play();
            $("#playlist li a").click(function(e){
                
                e.preventDefault();
                $("#audioPlayer")[0].src = this;
                $("#audioPlayer")[0].play();
            });
            $("#audioPlayer")[0].addEventListener("ended",function(){
                currentSong++;
                if(currentSong == $("#playlist li a").length){
                    currentSong = 0;
                }
                $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
                $("#audioPlayer")[0].play();
            })
        }
    </script>

    </center>        
</body>
</html>