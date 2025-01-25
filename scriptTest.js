const iconeUp = document.querySelector('.icone-up');

function checkScroll() {
    const scrollTop = window.scrollY || document.documentElement.scrollTop; 

    if (scrollTop > 0) { 
        iconeUp.classList.add('visible-icone'); 
    } else {
        iconeUp.classList.remove('visible-icone'); 
    }
}

window.addEventListener('scroll', checkScroll);

// Exécution initiale pour vérifier l'état au chargement
checkScroll();
