<template>
    <div class="flex items-center justify-center h-screen px-6 bg-gray-200">
        <div class="w-full max-w-sm p-6 space-y-5 bg-white rounded-md shadow-md">
                <div class="flex items-center justify-center">
                    <main-logo class="w-48" />
                </div>
                <slot></slot>
        </div>
    </div>
</template>

<script setup>
import MainLogo from "@/components/MainLogo.vue";
</script>

<style scoped>
</style>
