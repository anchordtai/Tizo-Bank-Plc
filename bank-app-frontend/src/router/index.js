import Vue from "vue";
import VueRouter from "vue-router";
import Register from "../components/RegisterForm.vue";
import Login from "../components/LoginForm.vue";
import Dashboard from "../components/DashboardPage.vue";

Vue.use(VueRouter);

const routes = [
    { path: "/register", component: Register },
    { path: "/login", component: Login },
    { path: "/dashboard", component: Dashboard },
];

const router = new VueRouter({
    mode: "history",
    routes,
});

export default router;
