require('./bootstrap');

window.Vue = require('vue');// import Vue from 'vue';

import moment from 'moment';
import { Form, HasError, AlertError } from 'vform';
//
import swal from 'sweetalert2';
window.swal = swal;

const toast  = swal.mixin({
    toast:true,
    position:'top-end',
    showConfirmButton:false,
    timer:3000
});
// const Toast = Swal.mixin({
//     toast: true,
//     position: 'top-end',
//     showConfirmButton: false,
//     timer: 3000
//   });
window.toast = toast;
//

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueRouter from 'vue-router';
Vue.use(VueRouter);

// import VueProgressBar from 'vue-progressbar';
// Vue.use(VueProgressBar, {
//   color: 'rgb(143, 255, 199)',
//   failedColor: 'red',
//   height: '3px'
// });

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default }
  ]

const router = new VueRouter({
    mode: 'history',
    routes
})

Vue.filter('upText' , function(text){
    // return text.toUpperCase();
    return text.charAt(0).toUpperCase() + text.slice(1);
})

Vue.filter('myDate' , function(created){
    return moment(created).format('MMMM Do YYYY');
})

window.Fire = new Vue();

const app = new Vue({
    el: '#app',
    router
});
