
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
                <SidebarLink title="Dashboard" :icon="IconSquares4" path="Dashboard" />
                <SidebarLink title="Manage NGO" :icon="IconBuildingOffice" path="NGO" />
                <SidebarLink title="Manage Students" :icon="IconAcademicCap" path="students" />
                <SidebarLink title="Manage Staff" :icon="IconUserGroup" path="ManageStaff" />
                <SidebarLink title="Settings" :icon="IconSetting" path="settings" />
            </nav>
        </div>
    </div>
</template>

<script setup>
import {defineComponent, ref} from "vue";
import {useSidebar} from "@/hooks/useSidebar";
import MainLogo from "@/components/MainLogo.vue";
import SidebarLink from "@/components/SidebarLinkItem.vue";
import IconPi from "@/components/icons/IconPi.vue";
import IconUserGroup from "@/components/icons/IconUserGroup.vue";
import IconAcademicCap from "@/components/icons/IconAcademicCap.vue";
import IconBuildingOffice from "@/components/icons/IconBuildingOffice.vue";
import IconSetting from "@/components/icons/IconSetting.vue";
import IconSquares4 from "@/components/icons/IconSquares4.vue";
const { isOpen } = useSidebar();
const activeClass = ref(
    "bg-gray-200 border-gray-700"
);
const inactiveClass = ref(
    "text-gray-700 border-transparent hover:text-sky-600"
);

</script>

