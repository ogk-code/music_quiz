const playersListRounded = $('.players_ordered_list');
const playerButtons = $('.player_buttons');
const playerShowTrackButton=$('.player_show_track_button');
const playerTrackName=$('.player_track_name');
const selectButton = $('.selectButton');
const progress = $('.player_progress');
const playersInput = $('.players_input');
const playSrc = $('.play_src');
const playBtn = $('.play');
const audio = $('.audio');
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
    playerShowTrackButton.css('pointer-events','auto');
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

function incScore(el){
    const score=$(el).closest('tr').find(':nth-child(2)').text();

    $(el).closest('tr').find(':nth-child(2)').text(+score+1);
}

function getURLVar(key) {
    let vars = location.search.substr(1).split('&').reduce(function (result, string) {
        let t = string.split('=');
        result[decodeURIComponent(t[0])] = t.length == 1 ? null : decodeURIComponent(t[1]);
        return result;
    }, {});
    return vars[key] ? vars[key] : '';
}

playerShowTrackButton.bind('click',()=>{
    playerTrackName.attr('hidden','');
    playerTrackName.text(getURLVar('q'));
})

$(document).ready(() => {
    playersInput.keydown((e) => {
        e.keyCode == 13 && (
            e.preventDefault(),
                playersListRounded.append(`
            <tr class="players_score_table_tr">
                <td >
                    <a>${playersInput.val()}:</a>
                </td>
                <td class="players_score_table_td">
                    <span class="players_score">0</span>
                </td>
                <td  class="players_score_table_td">
                    <button  onclick="incScore(this)" class="players_inc_score_button">+</button>
                </td>
            </tr>
            `),
                playersInput.scrollTop(0),
                playersInput.val('')
        )
    })
})

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



$('#add').on('click', function(){
    let name = prompt('Исполнитель');
    if(!name || name == "Моргенштерн" || name == "Егор Крид"){
        alert('Иди нахуй!');
        return;
    }
    $('#table').append(getRowHtml(name));
    $('.remove').on('click', function(){
        $(this).parent().parent().remove();
    })
})

function getRowHtml(name){
    return '<tr><td>'+name+'</td><td><a class="remove" href="#">Удалить</a></td></tr>';
}