const APP_URL=$('#APP_URL');
const playBtn = $('.play');
const audio = $('.audio');
const progressContainer = $('.player_progress_container');
const progress = $('.player_progress');
const playSrc = $('.play_src');
const song = $('#player_song');
const SRC_IMG_PLAY=$('#SRC_IMG_PLAY');
const SRC_IMG_PAUSE=$('#SRC_IMG_PAUSE');

function selectSong() {
    audio.attr('src', song.text());
}

function playSong() {
    audio[0].play();
}

function pauseSong() {
    audio[0].pause();
}

playBtn.bind('click', () => {
    if(audio[0].paused) {
        selectSong();
        playSong();
        playSrc.attr('src',APP_URL.text()+SRC_IMG_PAUSE.text())
    }else {
        pauseSong();
        playSrc.attr('src',APP_URL.text()+SRC_IMG_PLAY.text())

    }

})
