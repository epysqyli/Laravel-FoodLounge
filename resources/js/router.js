import Vue from "vue";
import VueRouter from "vue-router";
import Home from './views/Home';
import Restaurant from './views/Restaurant';
import Checkout from './views/Checkout';
import PaymentResult from './views/PaymentResult';

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
        }
    ]
});

export default router;
