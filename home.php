<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body{
            background-color:  rgb(25, 35, 43);
            font-family: sans-serif;
        }
        a{
            text-decoration: none;
            color: aliceblue;
        }
        i{
            cursor: pointer;
        }
        .container{
            position: relative;
            display: grid;
            grid-template-columns: 240px auto ;
            height: 97vh;
            column-gap: 10px;
            overflow: hidden;
        }
        aside{
            display: grid;
            grid-template-rows: 80px 235px calc(95vh - 315px);
            grid-template-columns: 240px;
        }
        aside div.logo a{
            padding: 5px;
            font-size: 26px;
        }
        .logo a img{
            width: 50px;
        }
        aside div{
            color: aliceblue;
            font-size: 17px;
        }
        aside div a{
            display: flex;
            align-items: center;
            padding: 20px;
            border-radius: 7px;
            text-transform: capitalize;
        }
        aside div a:hover{
            color: royalblue;
        }
        div.playlists{
            grid-template-rows: repeat(5,50px);
            overflow-y: scroll;
        }
            /* scrollbar */

        ::-webkit-scrollbar{
            width: 3px;
        }
        ::-webkit-scrollbar-thumb{
            background-color:  royalblue;
        }
        ::-webkit-scrollbar-track{
            background-color:  rgb(25, 35, 43);
        }
        .display-box{
            border-radius: 10px;
            grid-row-start: 1;
            grid-column-start: 2;
            display: grid;
            grid-template-columns: auto;
            grid-template-rows: 70px calc(97vh - 140px) 70px;
        }

        /* header */

        .display-box header{
            background-color: aliceblue;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            display: grid;
            grid-template-columns: repeat(3,40px);
            grid-template-rows: 40px;
            column-gap: 20px;
            padding: 14px;
        }
        .display-box header a{
            background-color: royalblue;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: aliceblue;
        }
        .display-box header a.premium{
            grid-column-start: 4;
            justify-self: end;
            width: 100px;
            border-radius: 20px;
        }

        /* footer */

        .display-box footer{
            background-color: aliceblue;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            grid-row: 3/4;
            display: grid;
            grid-template-columns: repeat(3,32%);
            grid-template-rows:10% 97%;
            column-gap: 20px;
        }

        /* song progress */
        .display-box footer #progressBar{
            width: 100%;
            height: 3px;
            grid-column: 1/4;
        }

        /* song controls */
        footer div.controls{
            display: grid;
            grid-template-columns: repeat(4,45px);
            column-gap: 13px;
            padding-left: 30px;
            justify-content:flex-start;
            align-items: center;
        }

        /* song infos */
        footer div.infos{
            font-size: 16px;
            display: grid;
            grid-template-rows: repeat(2,36%);
            grid-template-columns: auto;
            justify-content:center;
            padding-top: 17px;
        }
        footer .infos .album{
            font-size: 13px;
        }
        footer .infos a{
            color: rgb(25, 35, 43);
        }

        /* song volume */
        
        footer div.volume_sitting{
            display: flex;
            align-items: center;
            justify-content:flex-end;
            padding-right: 20px;
        }
        footer div.volume_sitting #volume{
            width: 100px;
            height: 2px;
            border-radius: 3px;
            cursor: grab;
        }
        /* range color */
        /* #volume,#progressBar {
            -webkit-appearance: none;
            appearance: none;
            background:#dbe4ff;
            cursor: grab;
        }
        #volume::-webkit-slider-thumb,#progressBar::-webkit-slider-thumb{
            -webkit-appearance: none;
            appearance: none;
            background: rgb(47, 84, 197);
            width: 10px;
            height: 10px;
            border-radius: 50%;
        } */
        /* main div */
        div.main{
            background-color:  aliceblue;
            padding: 20px;
            display: grid;
            grid-template-rows: repeat(3,390px);
            grid-template-columns: 70vw;
            row-gap: 50px;
            justify-content: center;
            overflow-y: auto;
            overflow-x: hidden;
        }
        /* main scrollbar */
        div.main::-webkit-scrollbar{
            width: 5px;
        }

        /* main sections */
        div.main div{
            display: grid;
            grid-template-rows: 40px auto 15px;
            row-gap: 10px;
            overflow-y: hidden;
        }
        div.main .elements{
            display: grid;
            grid-template-columns: repeat(4,230px);
            grid-template-rows: auto;
            column-gap: 40px;
            overflow-x: auto;
            padding-bottom: 5px;
        }

        /* element */

        div.main div.elements div.element{
            border-radius: 10px;
            display: grid;
            grid-template-rows: 78% 7% 7%;
            row-gap: 10px;
            cursor: pointer;
        }
        div.main .element .cover{
            border-radius:10px ;
            width: 230px;
        }
        .artistPic{
            background-color: royalblue;
            border-radius: 50%;
            width: 230px;
            overflow: hidden;
        }
        div.main .element p{
            font-size: 17px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        div.main .element .element-type{
            font-size: 10px;
            color: grey;
        }

        /* elements scrollbar */

        div.main .elements::-webkit-scrollbar{
            height: 5px;
            border-radius: 5px;
        }
        div.main .title{
            font-size: 25px;
            font-weight: bold;
            padding: 6px;
        }
        div.main .show-more{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <script>
        let audio = new Audio();
        let track;
        let album;
        let lastTrack;

        function playSong(){
                audio.onloadedmetadata = function(){
                    let maxD=audio.duration;
                    document.querySelector('#progressBar').max=maxD;
                    console.log(maxD);
                }
            let btn=document.getElementById('playBtn');
            if(btn.className=="fa-solid fa-play fa-2xl"){
            audio.play();
            btn.className="fa-solid fa-pause fa-2xl";
            }else{
            audio.pause();
            btn.className="fa-solid fa-play fa-2xl";
            }
        }   
        function playAlbum(path,albumId,trackId,numTracks){
            track=trackId;
            console.log(track);
            album=albumId;
            lastTrack=track+numTracks;
            console.log(lastTrack);

            let btn=document.getElementById('playBtn');
            btn.className="fa-solid fa-play fa-2xl";

            audio.src=path;
            playSong();
            }
            let check=1;
            audio.ontimeupdate = function (){
                if(check==1){
                    let progress=audio.currentTime;
                    document.querySelector('#progressBar').value=progress;
                }
            }
            function setCurrentTime(){
                let rangeValue=document.getElementById('progressBar').value;
                audio.currentTime=Math.round(rangeValue);
                check=1;
            }
            function setVolume(){
                let rangeValue=document.getElementById('volume').value;
                audio.volume=rangeValue/100;
            }
        function replay(){
            audio.currentTime=0;
            audio.play();
            document.getElementById('playBtn').className="fa-solid fa-pause fa-2xl";
        }
        function setInfos(albumName,trackName){
            document.getElementById('albumN').innerHTML=albumName;
            document.getElementById('trackN').innerHTML=trackName;
        }
        // playNextAudio
        function playNext(){
            let btn=document.getElementById('playBtn');
            btn.className="fa-solid fa-play fa-2xl";

            let str=audio.src;
            if(track<lastTrack){
            str=str.replace('track%20('+track+')','track%20('+ ++track +')');
            audio.src=str;
            console.log(audio.src);
                console.log(album);
            }else if(album<10){
                str=str.replace('track%20('+track+')','track%20('+ 1 +')');
                str=str.replace('album%20('+album+')','album%20('+ ++album +')');
                audio.src=str;
                console.log(audio.src);
                track=1;
            }else{
                str=str.replace('track%20('+track+')','track%20('+ 1 +')');
                str=str.replace('album%20('+album+')','album%20('+ 1 +')');
                audio.src=str;
                console.log(audio.src);
                track=1;
                album=1;
            }
            playSong();
        }
        audio.onended=playNext;
        
    </script>
    <?php
        $conn=mysqli_connect("localhost","root","","music_db") or die("ERROR : ".mysqli_connect_error());
        $sql="SELECT * FROM albums NATURAL JOIN tracks ORDER BY RAND()";
        // $sql2="SELECT * FROM albums NATURAL JOIN tracks WHERE album_id=$rands[0] or album_id=$rands[1] or album_id=$rands[2] or album_id=$rands[3]";
        $query=mysqli_query($conn,$sql);
        //$query2=mysqli_query($conn,$sql2);
        while($tab=mysqli_fetch_assoc($query)){
            $albums[]=$tab;
        }
        // while($tab2=mysqli_fetch_assoc($query2)){
        //     $tracks[]=$tab2;
        // }

        // get album id
        function getNumTracks($index){
            global $albums;
            $dir="albums/album ({$albums[$index]['album_id']})/tracks";
            $files = scandir($dir);
            $num_tracks = count($files) - 2;
            echo $num_tracks;
        }

        // get track id
        // function getTrackId($index){
        //     global $albums;
        //     echo $albums[$index]['track_id'];
        // }

    ?>
    <div class="container">
        <aside>
            <div class="logo">
                <a href="index.php" style="color: #98e4ea;"> Spotify </a>
            </div>
            <div class="menu">
                    <a href="home.php" style="background-color: royalblue;">home</a> 
                    <a href="home.php">search</a> 
                    <a href="home.php">genres</a> 
                    <a href="home.php">favorites</a> 
            </div>
            <div class="playlists">
                <a href="">my playlist1</a>
                <a href="">my playlist2</a>
                <a href="">my playlist3</a>
                <a href="">my playlist4</a>
                <a href="">my playlist5</a>
                <a href="">my playlist1</a>
                <a href="">my playlist2</a>
                <a href="">my playlist3</a>
                <a href="">my playlist4</a>
                <a href="">my playlist5</a>
            </div>
        </aside>
        <div class="display-box">
            <header>
                <a href="" class="account">S</a>
                <a href="" class="settings" style="background-color: transparent;"><i class="fa-solid fa-gear fa-2xl" style="color: royalblue;"></i></a>
                <a href="" class="display-mode" style="background-color: transparent;"><i class="fa-solid fa-circle-half-stroke fa-2xl" style="color: royalblue;"></i></a>
                <a href="" class="premium"><i class="fa-sharp fa-solid fa-crown fa-fade"></i>&nbsp;Upgrade</a>
            </header>
            <div class="main">
                <div class="albums">
                    <div class="title">
                        Albums
                    </div>
                    <div class="elements">
                        <div class="element" onclick="playAlbum('albums/album (<?php echo $albums[0]['album_id'] ?>)/tracks/track (1).mp3',<?php echo $albums[0]['album_id'] ?>,<?php getNumTracks(0) ?>);setInfos('<?php echo $albums[0]['album_name'] ?>','<?php echo $albums[0]['track_name'] ?>')"><img class="cover" src="albums/album (<?php echo $albums[0]['album_id'] ?>)/cover.jpg" alt=""><p class="element-name"><?php echo $albums[0]['album_name'] ?></p><p class="element-type">Album</p><input type="hidden"></div>
                        <div class="element" onclick="playAlbum('albums/album (<?php echo $albums[1]['album_id'] ?>)/tracks/track (1).mp3',<?php echo $albums[1]['album_id'] ?>,<?php getNumTracks(1) ?>);setInfos('<?php echo $albums[1]['album_name'] ?>','<?php echo $albums[1]['track_name'] ?>')"><img class="cover" src="albums/album (<?php echo $albums[1]['album_id'] ?>)/cover.jpg" alt=""><p class="element-name"><?php echo $albums[1]['album_name'] ?></p><p class="element-type">Album</p></div>
                        <div class="element" onclick="playAlbum('albums/album (<?php echo $albums[2]['album_id'] ?>)/tracks/track (1).mp3',<?php echo $albums[2]['album_id'] ?>,<?php getNumTracks(2) ?>);setInfos('<?php echo $albums[2]['album_name'] ?>','<?php echo $albums[2]['track_name'] ?>')"><img class="cover" src="albums/album (<?php echo $albums[2]['album_id'] ?>)/cover.jpg" alt=""><p class="element-name"><?php echo $albums[2]['album_name'] ?></p><p class="element-type">Album</p></div>
                        <div class="element" onclick="playAlbum('albums/album (<?php echo $albums[3]['album_id'] ?>)/tracks/track (1).mp3',<?php echo $albums[3]['album_id'] ?>,<?php getNumTracks(3) ?>);setInfos('<?php echo $albums[3]['album_name'] ?>','<?php echo $albums[3]['track_name'] ?>')"><img class="cover" src="albums/album (<?php echo $albums[3]['album_id'] ?>)/cover.jpg" alt=""><p class="element-name"><?php echo $albums[3]['album_name'] ?></p><p class="element-type">Album</p></div>
                    </div>
                    <div class="show-more">
                        Show more
                    </div>
                </div>
                <div class="artists">
                    <div class="title">
                        Artists
                    </div>
                    <div class="elements">
                        <div class="element"><img class="artistPic" src="artists/1.jpg" alt=""><p class="element-name"><?php echo $albums[0]['album_name'] ?></p><p class="element-type">artist</p></div>
                        <div class="element"><img class="artistPic" src="artists/6.jpg" alt=""><p class="element-type">artist</p></div>
                        <div class="element"><img class="artistPic" src="artists/5.jpg" alt=""><p class="element-type">artist</p></div>
                        <div class="element"><img class="artistPic" src="artists/4.jpg" alt=""><p class="element-type">artist</p></div>
                    </div>
                    <div class="show-more">
                        Show more
                    </div>
                </div>
                <div class="playlists">
                    <div class="title">
                        Playlists
                    </div>
                    <div class="elements">
                        <div class="element"><img src="" alt=""></div>
                        <div class="element"><img src="" alt=""></div>
                        <div class="element"><img src="" alt=""></div>
                        <div class="element"><img src="" alt=""></div>
                    </div>
                    <div class="show-more">
                        Show more
                    </div>
                </div>
            </div>
            <footer>
                <input type="range" value="0" min="0" id="progressBar" onmousedown="this.style.cursor='grabbing';check=0" onmouseup="this.style.cursor='grab';setCurrentTime()">
                <div class="controls">
                    <i class="fa-solid fa-backward-step fa-xl" onclick="replay()"></i>
                    <i class="fa-solid fa-play fa-2xl" onclick="playSong();" id="playBtn"></i>
                    <i class="fa-solid fa-forward-step fa-xl" onclick="playNext()"></i>
                    <i class="fa-solid fa-repeat fa-lg"></i>
                </div>
                <div class="infos">
                    <a class="title" id="trackN" href="">iLoveUIHateU</a>
                    <a class="album" id="albumN" href="">whole lotta red</a>
                </div>
                <div class="volume_sitting">
                    <i class="fa fa-volume-up"></i>&nbsp;
                    <input type="range" step="1" id="volume" min="0" max="100" value="100" onmousedown="this.style.cursor='grabbing';" onmouseup="this.style.cursor='grab';" oninput="setVolume()">
                </div>
            </footer>
        </div>
    </div>

</body>
</html>