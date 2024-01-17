
const projets = document.querySelectorAll('.projets');
let switchIndex = 0;
projets.forEach((projet) => {
    if (switchIndex % 2 !== 0) {
        projet.classList.add('projets--impair');
    }
    switchIndex++;
});