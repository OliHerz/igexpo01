const hamburger = document.querySelector('.hamburger');
const navBar = document.querySelector('.navBar');

hamburger.addEventListener('click', function (){
  hamburger.classList.toggle('is-active');
  navBar.classList.toggle('navBar-active');
});