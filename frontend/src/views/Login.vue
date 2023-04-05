<template>
    <h1 class="text-center text-2xl">{{ title }}</h1>
    <h5 v-if="leadText">{{leadText}}</h5>
    <form class="mt-4" @submit.prevent="handleLogin">
        <label class="block">
            <span class="text-sm text-gray-700">Email</span>
            <input
                type="email"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="form.email"
            />
        </label>

        <label class="block mt-3">
            <span class="text-sm text-gray-700">Password</span>
            <input
                type="password"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="form.password"
            />
        </label>

        <div class="flex items-center justify-between mt-4">
            <div>
                <label class="inline-flex items-center">
                    <input type="checkbox" class="text-indigo-600 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500" />
                    <span class="mx-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div>
                <router-link
                    class="block text-sm text-indigo-700 fontme hover:underline"
                    to="/request-password"
                >Forgot your password?</router-link
                >
            </div>
        </div>

        <div class="mt-6">
            <button
                type="submit"
                class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md focus:outline-none hover:bg-indigo-500"
            >
                Sign in
            </button>
        </div>
    </form>
</template>

<script setup>
import {ref} from "vue";
import axios from "axios";
import {useRouter} from "vue-router";
const router = useRouter();

const title = ref("login");
const leadText = ref(null);

// Handle form input
const form = ref({
    email: '',
    password: ''
});

// Handle login form
const handleLogin = async () => {
    await axios.post('/login', {
        email: form.value.email,
        password: form.value.password
    });
    router.push('/dashboard');
}
</script>

<style scoped>

</style>
