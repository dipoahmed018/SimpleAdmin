<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / Link</h2>
        </div>
    <div class="form flex flex-col min-h-[400px]">
            <div class="flex flex-col p-3">
                <label for="title" class="label">Title:</label>
            <TextInput name="title" id="title" v-model="form.title" placeholder="Enter Your Title Here" maxLength="200"/>
        </div>

        <div class="flex flex-col p-3">
            <label for="description" class="label">Description:</label>
            <TextArea name="description" id="description" v-model="form.description" placeholder="Enter Your Description"/>
        </div>

        <div class="flex flex-col p-3">
            <label for="snippet" class="label">Snippet:</label>
            <SnippetCard :code="form.snippet" />                
        </div>
        
        <div class="flex mt-auto p-3 justify-end">
            <Button class="min-w-[200px]">Create</Button>
        </div>
    </div>
    </div>
</template>

<script setup>
import TextInput from '../../../components/Inputs/Text.vue';
import { reactive } from 'vue';
import TextArea from '../../../components/Inputs/TextArea.vue';
import Button from '../../../components/Buttons/Button.vue';
import SnippetCard from '../../../components/SnippetCard.vue';

const form = reactive({
    title: "",
    description: "Hello world",
    snippet: "<h1> Hello world </h1>",
})

</script>