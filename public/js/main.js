const playBtn = $('.play');
const audio = $('.audio');
const progressContainer = $('.player_progress_container');
const progress = $('.player_progress');
const playSrc = $('.play_src');
const song = $('#player_song');
const SRC_IMG_PLAY=$('#SRC_IMG_PLAY');
const SRC_IMG_REPEAT=$('#SRC_IMG_PAUSE');

let repeatPossibility;

function selectSong() {
    audio.attr('src', song.text());
}

function playSong() {
    audio[0].play();
    playSrc.attr('src',SRC_IMG_REPEAT.text());
}

function pauseSong() {
    audio[0].pause();
    playSrc.attr('src', SRC_IMG_PLAY.text())
    repeatPossibility?playBtn.attr('disabled',''):playBtn.attr('disabled','disabled');

}

playBtn.bind('click', () => {
    audio[0].paused&&(
        repeatPossibility=1,
        selectSong(),
        playSong(),
        setTimeout(()=> pauseSong(),2000)
    );
})


