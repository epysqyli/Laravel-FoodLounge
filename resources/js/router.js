import Vue from 'vue';  
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
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