import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '../views/Dashboard.vue'
import {useAuthUserStore} from "@/stores";
import AppLayout from "@/components/AppLayout.vue";
import Students from "@/views/Students.vue";
import Settings from "@/views/Settings.vue";
import Login from "@/views/Login.vue";
import NotFound from "@/views/NotFound.vue";
import ResetPassword from "@/views/ResetPassword.vue";
import ResetRequest from "@/views/ResetRequest.vue";

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
                    path: 'dashboard',
                    name: 'dashboard',
                    component: Dashboard
                },
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
            path: '/request-password',
            name: 'requestPassword',
            component: ResetRequest,
            meta: { layout: "auth" },
        },
        {
            path: '/reset-password',
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
})


// const authUserStore = useAuthUserStore();
// const authUserStore.userId = authUserStore.getAuthToken();
router.beforeEach((to, from, next) => {
const authUserStore = useAuthUserStore();
console.log(authUserStore.userId);
    if(to.meta.requiresAuth && !authUserStore.userId){
        next({name: 'login'})
    }else if(to.meta.requiresGuest && authUserStore.userId){
        next({name: 'dashboard'})
    }else{
        next();
    }
})

// const router = createRouter({
//   history: createWebHistory(import.meta.env.BASE_URL),
//   routes: [
//     {
//       path: '/',
//       name: 'app',
//       redirect: '/dashboard'
//     },
//     {
//       path: '/dashboard',
//       name: 'dashboard',
//       // route level code-splitting
//       // this generates a separate chunk (About.[hash].js) for this route
//       // which is lazy-loaded when the route is visited.
//       component: Dashboard
//     }
//   ]
// })

export default router
