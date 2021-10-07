require("./bootstrap");

window.Vue = require("vue");
window.axios = require("axios");

//import Vue from 'vue';
import App from './views/App';
import router from "./router";


// Vue.component(
//     "example-component",
//     require("./components/ExampleComponent.vue").default
// );

const app = new Vue({
    el: "#root",
    render: h => h(App),
    router
});
