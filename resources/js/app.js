require('./bootstrap');
require("flatpickr");

const burger = document.querySelector('.navbar__burger');
const navbarNav = document.querySelector('.navbar__nav');

burger.addEventListener('click', () => {
    navbarNav.classList.toggle('active');
})
