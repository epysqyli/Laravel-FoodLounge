import Vue from "vue";
import VueRouter from "vue-router";

// Importation page of Vue.Router
import Home from "./pages/Home";
import Category from "./pages/Category";
Vue.use(VueRouter);

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
        }
    ]
});

export default router;
