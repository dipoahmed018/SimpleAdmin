<template>
    <textarea class="h-16 w-full drop-shadow-lg rounded-md p-2 text-dark" type="text" @input="(e) => emit('update:modelValue', e.target.value)" v-model="this.$attrs.modelValue" placeholder="e.g Hello World">
    </textarea>
</template>


<script setup>
    const emit = defineEmits(['update:modelValue'])
</script>