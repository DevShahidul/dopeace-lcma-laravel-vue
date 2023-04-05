<template>
    <h1 class="text-center text-2xl">{{ title }}</h1>
    <h5 v-if="leadText">{{leadText}}</h5>
    <form class="mt-4" @submit.prevent="requestPassword">
        <label class="block">
            <span class="text-sm text-gray-700">Email</span>
            <input
                type="email"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="email"
            />
        </label>
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
                class="w-full px-4 py-2 capitalize text-sm text-center text-white bg-indigo-600 rounded-md focus:outline-none hover:bg-indigo-500"
            >
                Send request
            </button>
        </div>
    </form>
</template>

<script setup>
import {ref} from "vue";

const title = ref("Request new password");
const leadText = ref(null);
const email = ref("");
const requestPassword = () => {
    const enteredEmail = email.value;
    console.log('Entered Email: ', enteredEmail);
}
</script>

<style scoped>

</style>
