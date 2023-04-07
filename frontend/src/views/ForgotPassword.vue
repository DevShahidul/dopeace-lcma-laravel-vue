<template>
    <h1 class="text-center text-2xl">{{ title }}</h1>
    <h5 v-if="leadText">{{leadText}}</h5>
    <div v-if="authUserStore.status" class="flex justify-center mt-4">
        <span class="text-green-600 text-sm">{{ authUserStore.status }}</span>
    </div>
    <form v-else class="mt-4" @submit.prevent="handleForm(email)">
        <label class="block">
            <span class="text-sm text-gray-700">Email</span>
            <input
                type="email"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="email"
            />
        </label>
        <div v-if="authUserStore.errors.email" class="flex">
            <span class="text-red-400 text-sm mt-2">{{ authUserStore.errors.email[0] }}</span>
        </div>
        <div class="mt-4">
            <router-link
                class="block text-sm text-indigo-700 fontme hover:underline"
                to="/login"
            >Remember your password?</router-link
            >
        </div>
        <div class="mt-6">
            <button
                type="submit"
                class="w-full rounded-md px-4 py-2 text-sm text-center text-white bg-primary-500 transition focus:outline-none hover:bg-primary-400 disabled:bg-gray-200 disabled:pointer-events-none"
                :disabled="authUserStore.loading"
            >
                Send request
            </button>
        </div>
    </form>
</template>

<script setup>
import {ref} from "vue";
import {useAuthUserStore} from "@/stores";
const authUserStore = useAuthUserStore();
const title = ref("Request new password");
const leadText = ref(null);
const email = ref("");
const handleForm = (data) => {
    authUserStore.handleForgotPassword(data);
    email.value = "";
}
</script>

<style scoped>

</style>
