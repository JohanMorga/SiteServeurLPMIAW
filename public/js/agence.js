const projets = document.querySelectorAll('.projets');
console.log(projets);
let switchIndex = 0;
projets.forEach((projet) => {
    if (switchIndex % 2 !== 0) {
        projet.classList.add('projets--impair');
    }
    switchIndex++;
});


const linkMenu = document.querySelector('.nav-menu__link--home');
const textMenu = document.querySelector('.nav-menu__text--hover');
const iconAgence = document.querySelector('.icon__agence');
const iconHome = document.querySelector('.icon__home');
linkMenu.addEventListener('mouseenter', () => {
    textMenu.style.color = '#F86F03';
    iconHome.style.color = '#F86F03';
    iconAgence.style.color = '#fff';

});

linkMenu.addEventListener('mouseleave', () => {
    textMenu.style.color = '#fff';
    iconHome.style.color = '#fff';
    iconAgence.style.color = '#F86F03';
});


const boutonFab = document.querySelector('.fab');
boutonFab.addEventListener('click', () => {
    window.scrollBy(0, window.innerHeight);
    console.log(window.innerHeight);
});
