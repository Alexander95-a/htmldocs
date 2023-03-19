
let scoreLeftElementDisplay = document.getElementById('score-left');
let scoreRightElementDisplay = document.getElementById('score-right');


let scoreLeft = 0;
let scoreRight = 0;



// adding score to left
function add1ScoreLeft() {
    scoreLeftElementDisplay.textContent = scoreLeft += 1;
}


// adding score right
function add1ScoreRight() {
    scoreRightElementDisplay.textContent = scoreRight += 1;
}



// Function for countdown timer
let countdownTimerElementDisplay = document.getElementById('timer_count');

const startingMinutes = 2;
let time = startingMinutes * 60;

let isPaused = false;

var timer = setInterval(() => {
    if(!isPaused) {
        const minute = Math.floor(time / 60);
        let seconds = time % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;

        countdownTimerElementDisplay.textContent = `${minute}:${seconds}`;
        time--;
    }
}, 1000);

function startTimer(){


    isPaused = true;
}

function pauseTimer(){
    isPaused = false;
}

function resetTimer() {
    countdownTimerElementDisplay.textContent = '2:00';
    time = startingMinutes * 60;
    isPaused = false;
}