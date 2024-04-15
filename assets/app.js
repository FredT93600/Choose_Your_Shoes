import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import './styles/connexion.css';
import './styles/inscription.css';


console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

// créer un effet parallax sur la page d'accueil au niveau du hero il faut que le logo remonte plus doucement que la photo BG quand on scroll vers le bas.



// Sélectionnez le logo et l'arrière-plan
var logo = document.querySelector('.logo_transparent_background');
var bg = document.querySelector('.BG_Hero_OK');

// Ajoutez un écouteur d'événement pour le défilement de la fenêtre
window.addEventListener('scroll', function() {
    // Calculez le taux de défilement pour chaque élément
    // Le logo se déplace à la moitié de la vitesse de l'arrière-plan
    var scrollRateLogo = window.scrollY / 2;
    var scrollRateBg = window.scrollY;

    // Ajustez la position de chaque élément
    logo.style.transform = 'translateY(' + scrollRateLogo + 'px)';
    bg.style.transform = 'translateY(' + scrollRateBg + 'px)';
});