<template>
    <div class="snippet-card flex flex-col bg-tints-3 rounded-lg w-1/2 min-h-[400px] p-2 gap-2">
        <h1 class="title text-title-1 text-white my-2">sdf</h1>
        <p class="text-description-1 m-1 text-tints-1">
            sdfsdf
        </p>
        <SnippetCard code="<h1>Hello Wolrd</h1>" />
        <div class="flex gap-2 justify-center">
            <Button class="bg-tints-2 text-dark w-[50%] py-1 flex justify-center items-center gap-2 h-11" @click="(e) => copySnippet(e, '<h1>eeee</h1>')">
                Copy Snippet <SuccessIcon width="16px" height="16px" v-if="copied" />
            </Button>
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

const copySnippet = (e, value) => {
    navigator.clipboard.writeText(value)
    copied.value = true
}
</script>