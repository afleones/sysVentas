require('./bootstrap');

window.Vue = require('vue');
Vue.component('v-select', VueSelect.VueSelect);
Vue.component('categoria', require('./components/Categoria.vue').default);
Vue.component('articulo', require('./components/Articulo.vue').default);
Vue.component('cliente', require('./components/Cliente.vue').default);
Vue.component('proveedor', require('./components/Proveedor.vue').default);
Vue.component('rol', require('./components/Rol.vue').default);
Vue.component('user', require('./components/User.vue').default);
Vue.component('ingreso', require('./components/Ingreso.vue').default);
const app = new Vue({
    el: '#app',
    data :{
      menu : 0
    }
});
