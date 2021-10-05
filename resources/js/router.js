import Vue from 'vue';  
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./views/Home";

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
            component: Restaurants,
        },
        {
            path: '/menu',
            name: 'Menu',
            component: Menu,
        },
    ],
});

export default router;