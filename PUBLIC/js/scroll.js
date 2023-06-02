/** SCROLL TO TOP
 * (1) Lorsque l'événement de défilement (onscroll) se produit sur la fenêtre (window), la fonction scrollFunction() est appelée.
 * (2) La fonction scrollFunction() commence par récupérer l'élément du DOM ayant l'ID "scroll-button" à l'aide de la méthode document.getElementById(). 
 * (3) Ensuite, la fonction vérifie si la position de défilement verticale (scrollTop) du corps de la page (document.body.scrollTop),
 *     ou de l'élément HTML (document.documentElement.scrollTop) est supérieure  20 pixels. 
 *     Si c'est le cas, cela signifie que l'utilisateur a fait défiler la page vers le bas de plus de 20 pixels. 
 * (4) Si la condition est vraie, la propriété display du bouton est définie sur "block", ce qui le rend visible. Sinon, 
 *     la propriété display est définie sur "none", ce qui le rend invisible.
 * (5) Cette fonction est utilisée pour effectuer le défilement vers le haut lorsque le bouton est cliqué.
 * (6) La fonction scrollToTop() commence par récupérer la position de défilement verticale actuelle (currentPosition) 
 *     en utilisant document.documentElement.scrollTop ou document.body.scrollTop.
 *     Cette valeur représente la distance en pixels depuis le haut de la page jusqu'à la position actuelle de défilement.
 * (7) Ensuite, la fonction vérifie si la currentPosition est supérieure à 0. Si c'est le cas, cela signifie que la page n'est pas encore revenu en haut.
 * (8) Dans ce cas, la fonction utilise window.requestAnimationFrame() pour demander au navigateur d'effectuer une animation de défilement fluide. 
 *     Cela permet d'obtenir un effet de défilement doux vers le haut.
 * (9) En utilisant window.scrollTo(), la fonction déplace la position de défilement vers le haut en spécifiant les coordonnées (0, currentPosition - currentPosition / 50). 
 *     La division par 50 ralentit la vitesse de défilement, vous pouvez ajuster ce nombre pour modifier la vitesse.
 *     La fonction scrollToTop() se rappelle récursivement jusqu'à ce que la currentPosition atteigne 0, c'est-à-dire que la page soit revenue en haut.
 */

window.onscroll = function() { // (1)
  scrollFunction();
};

function scrollFunction() { // (2)
  var scrollToTopButton = document.getElementById("scroll-button"); // (3)
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) { 
      scrollToTopButton.style.display = "block"; // (4)
  } else {
      scrollToTopButton.style.display = "none";
  }
}

function scrollToTop() { // (5)
  var currentPosition = document.documentElement.scrollTop || document.body.scrollTop; // (6)
  if (currentPosition > 0) { // (7)
      window.requestAnimationFrame(scrollToTop); // (8)
      window.scrollTo(0, currentPosition - currentPosition / 50); // (9)
  }
}