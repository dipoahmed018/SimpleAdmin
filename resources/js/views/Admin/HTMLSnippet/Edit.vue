<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / Html Snippet / Edit</h2>
        </div>
    <div class="form flex flex-col min-h-[400px]">
            <div class="flex flex-col p-3">
                <label for="title" class="label">Title:</label>
            <TextInput name="title" id="title" v-model:value="form.title" @value="(title) => form.title = title" placeholder="Enter Your Title Here" maxLength="200"/>
        </div>

        <div class="flex flex-col p-3">
            <label for="description" class="label">Description:</label>
            <TextArea name="description" id="description" v-model:value="form.description" @update:value="(description) =>form.description = description" placeholder="Enter Your Description"/>
        </div>

        <div class="flex flex-col p-3">
            <label for="snippet" class="label">Snippet:</label>
            <CodeEditor v-model:value="form.snippet" @update:value="(code) => form.snippet = code"/>
        </div>

        <div class="flex mt-auto p-3 justify-end">
            <Button class="min-w-[200px] bg-tints-3 text-white drop-shadow-lg" @click="updateHtmlSnippet(form, snippet.id)">Save</Button>
        </div>
    </div>
    </div>
</template>

<script setup>
import TextInput from '../../../components/Inputs/Text.vue';
import { inject, onMounted, reactive, ref, watch } from 'vue';
import TextArea from '../../../components/Inputs/TextArea.vue';
import Button from '../../../components/Buttons/Button.vue';
import CodeEditor from '../../../components/Inputs/CodeEditor.vue';
const snippet = ref(undefined)
const form = reactive({
    title: snippet.value?.title || "",
    description: snippet.value?.description || "",
    snippet: snippet.value?.snippet ||"",
})

const {getHtmlSnippet, updateHtmlSnippet} = inject('html-snippet')

onMounted(() => {
    const id = location.pathname.match(/\d+$/)
    getHtmlSnippet(id).then((res) => {
        snippet.value = res
        form.title = res.title
        form.description = res.description
        form.snippet = res.snippet
    })

})
</script>
