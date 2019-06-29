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
//
Vue.component('pagination', require('laravel-vue-pagination'));
//
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// import VueProgressBar from 'vue-progressbar';
// Vue.use(VueProgressBar, {
//   color: 'rgb(143, 255, 199)',
//   failedColor: 'red',
//   height: '3px'
// });

Vue.component('crud-formulario', require('./components/CrudConVariosComp/Formulario.vue').default);
Vue.component('crud-tabla-usuarios', require('./components/CrudConVariosComp/TablaUsuarios.vue').default);

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },

    { path: '/EjercicioLima', component: require('./components/CrudConVariosComp/DescripcionEjercicio.vue').default },
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
//
Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);
//
const app = new Vue({
    el: '#app',
    router,
    data:{
        search:''
    },
    methods:{
        // searchit(){
        //     Fire.$emit('searching');
        // }
        searchit:_.debounce(() => {
            Fire.$emit('searching');
        },2000),

        printme(){
            window.print();
        }
    }
});
