<script setup>
import {computed, defineComponent} from "vue";
import { RouterView, useRouter } from 'vue-router';

const defaultLayout = "app";
const { currentRoute } = useRouter();
const layout = computed(
    () => `${currentRoute.value.meta.layout || defaultLayout}-layout`
)

</script>

<template>
  <component :is="layout">
      <RouterView />
  </component>
</template>
