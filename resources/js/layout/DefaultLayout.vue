<template>
  <div class="default-layout px-3 pt-3 grid grid-cols-12 gap-4">
    <nav class="flex bg-shade-1 h-16 items-center gap-8 px-10 col-span-full">
      <router-link class="md:text-title-2 xl:text-title-1 text-dark" to="/">Home</router-link>
      <router-link class="md:text-title-2 xl:text-title-1 text-dark" to="/admin">Admin</router-link>
    </nav>

  <div class="sidebar w-full min-h-[500px] bg-shade-2 sidebar rounded-lg col-start-1 col-end-4 sticky flex flex-col gap-1 py-4">
    <div v-for="(link, index) in links" :key="index">
      <router-link v-if="link.appendToSidebar" :to="link.path" class="bg-shade-3 p-2 flex mb-1 text-white" :class="{'underline': link.path == route.path}"> {{link.label || link.path}}</router-link>
    </div>
  </div>
  <div class="content col-start-4 col-end-13 bg-shade-1 min-h-[500px] rounded-lg">
    <slot></slot>
  </div>
</div>
</template>

<script setup>
import { computed } from '@vue/reactivity';
import { useRoute } from 'vue-router';
import HomeRoutes from '../routes/Home.js'
import AdminRoutes from '../routes/Admin.js'

const route = useRoute()

const links = computed(() => {
    if(route.fullPath.startsWith('/admin')) {
      return AdminRoutes
    }

    if(route.fullPath.startsWith('/')) {
      return HomeRoutes
    }
    return []
  })
</script>