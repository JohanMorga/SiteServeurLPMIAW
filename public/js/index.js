const linkMenu = document.querySelector('.nav-menu__link--agence');
const textMenu = document.querySelector('.nav-menu__text--hover');
const iconAgence = document.querySelector('.icon__agence');
const iconHome = document.querySelector('.icon__home');
linkMenu.addEventListener('mouseenter', () => {
    textMenu.style.color = '#F86F03';
    iconAgence.style.color = '#F86F03';
    iconHome.style.color = '#fff';
});

linkMenu.addEventListener('mouseleave', () => {
    textMenu.style.color = '#fff';
    iconAgence.style.color = '#fff';
    iconHome.style.color = '#F86F03';
});
