<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / Link</h2>
        </div>
    <div class="form flex flex-col min-h-[400px]">
            <div class="flex flex-col p-3">
                <label for="title" class="label">Title:</label>
            <TextInput name="title" id="title" v-model="form.title" placeholder="Enter Your Title Here" maxLength="200" required/>
        </div>

        <div class="flex flex-col p-3">
            <label for="link" class="label">Link:</label>
            <TextInput name="link" id="link" v-model="form.link" placeholder="Enter Your Link" required/>
        </div>
        
        <div class="flex mt-auto p-3 justify-end">
            <Button class="min-w-[200px]">Save</Button>
        </div>
    </div>
    </div>
</template>

<script setup>
import ButtonLink from '../../../components/Buttons/ButtonLink.vue';
import TextInput from '../../../components/Inputs/Text.vue';
import { reactive } from 'vue';
import TextArea from '../../../components/Inputs/TextArea.vue';
import Button from '../../../components/Buttons/Button.vue';

const form = reactive({
    title: "",
    link: "Hello world",
})

</script>