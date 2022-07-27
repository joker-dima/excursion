// Popup

let popup = document.querySelector('.popup');
let popupOnButton = document.querySelectorAll('#order-excursion');
let popupOffButton = document.querySelector('.close');
let page = document.querySelector('.page-container');

for (let i = 0; i < popupOnButton.length; i++) {
    popupOnButton[i].onclick = function () {
        popup.classList.toggle('active');
        page.classList.toggle('blur');

        document.addEventListener('mousedown', function (e) {
            if (e.target.closest('.popup') === null) {
                popup.classList.remove('active');
                page.classList.remove('blur');
            }
        });
    }
}

document.addEventListener('keyup', function (event) {
    if (event.code === 'Escape') {
        popup.classList.remove('active');
        page.classList.remove('blur');
    }
})

popupOffButton.addEventListener('click', function () {
    popup.classList.remove('active');
    page.classList.remove('blur');
})
