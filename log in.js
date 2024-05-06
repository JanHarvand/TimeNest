const showPopup = document.querySelector('.register-link p a');
const popupContainer = document.querySelector('.pop-container');
const close = document.querySelector('.button');

showPopup.onclick = () => {
    popupContainer.classList.add('active');
}

close.onclick = () => {
    popupContainer.classList.remove('active');
}