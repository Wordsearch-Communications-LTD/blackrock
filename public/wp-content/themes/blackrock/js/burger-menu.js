document.querySelector('.burger-menu').addEventListener("click", e => {
  e.preventDefault();
  document.querySelector('.header-menu').classList.toggle('menu-open');
});