$ = document.querySelector.bind(document)
$$ = document.querySelectorAll.bind(document)
const posterDiv = $('.poster')
const subContents = $$('.sub-content')
const playBtns = $$('.playbtn')
const playSongsBtn = $$('.js-play-song-btn')
const playPlaylistsBtn = $$('.js-play-playlist-btn')

loginModal.addEventListener('click', showOrHideLoginModal)
loginBtn.addEventListener('click', showOrHideLoginModal)
cancelLoginBtn.addEventListener('click', showOrHideLoginModal)
loginModelContainer.addEventListener('click', function (event) {
    event.stopPropagation()
})

// chuyen poster
const images = [
    './assets/img/logo/70a345571f4fdac72acbf6c5c3fceee5.jpg',
    './assets/img/poster-typo-2338.webp',
    './assets/img/poster3.webp'
]

let currentImageIndex = 0;
function changPoster() {
    posterDiv.style.animation = 'none';
    posterDiv.offsetHeight;
    posterDiv.style.animation = null;
    posterDiv.style.backgroundImage = `url(${images[currentImageIndex]})`
    currentImageIndex = (currentImageIndex + 1) % images.length;
}

changPoster()
setInterval(changPoster, 5000)

for (let i = 0; i < subContents.length; i++) {
    subContents[i].addEventListener('mouseenter', () => {
        playBtns[i].classList.toggle('open');
    });

    subContents[i].addEventListener('mouseleave', () => {
        playBtns[i].classList.toggle('open');
    });
}

for ( let i = 0; i < playSongsBtn.length; i++) {
    playSongsBtn[i].addEventListener('click', function() {
        window.location.href = 'playsong.html'
    })
}

for ( let i = 0; i < playPlaylistsBtn.length; i++) {
    playPlaylistsBtn[i].addEventListener('click', function() {
        window.location.href = 'playlist.html'
    })
}


