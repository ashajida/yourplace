let burgerBtn = document.querySelector('.burger-menu');
let menu = document.querySelector('.nav-links');

burgerBtn.addEventListener('click', function () {
    menu.classList.toggle('open');
    console.log('clicked');
})

const API_KEY = 'TlCFXYQq0U2EOpuiAjkC6w18859';

const handleApi = (e, API_KEY, elements) => {
    e.preventDefault();

    const { postcode, addressInput, longitute, latitude, city } = elements;


    if (postcode === "") {
        document.querySelector('#err-message').innerText = 'Fill in postcode';
        return;
    }
    const endPoint = `https://api.getaddress.io/find/${postcode}?api-key=${API_KEY}`;

    addressInput.innerHTML = "";


    fetch(endPoint)
        .then((res) => res.json()
        )
        .then((data) => {
            data.addresses.forEach((address) => {
                const addressArr = address.split(',');
                addressInput.innerHTML += `<option>${addressArr[0]}</option>`;
                city.value = addressArr[5];
            });
            longitude.value = data.longitude;
            latitude.value = data.latitude;
        });

}

const btnPostcode = document.querySelector('#btnPostcode');
const postcode_lookup = document.querySelector('#postcode_lookup')
const addressInput = document.querySelector('#address');
const longitude = document.querySelector('#longitude');
const latitude = document.querySelector('#latitude');
const city = document.querySelector('#city');

btnPostcode.addEventListener('click', (e) => handleApi(e, API_KEY, {
    postcode: postcode_lookup.value,
    addressInput,
    longitude,
    latitude,
    city
}));




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
