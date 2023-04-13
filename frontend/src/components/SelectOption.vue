<template>
    <Listbox as="div" v-model="selected">
        <div class="relative">
            <ListboxButton class="relative w-full h-12 cursor-default rounded-xl bg-primary-100 py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-primary focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6">
                <span class="flex items-center">
                  {{ selected.value }}
                </span>
                <span class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                  <ChevronDownIcon class="h-5 w-5" aria-hidden="true" />
                </span>
            </ListboxButton>

            <transition leave-active-class="transition ease-in duration-100" leave-from-class="opacity-100" leave-to-class="opacity-0">
                <ListboxOptions class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                    <ListboxOption as="template" v-for="option in options" :key="option.id" :value="option" v-slot="{ active, selected }">
                        <li :class="[active ? 'bg-indigo-600 text-white' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                            <div class="flex items-center">
                                <span :class="[selected ? 'font-semibold' : 'font-normal', 'block truncate']">{{ option.value }}</span>
                            </div>

                            <span v-if="selected" :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                <CheckIcon class="h-5 w-5" aria-hidden="true" />
              </span>
                        </li>
                    </ListboxOption>
                </ListboxOptions>
            </transition>
        </div>
    </Listbox>
</template>

<script setup>
import { ref } from 'vue'
import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions } from '@headlessui/vue'
import { CheckIcon, ChevronDownIcon } from '@heroicons/vue/20/solid'

const options = [
    {
        id: 1,
        value: 'Wade Cooper'
    },
    {
        id: 2,
        value: 'Arlene Mccoy'
    },
    {
        id: 3,
        value: 'Arlene Mccoy'
    },
]

const selected = ref(options[2])
</script>
