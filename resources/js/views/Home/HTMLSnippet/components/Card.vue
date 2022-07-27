<template>
    <div class="snippet-card flex flex-col bg-tints-3 rounded-lg w-full min-h-[400px] p-2 gap-2">
        <h1 class="title text-title-3 text-white my-2">{{snippet.title}}</h1>
        <p class="text-description-1 m-1 text-tints-1">
            {{snippet.description}}
        </p>
        <SnippetCard :code="snippet.snippet" />
        <div class="flex gap-2 justify-center">
            <Button class="bg-tints-2 text-dark w-[50%] h-11 py-1 flex justify-center items-center gap-2" @click="(e) => copySnippet(e, snippet.snippet)">
                Copy Snippet <SuccessIcon width="16px" height="16px" v-if="copied" />
            </Button>
            <!-- <ButtonLink :href="`/admin/html-snippet/edit/${snippet.id}`" class="bg-dark-A400 w-[50%]">
                Edit
            </ButtonLink> -->
        </div>
    </div>
</template>

<script setup>
import SnippetCard from '../../../../components/SnippetCard.vue';
import Button from '../../../../components/Buttons/Button.vue';
import ButtonLink from '../../../../components/Buttons/ButtonLink.vue';
import SuccessIcon from '../../../../components/Icons/Success.vue';
import { ref } from 'vue';
const copied = ref(false)

defineProps({
    snippet : {
        type: Object,
        required: true,
    }
})

const copySnippet = (e, value) => {
    navigator.clipboard.writeText(value)
    copied.value = true
}
</script>
