<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<h1>PLAYER</h1>
<div class="player_wrapper">
{{--    <div class="randomSong">--}}
{{--        <span class="player_title">Сгенерировать песню</span>--}}
{{--        <button class="selectButton">Generate song</button>--}}
{{--    </div>--}}
    <div class="player_block">
        <div class="player">
            <div class="player_title">Now Playing...</div>
            <audio class="audio"></audio>
            <div class="player_buttons">
                <div class="player_buttons_btn play">
                    <img class="play_src" src="{{env('APP_URL')}}/img/play.png" alt="btn">
                </div>
                <div class="player_progress_container">
                    <div class="player_progress"></div>
                </div>
            </div>
            <a class="player_show_track_button"><u>Show track</u></a>
            <span style="display: none" class="player_track_name">{!! $songTitle !!}</span>
        </div>
        <div class="players_score_block">
            <table class="players_ordered_list">
                <tr>
                    <th style="border-right: black 1px solid">Player</th>
                    <th>Score</th>
                </tr>
            </table>
        </div>
    </div>

{{--    <div class="players_input_group">--}}
{{--        <textarea class="players_input" id="playerName" required></textarea>--}}
{{--        <label class="players_label">Enter player nick name</label>--}}
{{--    </div>--}}


</div>
<div id="player_song" style="display: none">{{$link}}</div>
<span id="SRC_IMG_PLAY" style="display: none">{{env('APP_URL')}}/img/play.png</span>
<span id="SRC_IMG_PAUSE" style="display: none">{{env('APP_URL')}}/img/pause.png</span>
<span id="SRC_IMG_REPEAT" style="display: none">{{env('APP_URL')}}/img/repeat.png</span>
<script src="./js/main.js"></script>

</body>

<script src='{{env('APP_URL')}}/js/main.js'></script>
</html>
