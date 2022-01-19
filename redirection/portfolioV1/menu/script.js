const menuIcon = document.querySelector('.hamburger-menu');
const navbar = document.querySelector('.navbar');
const line1 = document.querySelector('.line-1');
const line2 = document.querySelector('.line-2');
const line3 = document.querySelector('.line-3');

menuIcon.addEventListener('click', () => {
    navbar.classList.toggle('change');
    line1.classList.toggle('change');
    line2.classList.toggle('change');
    line3.classList.toggle('change');
});