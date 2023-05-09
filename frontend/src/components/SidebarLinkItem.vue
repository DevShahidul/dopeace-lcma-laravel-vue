<template>
    <router-link
        class="flex items-center px-6 py-2 mt-4 duration-200 border-l-4"
        :class="[$route.name === path ? activeClass : inactiveClass]"
        :to="{name: path}"
    >
        <component class="w-6 h-6" :is="icon"></component>
        <span class="mx-4">{{ title }}</span>
    </router-link>
</template>

<script setup>
import {ref} from "vue";

const activeClass = ref(
    "bg-gray-200 border-gray-700"
);
const inactiveClass = ref(
    "text-gray-700 border-transparent hover:text-sky-600"
);

const {path, icon, title} = defineProps({
    title: {
        type: String,
        required: true,
    },
    path: {
        type: String,
        required: true,
        default: 'dashboard'
    },
    icon: {
        type: Object,
        required: true
    }
})

</script>

