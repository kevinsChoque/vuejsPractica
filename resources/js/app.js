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
//------------------------------------------------director
Vue.component('template-director', require('./components/director/template.vue').default);
Vue.component('datos-ie', require('./components/director/datosIe.vue').default);

Vue.component('template-docente', require('./components/docente/templateDoc.vue').default);
Vue.component('datos-do', require('./components/docente/datosdo.vue').default);
Vue.component('unidad', require('./components/docente/unidades/unidad.vue').default);
Vue.component('lista-cursos', require('./components/docente/unidades/listaCursos.vue').default);
Vue.component('template-especialista', require('./components/especialista/templateEsp.vue').default);
Vue.component('datos-es', require('./components/especialista/datoses.vue').default);
Vue.component('agregar-sesion', require('./components/docente/sesiones/agregarSesion.vue').default);
Vue.component('lista-sesion', require('./components/docente/sesiones/listaSesiones.vue').default);

Vue.component('agregar-recurso', require('./components/docente/recursos/agregarRecurso.vue').default);
Vue.component('lista-recurso', require('./components/docente/recursos/listarRecurso.vue').default);

Vue.component('load-file', require('./components/director/gestionArchivos/loadFile.vue').default);
Vue.component('file-ie', require('./components/director/gestionArchivos/fileIe.vue').default);
Vue.component('file-revision', require('./components/director/gestionArchivos/fileRevision.vue').default);
//------------------------------------------------
Vue.component('crud-formulario', require('./components/CrudConVariosComp/Formulario.vue').default);
Vue.component('crud-tabla-usuarios', require('./components/CrudConVariosComp/TablaUsuarios.vue').default);

let routes = [
    { path: '/Inicio', component: require('./components/director/template.vue').default },
    { path: '/gestionArchivos', component: require('./components/director/gestionArchivos/gestionArchivos.vue').default },
    { path: '/agregarUnidades', component: require('./components/docente/unidades/agregarUnidades.vue').default },
    { path: '/gestionSesiones', component: require('./components/docente/sesiones/gestionSesiones.vue').default },
    { path: '/detalleSesiones', component: require('./components/docente/sesiones/detalleSesiones.vue').default },
    { path: '/gestionRecursos', component: require('./components/docente/recursos/gestionRecursos.vue').default },
    { path: '/asignarEncargado', component: require('./components/director/asignarEncargado.vue').default },

    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },

    { path: '/EjercicioLima', component: require('./components/CrudConVariosComp/DescripcionEjercicio.vue').default },
    { path: '/EjercicioLima2', component: require('./components/CrudLima/listar.vue').default },
    { path: '/EjercicioLima2Formulario', component: require('./components/CrudLima/formulario.vue').default },
    { path: '/EjercicioLima2Edit/:id', component: require('./components/CrudLima/editar.vue').default }
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
