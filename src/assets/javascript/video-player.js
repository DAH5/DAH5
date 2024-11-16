const playPauseBtn = document.querySelector(".play-pause-btn");
const theaterBtn = document.querySelector(".theater-btn");
const fullScreenBtn = document.querySelector(".full-screen-btn");
const miniPlayerBtn = document.querySelector(".mini-player-btn");
const muteBtn = document.querySelector(".mute-btn");
const volumeSlider = document.querySelector(".volume-slider");
const currentTimeElem = document.querySelector(".current-time");
const totalTimeElem = document.querySelector(".total-time");
const logoBtn = document.querySelector(".logo-btn");
const speedBtn = document.querySelector(".speed-btn");
const previewImg = document.querySelector(".preview-img");
const thumbnailImg = document.querySelector(".thumbnail-img");
const timelineContainer = document.querySelector(".timeline-container");
const videoContainer = document.querySelector(".video-container");
const noScript = videoContainer.querySelector(".noscript");
const videoControlsContainer = document.querySelector(".video-controls-container");
const video = document.querySelector("video");

// Remove NoScript
noScript.style.display = "none";
videoControlsContainer.style.display = "block";
video.style.display = "block";
thumbnailImg.style.display = "none";

// Key Controls
document.addEventListener("keydown", e => {
    const tagName = document.activeElement.tagName.toLowerCase();
    switch( e.key.toLocaleLowerCase() )
    {
        case " ":
            if( tagName === "button" ) return;
        case "k":
            togglePlay();
            break;
        case "f":
            toggleFullScreenMode();
            break;
        case "t":
            toggleTheaterMode();
            break;
        case "i":
            toggleMiniPlayerMode();
            break;
        case "m":
            toggleMute();
            break;
        case "arrowleft":
        case "j":
            skip(-5);
            break;
        case "arrowright":
        case "l":
            skip(5);
            break;
    }
});

// Logo Button
logoBtn.addEventListener("click", () => {
    document.location.replace( "/" );
});

// Timeline
timelineContainer.addEventListener("mousemove", handleTimelineUpdate);
timelineContainer.addEventListener("mousedown", toggleScrubbing);
document.addEventListener("mouseup", e => {
    if( isScrubbing )
        toggleScrubbing( e );
});
document.addEventListener("mousemove", e => {
    if( isScrubbing )
        handleTimelineUpdate( e );
});

function handleTimelineUpdate( e )
{
    const videoDir = video.dataset.videoDir;

    if( videoDir == null )
        return;

    const rect = timelineContainer.getBoundingClientRect();
    const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width;
    const previewImgNumber = Math.max(1, Math.floor((percent * video.duration) / 5));
    const previewImgSrc = `${videoDir}preview${previewImgNumber}.png`;
    previewImg.src = previewImgSrc;
    timelineContainer.style.setProperty("--preview-position", percent);

    if( isScrubbing )
    {
        e.preventDefault();
        thumbnailImg.src = previewImgSrc;
        timelineContainer.style.setProperty( "--progress-position", percent );
    }
}

let isScrubbing = false;
let wasPaused = false;
function toggleScrubbing( e )
{
    const rect = timelineContainer.getBoundingClientRect();
    const percent = Math.min(Math.max(0, e.x - rect.x), rect.width) / rect.width;
    isScrubbing = ( e.buttons & 1 ) === 1;
    videoContainer.classList.toggle("scrubbing");
    if(isScrubbing)
    {
        wasPaused = video.paused;
        video.pause();
    }
    else
    {
        video.currentTime = percent * video.duration;
        if( !wasPaused )
            video.play();
    }

    handleTimelineUpdate( e );
}

// Playback Speed
speedBtn.addEventListener("click", changePlaybackSpeed);

function changePlaybackSpeed()
{
    let newPlaybackRate = video.playbackRate + 0.25;
    if( newPlaybackRate > 2 ) newPlaybackRate = 0.25;
    video.playbackRate = newPlaybackRate;
    speedBtn.textContent = `${newPlaybackRate}x`;
}

// Duration
video.addEventListener("loadeddata", () => {
    totalTimeElem.textContent = formatTime( video.duration );
});

video.addEventListener("timeupdate", () => {
    currentTimeElem.textContent = formatTime( video.currentTime );
    const percent = video.currentTime / video.duration;
    timelineContainer.style.setProperty( "--progress-position", percent );
})

const leadingZeroFormatter = new Intl.NumberFormat( undefined, {
    minimumIntegerDigits: 2
});
function formatTime( time )
{
    const seconds = Math.floor( time % 60 );
    const minutes = Math.floor( time / 60 ) % 60;
    const hours = Math.floor( time / 3600 );

    if( hours === 0 )
    {
        return `${minutes}:${leadingZeroFormatter.format(seconds)}`;
    }
    else
    {
        return `${hours}:${leadingZeroFormatter.format(minutes)}:${leadingZeroFormatter.format(seconds)}`;
    }
}

function skip( time )
{
    video.currentTime += time;
}

// Volume
muteBtn.addEventListener("click", toggleMute);
volumeSlider.addEventListener("input", e => {
    video.volume = e.target.value;
    video.muted = e.target.value === 0;
});

function toggleMute()
{
    video.muted = !video.muted;
}

video.addEventListener("volumechange", () => {
    volumeSlider.value = video.volume;
    let volumeLevel;
    if( video.muted || video.volume === 0 )
    {
        volumeSlider.value = 0;
        volumeLevel = "muted";
    }
    else if( video.volume >= .5 )
    {
        volumeLevel = "high";
    }
    else
    {
        volumeLevel = "low";
    }
    
    videoContainer.dataset.volumeLevel = volumeLevel;
});

// View Modes
theaterBtn.addEventListener("click", toggleTheaterMode);
fullScreenBtn.addEventListener("click", toggleFullScreenMode);
miniPlayerBtn.addEventListener("click", toggleMiniPlayerMode);

function toggleTheaterMode()
{
    videoContainer.classList.toggle("theater");
}

function toggleFullScreenMode()
{
    if( document.fullscreenElement == null )
    {
        videoContainer.requestFullscreen();
    }
    else
    {
        document.exitFullscreen();
    }
}

function toggleMiniPlayerMode()
{
    if( videoContainer.classList.contains("mini-player") )
    {
        document.exitPictureInPicture();
    }
    else
    {
        video.requestPictureInPicture();
    }
}

document.addEventListener("fullscreenchange", () => {
    videoContainer.classList.toggle("full-screen", document.fullscreenElement);
});

video.addEventListener("enterpictureinpicture", () => {
    videoContainer.classList.add("mini-player");
});

video.addEventListener("leavepictureinpicture", () => {
    videoContainer.classList.remove("mini-player");
});

// Play/Pause
playPauseBtn.addEventListener('click', togglePlay);
video.addEventListener('click', togglePlay);

function togglePlay()
{
    video.paused ? video.play() : video.pause();
}

video.addEventListener("play", () => {
    videoContainer.classList.remove("paused");
});

video.addEventListener("pause", () => {
    videoContainer.classList.add("paused");
});