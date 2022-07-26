<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / PDF</h2>
        </div>
    <div class="form flex flex-col min-h-[400px]">
            <div class="flex flex-col p-3">
                <label for="title" class="label">Title:</label>
            <TextInput name="title" id="title" v-model="form.title" placeholder="Enter Your Title Here" maxLength="200" required/>
        </div>

        <div class="flex flex-col p-3 relative">
            <label for="pdf" class="flex flex-col bg-white min-h-[200px] items-center justify-center rounded-md" @drop="(e) => form.file = e.dataTransfare.files[0]">
                <PdfDownloadIcon class="w-[100px] h-[100px]"/>
                <h1 class="text-title-4 text-dark-A400">
                    {{form.file ? form.file.name : "Drag and drop or click here to upload your pdf file"}}
                </h1>
            </label>
            <input class="w-0 h-0 absolute" type="file" name="file" id="pdf" accept=".pdf" @change="(e) => form.file = e.target.files[0]" required>
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
import PdfDownloadIcon from '../../../components/Icons/PdfDownload.vue';

const form = reactive({
    title: "",
    file: null,
})


</script>