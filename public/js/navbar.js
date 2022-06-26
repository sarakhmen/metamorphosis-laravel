const burger = document.getElementById('menu');
const phone = document.getElementById('phone');
const cross = document.getElementById('cross');
const expanded_menu = document.getElementById('navbar-expanded-menu');

burger.addEventListener('click', () => {
    cross.style.display = 'block';
    burger.style.display = 'none';
    phone.style.visibility = 'hidden';
    expanded_menu.style.display = 'block';
})

cross.addEventListener('click', () => {
    cross.style.display = 'none';
    burger.style.display = 'block';
    phone.style.visibility = 'visible';
    expanded_menu.style.display = 'none';
})