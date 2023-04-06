import { createPinia } from 'pinia'
import {createApp, markRaw} from 'vue'
import router from './router'

import App from './App.vue'
import './axios';
import './assets/main.css'


import AppLayout from "@/components/AppLayout.vue";
import AuthLayout from "@/components/AuthLayout.vue";

const pinia = createPinia();
const app = createApp(App);
pinia.use(({store}) => {
    store.router = markRaw(router);
});

app.use(router);
app.use(pinia);

app.component('app-layout', AppLayout);
app.component('auth-layout', AuthLayout);
app.mount('#app');
