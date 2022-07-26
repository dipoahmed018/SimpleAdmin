<template>
    <div class="w-full min-h-[200px] code-editor" ref="snippet_box">

    </div>
</template>

<script setup>
import { onMounted, useAttrs } from "vue";
import CodeFlask from "codeflask"
import { ref } from "@vue/reactivity";

    const snippet_box = ref(null);
  

    const props = defineProps({
        code: {
            type: String,
            required: true,
        }
    })

    onMounted(() => {
        let flask;
        flask = new CodeFlask(snippet_box.value, {language: 'html', readonly: true})
        flask.updateCode(props.code)
    })
</script>