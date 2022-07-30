import _ from 'lodash';
window._ = _;
try{
    window.Popper = require('popper.js').default
    window.$ = window.jQuery = require('jquery')
    require('bootstrap')
}catch(e){
}


import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-toke"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/9.x/csrf#csrf-x-xsrf-token%27');
}