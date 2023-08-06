//Crea un iframe en el div con el id
var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('video', {
        height: '700',
        width: '700',
        videoId: getId(),
        playerVars: {
        'playsinline': 1,
        "autoplay": 1,
        "controls": 0,
        "rel": 0
        },
        events: {
        'onReady': onPlayerReady
        }
    });
}

//Obtiene el id del video con regex
function getId() {
    let id = "";
    const video = document.querySelector("#video");
    url = video.dataset.url;
    url = url.replace(/(>|<)/gi, "").split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);

    if(url[2] !== undefined){
        id = url[2].split(/[^0-9a-z_\-]/i);
        id = id[0];
    } else {
        id = url;
    }

    return id;
}

//Empieza el video cuando el reproductor este listo
function onPlayerReady(event) {
  event.target.playVideo();
}

var done = false;
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
    }
}
function stopVideo() {
  player.stopVideo();
}
