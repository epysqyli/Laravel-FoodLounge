import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./views/Home";
import Restaurant from "./views/Restaurant";
import Checkout from "./views/Checkout";
import Categories from "./views/Categories";
import PaymentResult from "./views/PaymentResult";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "",
            name: "home",
            component: Home,

            children: [
                {
                    name: "categories",
                    path: "/categories/:names",
                    component: Categories,
                },
            ],
        },
        {
            path: "/restaurants/:slug",
            name: "restaurants",
            component: Restaurant,
        },
        {
            path: "/checkout",
            name: "checkout",
            component: Checkout,
        },
        {
            path: "/payment-result",
            name: "payment-result",
            component: PaymentResult,
        },
        {
            path: "/chart-test",
            name: "chart-test",
            component: () => import("./views/chartTest"),
        },
    ],
});

export default router;
