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