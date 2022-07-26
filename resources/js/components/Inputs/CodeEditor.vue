<template>
    <div class="w-full min-h-[200px] code-editor drop-shadow-lg" ref="edit_box">

    </div>
</template>

<script setup>
import { onMounted, useAttrs } from "vue";
import CodeFlask from "codeflask"
import { ref } from "@vue/reactivity";

    const edit_box = ref(null);
    
    const attrs = useAttrs()
    const emit = defineEmits(['update:modelValue'])

    onMounted(() => {
        let editor = new CodeFlask(edit_box.value, {language: 'html'})
        editor.updateCode(attrs.modelValue)
        editor.onUpdate((code) => {
            emit('update:modelValue', code)
        })
    })
</script>