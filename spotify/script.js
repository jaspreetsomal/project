console.log("Welcome to Spotify");
let songIndex=0;
let audioElement = new Audio("tu Shayar Banaagi.mp3");

let masterPlay =document.getElementById('masterPlay');
let myProgressBar = document.getElementById('myProgressBar');
let songs =[
    {songName:"salem-e-Ishq",filePath:"music/mp3",coverPath:"bg.png"},
    {songName:"salem-e-Ishq",filePath:"music/mp3",coverPath:"bg.png"},
    {songName:"salem-e-Ishq",filePath:"music/mp3",coverPath:"bg.png"},
    {songName:"salem-e-Ishq",filePath:"music/mp3",coverPath:"bg.png"},
    {songName:"salem-e-Ishq",filePath:"music/mp3",coverPath:"bg.png"},


]
//AudioElemen.play();

//Handel play/pause click
masterPlay.addEventListener('click',()=>{
    if(audioElement.paused || audioElement.currentTime<=0){
        audioElement.play();
    }
})
//Listen to Events
myProgressBar .addEventListener('timeupdate',()=>{
console.log('timeupdate');
})