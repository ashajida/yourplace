let burgerBtn = document.querySelector('.burger-menu');
let menu = document.querySelector('.nav-links');

burgerBtn.addEventListener('click', function () {
    menu.classList.toggle('open');
    console.log('clicked');
})

window.Vue = require('vue');

Vue.component(
    'Messenger', {
        props: 'body',
        template: require('./components/Messenger.vue')
    }
)



new Vue({
    el: '#messenger',
    data() {
        return {
            body: ""
        }
    },
})
