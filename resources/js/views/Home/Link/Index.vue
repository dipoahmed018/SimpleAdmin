<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / Link</h2>
        </div>

        <div class="flex p-3">
            <div class="flex flex-col bg-shade-3 rounded-lg w-full p-2 gap-2">
                <Card v-for="link in data" :link="link" :key="link.id"/>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted, inject } from 'vue';
import ButtonLink from '../../../components/Buttons/ButtonLink.vue';
import Card from './components/Card.vue';

const {data, loadLinks, error} = inject('links')


onMounted(() => {
    if(!error.value) {
        loadLinks()
    }
})
</script>
