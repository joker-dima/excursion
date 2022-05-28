// Burger menu

let navMain = document.querySelector(".main-navigation");
let navToggleOpen = document.querySelector(".main-navigation__togle--open");
let navToggleClose = document.querySelector(".main-navigation__togle--close")

navToggleOpen.addEventListener('click', function () {
    if (navMain.classList.contains('main-navigation--closed')) {
        navMain.classList.remove('main-navigation--closed');
        navMain.classList.add('main-navigation')
    } else {
        navMain.classList.add('main-navigation--closed');
        navMain.classList.remove('main-navigation');
    }
});

navToggleClose.addEventListener('click', function () {
    if (navMain.classList.contains('main-navigation--closed')) {
        navMain.classList.remove('main-navigation--closed');
        navMain.classList.add('main-navigation');
    } else {
        navMain.classList.add('main-navigation--closed');
        navMain.classList.remove('main-navigation');
    }
});

