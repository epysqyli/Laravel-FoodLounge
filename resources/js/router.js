import Vue from 'vue';  
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./pages/Home";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/restaurants',
            name: 'Restaurants',
            component: Contatti,
        },
        {
            path: '/menu',
            name: 'Menu',
            component: Posts,
        },
    ],
});

export default router;