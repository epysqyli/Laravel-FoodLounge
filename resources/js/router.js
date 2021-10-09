import Vue from "vue";
import VueRouter from "vue-router";

// Import page of Vue.Router
Vue.use(VueRouter);
import Home from "./views/Home";
import Categories from "./views/Categories";
import Restaurant from "./views/Restaurant";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/categories/",
            name: "categories",
            component: Categories
        },
        {
            path: "/restaurants/:slug",
            name: "restaurants",
            component: Restaurant
        }
    ]
});

export default router;
