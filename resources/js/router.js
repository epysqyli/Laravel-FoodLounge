import Vue from "vue";
import VueRouter from "vue-router";

// Import page of Vue.Router
Vue.use(VueRouter);
import Home from "./views/Home";
import Category from "./views/Category";
import Restaurant from "./views/Restaurant";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "Home",
            component: Home
        },
        {
            path: "/category/:id",
            name: "category",
            component: Category
        },
        {
            path: "/restaurant/:slug",
            name: "restaurant",
            component: Restaurant
        },
        {
            path: "/test",
            name: "test",
            component: () => import("./views/Test")
        }
    ]
});

export default router;
