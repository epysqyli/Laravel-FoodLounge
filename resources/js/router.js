import Vue from "vue";
import VueRouter from "vue-router";
import Home from './views/Home';
import Categories from './views/Categories';
import Restaurant from './views/Restaurant';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/categories/:names",
            name: "categories",
            component: Categories,
        },
        {
            path: "/restaurants/:slug",
            name: "restaurants",
            component: Restaurant,
        }
    ]
});

export default router;
