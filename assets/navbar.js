const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');
const osMenu = document.getElementById('osMenu');

hamburger.addEventListener('click', () => {
  menu.classList.toggle('show');
});

osMenu.addEventListener('click', (e) => {
  e.stopPropagation();
  osMenu.classList.toggle('show');
});

document.addEventListener('click', (e) => {
  if (!osMenu.contains(e.target)) {
    osMenu.classList.remove('show');
  }
});