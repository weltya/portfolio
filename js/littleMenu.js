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


const produits = document.querySelector('.produits');
const bike = document.querySelector('.nav-bike');
const menuIcon2 = document.querySelector('.hamburger-menu');
const compte = document.querySelector('.compte');
const messagerie = document.querySelector('.messagerie');

produits.addEventListener('click', () => {
    bike.classList.toggle('change');
});

menuIcon2.addEventListener('click', () => {
    bike.classList.remove('change');
});

compte.addEventListener('click', () => {
    bike.classList.remove('change');
});

messagerie.addEventListener('click', () => {
    bike.classList.remove('change');
});