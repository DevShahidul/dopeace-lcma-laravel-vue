<template>
    <h2>Dashboard {{test}} </h2>
</template>

<script setup>
import {ref, computed} from "vue";
import {useAuthUserStore} from "@/stores";
const authStore = useAuthUserStore();
const test = computed(() => authStore?.user?.name);

</script>

<style scoped>

</style>
