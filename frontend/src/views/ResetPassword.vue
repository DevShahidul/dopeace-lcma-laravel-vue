<template>
    <h1 class="text-center text-2xl">{{ title }}</h1>
    <h5 v-if="leadText">{{leadText}}</h5>
    <form novalidate class="mt-4" @submit.prevent="handleForm(form)">
        <label class="block mt-3">
            <span class="text-sm text-gray-700">New Password</span>
            <input
                type="password"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="form.password"
                name="password"
            />
        </label>
        <label class="block mt-3">
            <span class="text-sm text-gray-700">Confirm Password</span>
            <input
                type="password"
                class="block w-full mt-1 border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                v-model="form.password_confirmation"
                name="password_confirmation"
            />
        </label>
        <div v-if="authUserStore.errors.password" class="flex">
            <span class="text-red-400 text-sm mt-2">{{ authUserStore.errors.password[0] }}</span>
        </div>
        <div class="mt-4">
            <router-link
                class="block text-sm text-indigo-700 fontme hover:underline"
                :class="{'disabled:bg-gray-400': authUserStore.loading}"
                to="/login"
            >Go back to login</router-link
            >
        </div>
        <div class="mt-6">
            <button
                type="submit"
                class="w-full rounded-md px-4 py-2 text-sm text-center text-white bg-primary-500 transition focus:outline-none hover:bg-primary-400 disabled:bg-gray-200 disabled:pointer-events-none"
                :disabled="authUserStore.loading"
            >
                Reset now
            </button>
        </div>
    </form>
</template>

<script setup>
import {ref} from "vue";
import {useRoute} from "vue-router";
import {useAuthUserStore} from "@/stores";

const route = useRoute();
const authUserStore = useAuthUserStore();

const title = ref("Reset your password");
const leadText = ref(null);

const form = ref({
    password: "",
    password_confirmation: "",
    email: route.query.email,
    token: route.params.token,
})

const handleForm = (data) => {
    authUserStore.handleResetPassword(data);
    form.value.password = "";
    form.value.password_confirmation = "";
}

</script>

<style scoped>

</style>
