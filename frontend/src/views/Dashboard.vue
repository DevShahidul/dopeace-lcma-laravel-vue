<template>
    <h2>Dashboard {{test}} </h2>
</template>

<script setup>
import {ref, computed} from "vue";
import {useAuthUserStore} from "@/stores";
import AppLayout from "@/components/AppLayout.vue";
const authStore = useAuthUserStore();
const test = computed(() => authStore.userToken);

</script>

<style scoped>

</style>
