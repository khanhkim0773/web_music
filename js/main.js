$ = document.querySelector.bind(document)
$$ = document.querySelectorAll.bind(document)
const registerBtn = document.querySelector('.register-btn')
const registerModal = document.querySelector('.js-register-modal')
const cancelRegisterBtn = document.querySelector('.js-cancel-register')
const registerModelContainer = document.querySelector('.register-modal-container')
const loginBtn = $('.login-btn')
const loginModal = $('.js-login-modal')
const cancelLoginBtn = $('.js-cancel-login')
const loginModelContainer = $('.js-login-modal-container')
const posterDiv = $('.poster')
const subContents = $$('.sub-content')
const playBtns = $$('.playbtn')

function showOrHideRegisterModal() {
    registerModal.classList.toggle('open')
}

function showOrHideLoginModal() {
    loginModal.classList.toggle('open')
}

registerModal.addEventListener('click', showOrHideRegisterModal)
registerBtn.addEventListener('click', showOrHideRegisterModal)
cancelRegisterBtn.addEventListener('click', showOrHideRegisterModal)
registerModelContainer.addEventListener('click', function (event) {
    event.stopPropagation()
})

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

console.log(playBtns)


for (let i = 0; i < subContents.length; i++) {
    subContents[i].addEventListener('mouseenter', () => {
        playBtns[i].classList.toggle('open');
    });

    subContents[i].addEventListener('mouseleave', () => {
        playBtns[i].classList.toggle('open');
    });
}

