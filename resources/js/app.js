let burgerBtn = document.querySelector('.burger-menu');
let menu = document.querySelector('.nav-links');

burgerBtn.addEventListener('click', function () {
    menu.classList.toggle('open');
    console.log('clicked');
})

console.log('clicked');
