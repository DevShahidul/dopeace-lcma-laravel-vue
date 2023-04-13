<template>
    <h1 class="text-center text-2xl">{{ title }}</h1>
    <h5 v-if="leadText">{{leadText}}</h5>
    <form novalidate class="mt-4" @submit.prevent="authUserStore.handleLogin(form)">
        <label class="block">
            <span class="text-sm text-gray-700">Email</span>
            <input
                type="email"
                name="emil"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="form.email"
                required
            />
        </label>
        <div v-if="authUserStore?.errors?.email" class="flex">
            <span class="text-red-400 text-sm mt-2">{{ authUserStore.errors.email[0] }}</span>
        </div>

        <label class="block mt-3">
            <span class="text-sm text-gray-700">Password</span>
            <input
                type="password"
                name="password"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="form.password"
                required
            />
        </label>
        <div v-if="authUserStore?.errors?.password" class="flex">
            <span class="text-red-400 text-sm mt-2">{{ authUserStore.errors.password[0] }}</span>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div>
                <router-link
                    class="block text-sm text-indigo-700 fontme hover:underline"
                    to="/forgot-password"
                >Forgot your password?</router-link
                >
            </div>
        </div>

        <div class="mt-6">
            <button
                type="submit"
                class="w-full rounded-md px-4 py-2 text-sm text-center text-white bg-primary-500 transition focus:outline-none hover:bg-primary-400 disabled:bg-gray-200 disabled:pointer-events-none"
                :disabled="authUserStore.loading"
            >
                Sign in
            </button>
        </div>
    </form>
</template>

<script setup>
import {ref} from "vue";
import {useAuthUserStore} from "@/stores";
const authUserStore = useAuthUserStore();

const form = ref({
    email: '',
    password: ''
});

const title = ref("login");
const leadText = ref(null);
</script>

<style scoped>

</style>
