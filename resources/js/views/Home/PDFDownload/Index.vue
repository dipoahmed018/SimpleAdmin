<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / HTMLSnippet</h2>
            <ButtonLink class="min-w-[30%] text-title-4" href="/admin/html-snippet/create">Create HTMLSnippet</ButtonLink>
        </div>

        <div class="flex p-3">
            <div class="snippet-card flex flex-col bg-tints-3 rounded-lg w-1/2 min-h-[450px] p-2 gap-2">
                <h1 class="title text-title-1 text-white my-2">sdf</h1>
                <p class="text-description-1 m-1 text-tints-1">
                        sdfsdf
                </p>
                <SnippetCard>hell</SnippetCard>
                <Button class="bg-tints-2 text-dark rounded-lg w-[50%] py-1 self-center">Copy Snippet</Button>
            </div>
        </div>
    </div>
</template>

<script setup>
import Button from '../../../components/Buttons/Button.vue';
import ButtonLink from '../../../components/Buttons/ButtonLink.vue';
import SnippetCard from '../../../components/SnippetCard.vue';

</script>