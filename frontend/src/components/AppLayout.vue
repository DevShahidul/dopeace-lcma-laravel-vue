<template>
    <div class="flex h-screen bg-gray-50 font-roboto">
        <Sidebar />

        <div class="flex-1 flex flex-col overflow-hidden">
            <Header />

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50">
                <div class="container mx-auto px-6 py-8">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>

<script setup>

import Sidebar from "@/components/Sidebar.vue";
import Header from "@/components/Header.vue";
</script>

<style scoped>

</style>
