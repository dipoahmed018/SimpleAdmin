<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / Link</h2>
            <ButtonLink class="min-w-[30%] text-title-4" href="/admin/link/create">Create Link</ButtonLink>
        </div>

        <div class="flex p-3">
            <div class="snippet-card flex flex-col bg-shade-3 rounded-lg w-full min-h-[100px] p-2 gap-2">
                <h1 class="title text-title-4 text-white my-2">sdf</h1>
                <div class="link bg-white p-2 rounded-md flex gap-2">
                    <span class="text-rose">Link:</span>
                    <span>
                        <a href="https://www.figma.com/file/6BalQOuRZDYWd3cT4zYGNY/Untitled?node-id=3%3A436" class="text-dark-A400">https://www.figma.com/file/6BalQOuRZDYWd3cT4zYGNY/Untitled?node-id=3%3A436</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Button from '../../../components/Buttons/Button.vue';
import ButtonLink from '../../../components/Buttons/ButtonLink.vue';
import SnippetCard from '../../../components/SnippetCard.vue';

</script>