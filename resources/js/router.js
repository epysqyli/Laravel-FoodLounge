import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import('./views/Home'),
        },
        {
            path: "/categories/:names",
            name: "categories",
            component: () => import("./views/Categories"),
        },
        {
            path: "/restaurants/:slug",
            name: "restaurants",
            component: () => import("./views/Restaurant"),
        }
    ]
});

export default router;
