<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<h1>PLAYER</h1>
<div class="player_wrapper">
    <div class="player">
        <div class="player_title">Now Playing...</div>
        <audio class="audio" ></audio>
        <div class="player_buttons">
            <div class="player_buttons_btn play" >
                <img class="play_src" src="{{env('APP_URL')}}/img/play.png" alt="btn">
            </div>

            <div class="player_progress_container">
                <div class="player_progress"></div>
            </div>

        </div>
    </div>
</div>
<div id="player_song"style="display: none">https://rr1---sn-fxnuxax03g-vqne.googlevideo.com/videoplayback?expire=1659500741&ei=ZaTpYu2rJJSH8gPRjJfYDA&ip=195.64.239.88&id=o-AJ6s0MnvV6t6B9r2jb3Ly1YlI7GWpwT64d7A-vNbRIpJ&itag=251&source=youtube&requiressl=yes&mh=Ay&mm=31%2C29&mn=sn-fxnuxax03g-vqne%2Csn-3c27sn7l&ms=au%2Crdu&mv=m&mvi=1&pl=24&gcr=ua&initcwndbps=1512500&vprv=1&mime=audio%2Fwebm&gir=yes&clen=3923424&dur=258.741&lmt=1634789022559420&mt=1659478859&fvip=3&keepalive=yes&fexp=24001373%2C24007246&c=ANDROID&rbqsm=fr&txp=5511222&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cgcr%2Cvprv%2Cmime%2Cgir%2Cclen%2Cdur%2Clmt&sig=AOq0QJ8wRQIgd80z-TuZZKr0XuRBTpob8Lh5wYFu8KiSHIsbgi4CCx4CIQDiBoOJscUId_EDn7v_Okk7hOUpuDx7vogbK3q8WW_M7w%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRQIgRZKzZi8fASf2KNoqYbhy1KzbioTtNalkFOyvOVqMqFsCIQCMI_n5lhydlSJr30sFwPlfiRI1923UUhmxSKT9FKsO6g%3D%3D</div>
<span id="SRC_IMG_PLAY" style="display: none">/img/play.png</span>
<span id="SRC_IMG_PAUSE" style="display: none">/img/pause.png</span>
<span id="APP_URL" style="display: none">{{env('APP_URL')}}</span>
</body>
<script src = '{{env('APP_URL')}}/js/main.js'></script>
</html>
