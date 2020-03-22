const navIcon = document.getElementById('bar-icon');
const ul = document.querySelector('ul');
navIcon.addEventListener('click', function() {
  navIcon.classList.toggle('change');
  if (ul.className === 'nav__links') {
    ul.className += ' responsive';
  } else {
    ul.classList.remove('responsive');
    ul.clasName = 'nav__links';
  }
});
