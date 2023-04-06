import { createRouter, createWebHistory } from 'vue-router'
import {useAuthUserStore} from "@/stores";
import {createPinia} from "pinia";

// Import components
import NotFound from "@/views/NotFound.vue";
import Login from "@/views/Login.vue";
import ResetPassword from "@/views/ResetPassword.vue";
import ForgotPassword from "@/views/ForgotPassword.vue";

import Dashboard from '@/views/Dashboard.vue'
import Students from "@/views/Students.vue";
import Settings from "@/views/Settings.vue";

const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: Dashboard,
        meta: {
            requiresAuth: true,
        },
        children: [
            {
                path: 'students',
                name: 'students',
                component: Students
            },
            {
                path: 'settings',
                name: 'settings',
                component: Settings
            }
        ]
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: { layout: "auth" },
    },
    {
        path: '/forgot-password',
        name: 'forgotPassword',
        component: ForgotPassword,
        meta: { layout: "auth" },
    },
    {
        path: '/password-reset/:token',
        name: 'resetPassword',
        component: ResetPassword,
        meta: { layout: "auth" },
    },
    {
        path: '/:pathMatch(.*)',
        name: 'notfound',
        component: NotFound
    }
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
});

// const pinia = createPinia();

router.beforeEach((to, from, next) => {
    // const authUser = useAuthUserStore();
    const user = localStorage.getItem('user');
    console.log('User: ', user);
    if(to.meta.requiresAuth && !user){
        next({name: 'login'})
    }else if(to.meta.requiresGuest && user){
        next({name: 'dashboard'})
    }else{
        next();
    }
})


export default router
