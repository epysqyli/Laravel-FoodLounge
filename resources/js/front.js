require("./bootstrap");

import Vue from "vue";
import App from "./App.vue";
import router from "./router";

import { library } from "@fortawesome/fontawesome-svg-core";
import { faShoppingCart } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

library.add(faShoppingCart);

Vue.component("font-awesome-icon", FontAwesomeIcon);

const app = new Vue({
    el: "#root",
    render: (h) => h(App),
    router,
});
