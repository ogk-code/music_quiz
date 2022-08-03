const playBtn = $('.play');
const audio = $('.audio');
const progressContainer = $('.player_progress_container');
const playerButtons = $('.player_buttons');
const progress = $('.player_progress');
const playSrc = $('.play_src');
const selectButton = $('.selectButton');
const song = $('#player_song');
const SRC_IMG_PLAY = $('#SRC_IMG_PLAY');
const SRC_IMG_PAUSE = $('#SRC_IMG_PAUSE');
const SRC_IMG_REPEAT = $('#SRC_IMG_REPEAT');
const TIMER_DURATION = 30000;
const TIMER_STEP = 1000;

let remainedTimerDuration;
let repeatPossibility;
let interval;
let timerOut;

function selectSong() {
    remainedTimerDuration = TIMER_DURATION;

    playerButtons.css('pointer-events', 'auto');
    audio.attr('src', song.text());
}

function playSong() {
    audio[0].play();
    playSrc.attr('src', SRC_IMG_PAUSE.text());
}

function pauseSong() {
    audio[0].pause();
    playSrc.attr('src', SRC_IMG_PLAY.text());
}

function pointerEventAfterRepeat() {
    repeatPossibility--;
    repeatPossibility >= 1 ? selectSong() : playerButtons.css('pointer-events', 'none');
}

function updateProgress(e) {
    const duration = TIMER_DURATION / 1000;
    const progressPercent = audio[0].currentTime / duration * 100;

    progress.css('width', `${progressPercent}%`);
}

audio.bind('timeupdate', updateProgress)

selectButton.bind('click', () => {
    selectSong();

    repeatPossibility = 2;
    playSrc.attr('src', SRC_IMG_PLAY.text())
})

playBtn.bind('click', () => {
    audio[0].paused ? (
        playSong(),
            timerOut = setTimeout(() => {
                pauseSong();
                remainedTimerDuration -= TIMER_STEP;
            }, remainedTimerDuration),
            interval = setInterval(() => {
                remainedTimerDuration -= TIMER_STEP;
                remainedTimerDuration <= 0 && (
                    playSrc.attr('src', SRC_IMG_REPEAT.text()),
                        pointerEventAfterRepeat(),
                        clearInterval(interval),
                        clearTimeout(timerOut)
                );
            }, TIMER_STEP)
    ) : (
        pauseSong(),
            clearInterval(interval),
            clearTimeout(timerOut)
    )
})



