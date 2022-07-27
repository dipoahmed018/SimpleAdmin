<template>
    <div class="w-full min-h-[200px] code-editor drop-shadow-lg" ref="edit_box">

    </div>
</template>

<script setup>
import { onMounted, onUpdated, useAttrs } from "vue";
import CodeFlask from "codeflask"
import { ref } from "@vue/reactivity";

    const edit_box = ref(null);

    const attrs = useAttrs()
    const emit = defineEmits(['update:value'])
    let editor;

    onMounted(() => {
        editor = new CodeFlask(edit_box.value, {language: 'html'})
        editor.onUpdate((code) => {
            emit('update:value', code)
        })

    })

    onUpdated(() => {
        editor.updateCode(attrs.value)
    })
</script>
