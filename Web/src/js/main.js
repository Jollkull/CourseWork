let menuBtn = document.querySelector('.nav__mobile');
let menuBtnIcon = document.querySelector('.nav__mobile i')
let menu = document.querySelector('.nav__list');
let menuItem = document.querySelectorAll('.nav__list-item');

menuBtn.addEventListener('click', function() {
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');

    if (menuBtn.classList.contains('active')) {
        menuBtnIcon.classList.remove('fa-bars');
        menuBtnIcon.classList.add('fa-xmark')
    } else {
        menuBtnIcon.classList.add('fa-bars');
        menuBtnIcon.classList.remove('fa-xmark')
    }
})


menuItem.forEach (function(menuItem) {
  menuItem.addEventListener('click', function() {
          menuBtn.classList.toggle('active');
          menu.classList.toggle('active');
  })
})


