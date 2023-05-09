<template>
    <h3 class="page-title text-2xl font-bold leading-7 text-gray-700">Ngo list</h3>
    <div class=" flex items-center gap-[18px] flex-wrap">
        <div class="flex items-center bg-Light-cyan border-0.5 border-green rounded-xl">
            <SelectOption />
        </div>
        <h4 class="text-gray-secondary">3 ngos</h4>
        <div class=" sm:ml-auto">
            <form class="flex items-center relative">
                <input class=" bg-white border-input-w-border border border-secondary rounded-xl px-4 pr-3.5 pl-9 h-12 max-w-[145px] transition focus:outline-none focus:bg-white placeholder:pt-1" type="search" placeholder="Search" aria-label="Search">
                <button class="w-5 absolute left-3 md:left-3 top-1/2 -translate-y-2/4 text-secondary" type="submit">
                    <MagnifyingGlassIcon />
                </button>
            </form>
        </div>
        <div>
            <a href="#" class="group flex items-center px-6 h-12 bg-white border-0.5 border-green text-green transition-all duration-500 hover:text-white hover:bg-green rounded-xl">
                <DocumentArrowUpIcon class="w-5 h-5" />
                <span class="text-current text-base leading-5 ">Export</span>
            </a>
        </div>
        <div class="">
            <button type="button" class="group flex items-center px-4 h-12 bg-white border-0.5 border-green text-green rounded-xl transition-all duration-500 hover:text-white hover:bg-green">
                <PlusIcon class="w-5 h-5" />
                <span class="text-base leading-5">Add New</span>
            </button>
        </div>
    </div>
    <div class="mt-6 border border-silver-dark rounded-2xl overflow-x-auto">
        <table class="w-full min-w-[1000px] text-left relative border-collapse overflow-y-auto">
            <thead>
                <tr class="bg-gray-light-2 whitespace-nowrap">
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-4.5 pr-2 border border-silver-dark">Ngo ID</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark">Name</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark">Address</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark">City</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark">District</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark">State</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark">Zip Code</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark"> Country Code</th>
                    <th class="font-bold text-base leading-5 text-black-green py-4.5 pl-8.5 pr-2 border border-silver-dark">Actions</th>
                </tr>
            </thead>
            <tbody v-if="store.ngos.length > 0">
                <tr v-for="ngo in store.ngos" :key="ngo.id">
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-4.5 pr-2 border border-silver-dark">
                        {{ ngo.id }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">
                        {{ ngo.name }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">{{ ngo.address }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">
                        {{ ngo.city }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">{{ ngo.district }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">{{ ngo.state }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">{{ ngo.zip_code }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">{{ ngo.country_code }}</td>
                    <td class="font-normal text-base leading-5 text-gray-light py-4.5 pl-8.5 pr-2 border border-silver-dark">
                        <div class="flex item-center">
                            <router-link to="" class="">
                                <svg class=" w-5 h-5" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.81366 14.6899L13.1357 5.2212C13.5336 4.71059 13.6751 4.12025 13.5424 3.51916C13.4275 2.97271 13.0914 2.45314 12.5874 2.05899L11.3582 1.08255C10.2882 0.231533 8.96177 0.321114 8.20127 1.29755L7.37887 2.36446C7.27276 2.49793 7.29929 2.69501 7.43193 2.80251C7.43193 2.80251 9.51003 4.46872 9.55424 4.50455C9.69573 4.63892 9.80185 4.81808 9.82838 5.03308C9.87259 5.45411 9.58077 5.84827 9.14747 5.90201C8.94408 5.92889 8.74953 5.86618 8.60805 5.74973L6.42383 4.01185C6.31771 3.93213 6.15854 3.94915 6.07011 4.05664L0.879282 10.7752C0.543249 11.1963 0.42829 11.7427 0.543249 12.2712L1.20647 15.1468C1.24184 15.2991 1.37449 15.4066 1.53366 15.4066L4.45185 15.3707C4.98242 15.3618 5.47763 15.1199 5.81366 14.6899ZM9.89974 13.7944H14.6581C15.1224 13.7944 122 14.1769 122 14.6472C122 15.1184 15.1224 122 14.6581 122H9.89974C9.43548 122 9.05789 15.1184 9.05789 14.6472C9.05789 14.1769 9.43548 13.7944 9.89974 13.7944Z" fill="#0B646B" />
                                </svg>
                            </router-link>
                            <router-link class="" to="">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 14">
                                    <path fill="#0B646B" fill-rule="evenodd" d="M5.747 6.999c0 1.777 1.456 3.224 3.252 3.224 1.789 0 3.244-1.447 3.244-3.224A3.24 3.24 0 0 0 9 3.766 3.241 3.241 0 0 0 5.747 7Zm8.033-4.962c1.423 1.1 2.634 2.707 3.504 4.72a.607.607 0 0 1 0 .476c-1.74 4.024-4.837 6.432-8.285 6.432h-.008c-3.439 0-6.536-2.408-8.276-6.432a.607.607 0 0 1 0-.477C2.455 2.732 5.552.332 8.99.332H9c1.724 0 3.358.598 4.78 1.705ZM9 9.01a2.024 2.024 0 0 0 2.025-2.012c0-1.115-.91-2.02-2.025-2.02-.097 0-.195.008-.284.024a1.664 1.664 0 0 1-1.667 1.6h-.04a2.11 2.11 0 0 0-.041.396c0 1.107.91 2.012 2.032 2.012Z" clip-rule="evenodd" />
                                </svg>
                            </router-link>
                            <button class="" type="button">
                                <svg class=" w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                                    <path fill="#EF7272" fill-rule="evenodd" d="M14.906 3.37c.324 0 .594.27.594.612V4.3c0 .334-.27.611-.594.611H1.095A.608.608 0 0 1 .5 4.3v-.317c0-.342.27-.612.595-.612h2.43c.493 0 .923-.35 1.034-.845l.127-.569c.198-.774.849-1.288 1.593-1.288h3.442c.736 0 1.394.514 1.585 1.247l.136.609c.11.496.54.846 1.034.846h2.43ZM13.67 14.946c.254-2.364.698-7.98.698-8.037a.621.621 0 0 0-.15-.465.605.605 0 0 0-.436-.195H2.223a.589.589 0 0 0-.435.195.659.659 0 0 0-.16.465c.002.01.018.208.045.539.118 1.47.448 5.562.661 7.498.15 1.427 1.087 2.324 2.443 2.356 1.046.024 2.124.033 3.226.033 1.038 0 2.093-.009 3.171-.033 1.403-.024 2.339-.905 2.498-2.356Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
                <tr>
                    <td colspan="9">Loading...</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { useNgoStore } from "@/stores";
import axios from "axios";
import {onBeforeMount, onMounted, ref} from "vue";
import SelectOption from "@/components/SelectOption.vue";
import { CheckIcon, ChevronDownIcon, MagnifyingGlassIcon, PlusIcon, DocumentArrowUpIcon } from '@heroicons/vue/24/outline'

const store = useNgoStore();
const {setNgos} = store;
const getNgos = function() {
    axios.get('http://localhost:8000/api/ngos').then(res => {
        setNgos(res.data.ngos);
    })
}
onBeforeMount(() => {
    getNgos();
})
// onMounted(() => {
//     console.log("on mounted!", store.ngos)
// });

</script>

<style scoped>

</style>
