<template>
<pre contenteditable="true" @keyup="e => code = e.target.innerText">
    <code class="language-markup w-full min-h-[200px]" v-html="code"></code>
</pre>
</template>

<script setup>
import { useAttrs } from "vue";
import Prismjs from "prismjs"
import { computed, ref } from "@vue/reactivity";

    const props = defineProps({
        code: {
            type: String,
            required: true,
        }
    })
    const t = ref("<h1>h3llo </h1>")
    const attrs = useAttrs()

    const code = computed({
        get: () => {
            return Prismjs.highlight(t.value, Prismjs.languages.html, 'html')
        },
        set: (c) => {
            t.value = c
        }
    })
</script>