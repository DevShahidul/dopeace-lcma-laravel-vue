<template>
    <h3 class="page-title text-2xl font-bold leading-7 text-gray-700">Staff list</h3>
    <div class=" flex items-center gap-[18px] flex-wrap">
        <div class="flex items-center bg-Light-cyan border-0.5 border-green rounded-xl">
            <SelectOption />
        </div>
        <h4 class="text-gray-secondary">467k Users</h4>
        <div class=" sm:ml-auto">
            <form class="flex items-center relative">
                <input class=" bg-white border-input-w-border border border-secondary rounded-xl px-4 pr-3.5 pl-9 h-12 max-w-[145px] transition focus:outline-none focus:bg-white placeholder:pt-1" type="search" placeholder="Search" aria-label="Search">
                <button class="w-5 absolute left-3 md:left-3 top-1/2 -translate-y-2/4 text-secondary" type="submit">
                    <MagnifyingGlassIcon />
                </button>
            </form>
        </div>
        <div>
            <input type="file" @change="handleFileUpload" />
            <a href="#" class="group flex items-center px-6 h-12 bg-white border-0.5 border-green text-green transition-all duration-500 hover:text-white hover:bg-green rounded-xl">
                <DocumentArrowUpIcon class="w-5 h-5" />
                <span class="text-current text-base leading-5 ">Export</span>
            </a>
        </div>
        <div class="">
            <a href="#" class="group text-white  flex items-center px-4 h-12 bg-green border-0.5 border-green rounded-xl transition-all duration-500 hover:bg-white hover:text-green">
                <PlusIcon />
                <option class="text-base leading-5" value="">Add New User</option>
            </a>
        </div>
    </div>
</template>

<script>
import IconChevronDown from "@/components/icons/IconChevronDown.vue";
import IconPlus from "@/components/icons/IconPlus.vue";
import IconSearch from "@/components/icons/IconSearch.vue";
import SelectOption from "@/components/SelectOption.vue";
import { CheckIcon, ChevronDownIcon, MagnifyingGlassIcon, PlusIcon, DocumentArrowUpIcon } from '@heroicons/vue/24/outline'

export default {
    name: "StaffList",
    components: {SelectOption, IconSearch, IconPlus, IconChevronDown, DocumentArrowUpIcon, PlusIcon, CheckIcon, ChevronDownIcon, MagnifyingGlassIcon},

}
</script>

<style scoped>

</style>
