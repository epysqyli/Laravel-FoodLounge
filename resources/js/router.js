import Vue from 'vue';  
import VueRouter from 'vue-router';

// Importation page of Vue.Router
import Home from "./views/Home";
Vue.use( VueRouter );

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
    ],
});

export default router;