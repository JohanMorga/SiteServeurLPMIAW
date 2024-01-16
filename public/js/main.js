const projets = document.querySelectorAll('.projets');
const fab = document.querySelector('.fab');

fab.addEventListener('click', () => {
    window.scrollTo({ top: 900, behavior: 'smooth' });
});
