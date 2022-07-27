<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / HTMLSnippet</h2>
            <ButtonLink class="min-w-[30%] text-title-4" href="/admin/html-snippet/create">Create HTMLSnippet</ButtonLink>
        </div>

        <div class="grid p-3 grid-cols-1 gap-4 drop-shadow-lg">
            <Card v-for="snippet in data" :key="snippet.id" :snippet="snippet" @delete-snippet="deleteHtmlSnippet"/>
        </div>
    </div>
</template>

<script setup>
import { inject, onMounted, watch } from 'vue';
import ButtonLink from '../../../components/Buttons/ButtonLink.vue';
import Card from './components/Card.vue';

const {data, loadHtmlSnipptes, error, deleteHtmlSnippet} = inject('html-snippet')

onMounted(() => {
    if(!error.value) {
        loadHtmlSnipptes()
    }
})
</script>
