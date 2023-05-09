
<template>
    <div class="flex">
        <!-- Backdrop -->
        <div
            :class="isOpen ? 'block' : 'hidden'"
            @click="isOpen = false"
            class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"
        ></div>
        <!-- End Backdrop -->

        <div
            :class="isOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-100 lg:translate-x-0 lg:static lg:inset-0"
        >
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <main-logo class="w-52" />
                </div>
            </div>

            <nav class="mt-10">
                <SidebarLink title="Dashboard" :icon="Squares2X2Icon" path="Dashboard" />
                <SidebarLink title="Manage NGO" :icon="BuildingOfficeIcon" path="NGO" />
                <SidebarLink title="Manage Students" :icon="AcademicCapIcon" path="students" />
                <SidebarLink title="Manage Staff" :icon="UserGroupIcon" path="ManageStaff" />
                <SidebarLink title="Settings" :icon="Cog6ToothIcon" path="settings" />
            </nav>
        </div>
    </div>
</template>

<script setup>
import {defineComponent, ref} from "vue";
import {useSidebar} from "@/hooks/useSidebar";
import MainLogo from "@/components/MainLogo.vue";
import SidebarLink from "@/components/SidebarLinkItem.vue";

import { Squares2X2Icon, BuildingOfficeIcon, Cog6ToothIcon, UserGroupIcon, AcademicCapIcon } from '@heroicons/vue/24/outline'

const { isOpen } = useSidebar();
const activeClass = ref(
    "bg-gray-200 border-gray-700"
);
const inactiveClass = ref(
    "text-gray-700 border-transparent hover:text-sky-600"
);

</script>

