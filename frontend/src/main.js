import { createApp } from 'vue'
import { createPinia } from 'pinia'
import './axios';

import App from './App.vue'
import router from './router'

import './assets/main.css'
import AppLayout from "@/components/AppLayout.vue";
import AuthLayout from "@/components/AuthLayout.vue";

const app = createApp(App);
app.component('app-layout', AppLayout);
app.component('auth-layout', AuthLayout);
app.use(createPinia());
app.use(router);

app.mount('#app');
