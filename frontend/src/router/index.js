import { createRouter, createWebHistory } from 'vue-router'

// Import components
import NotFound from "@/views/NotFound.vue";
import Login from "@/views/Login.vue";
import ResetPassword from "@/views/ResetPassword.vue";
import ForgotPassword from "@/views/ForgotPassword.vue";

import Dashboard from '@/views/Dashboard.vue'
import Students from "@/views/Students.vue";
import Settings from "@/views/Settings.vue";
import StaffList from "@/views/staff/StaffList.vue";
import NgoList from "@/views/ngo/NgoList.vue";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'app',
            redirect: '/dashboard',
            meta: {
                requiresAuth: true,
            },
            children: [
                {
                  name: 'Dashboard',
                  path: '/dashboard',
                  component: Dashboard
                },
                {
                    path: 'students',
                    name: 'students',
                    component: Students
                },
                {
                    path: 'manage-ngo',
                    name: 'NGO',
                    component: NgoList
                },
                {
                    path: 'manage-staff',
                    name: 'ManageStaff',
                    component: StaffList
                },
                {
                    path: 'settings',
                    name: 'settings',
                    component: Settings
                },
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
    ]
});

// const pinia = createPinia();

router.beforeEach((to, from, next) => {
    // const authUser = useAuthUserStore();
    const user = localStorage.getItem('user');

    console.log(to.meta)

    if(to.meta.requiresAuth && !user){
        next({name: 'login'})
    }else if(to.meta.requiresGuest && user.name){
        next({name: 'dashboard'})
    }else{
        next();
    }
})


export default router
