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
    <div class="randomSong">
        <span class="player_title">Сгенерировать песню</span>
        <button class="selectButton">Generate song</button>
    </div>

    <div class="player">
        <div class="player_title">Now Playing...</div>
        <audio class="audio" ></audio>
        <div  class="player_buttons">
            <div class="player_buttons_btn play" >
                <img class="play_src" src="{{env('APP_URL')}}/img/play.png" alt="btn">
            </div>
            <div class="player_progress_container">
                <div class="player_progress"></div>
            </div>
        </div>
    </div>
</div>
<div id="player_song"style="display: none">https://rr3---sn-uxoxu05-vqnl.googlevideo.com/videoplayback?expire=1659560974&ei=ro_qYsS3FuiIyAWuzI_wDA&ip=85.238.118.129&id=o-AFumsJrareHm3Sf4uzQKF4iL9-f55ZVCCqOgsEG3-kui&itag=140&source=youtube&requiressl=yes&mh=Fj&mm=31%2C29&mn=sn-uxoxu05-vqnl%2Csn-3c27sn7s&ms=au%2Crdu&mv=m&mvi=3&pl=22&initcwndbps=1272500&vprv=1&mime=audio%2Fmp4&gir=yes&clen=4308751&dur=266.170&lmt=1637413546635683&mt=1659538878&fvip=5&keepalive=yes&fexp=24001373%2C24007246&c=ANDROID&rbqsm=fr&txp=5511222&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cgir%2Cclen%2Cdur%2Clmt&sig=AOq0QJ8wRQIgF6LEK4cyaqibpT_DgsO_TUjVyOro85Buy94V76yLKI8CIQDljMqJFPOOEZLopJWw2WR2sMcunHJg2TbSSUbC7SJ2zA%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRQIgQlrn3r9DK2bEieEQf1ujzzYxAHr9jHfGMZez8z0KoGACIQCR1M3YJAHImrfCCX97zTfHICA_yTmmKhONLJqoq1VZ-Q%3D%3D</div>
<span id="SRC_IMG_PLAY" style="display: none">{{env('APP_URL')}}/img/play.png</span>
<span id="SRC_IMG_PAUSE" style="display: none">{{env('APP_URL')}}/img/pause.png</span>
<span id="SRC_IMG_REPEAT" style="display: none">{{env('APP_URL')}}/img/repeat.png</span>
</body>
<script src = '{{env('APP_URL')}}/js/main.js'></script>
</html>
