$ = document.querySelector.bind(document)
$$ = document.querySelectorAll.bind(document)
const registerBtn = document.querySelector('.register-btn')
const registerModal = document.querySelector('.js-register-modal')
const loginBtn = $('.login-btn')
const loginModal = $('.js-login-modal')
const cancelRegisterBtn = document.querySelector('.js-cancel-register')
const registerModelContainer = document.querySelector('.register-modal-container')
const cancelLoginBtn = $('.js-cancel-login')
const loginModelContainer = $('.js-login-modal-container')

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