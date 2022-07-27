<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / HTMLSnippet</h2>
        </div>

        <div class="grid p-3 grid-cols-1 gap-4 drop-shadow-lg">
            <Card v-for="snippet in data" :key="snippet.id" :snippet="snippet"/>
        </div>
    </div>
</template>

<script setup>
import { inject, onMounted } from 'vue';
import Card from './components/Card.vue';

const {data, loadHtmlSnipptes, error} = inject('html-snippet')


onMounted(() => {
    if(!error.value) {
        loadHtmlSnipptes()
    }
})
</script>
