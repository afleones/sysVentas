require('./bootstrap');

window.Vue = require('vue');
Vue.component('categoria', require('./components/Categoria.vue').default);
Vue.component('articulo', require('./components/Articulo.vue').default);
Vue.component('cliente', require('./components/Cliente.vue').default);
Vue.component('proveedor', require('./components/Proveedor.vue').default);
const app = new Vue({
    el: '#app',
    data :{
      menu : 0
    }
});
