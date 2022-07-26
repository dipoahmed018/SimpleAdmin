<template>
    <input class="h-16 w-full drop-shadow-md rounded-md pl-7 text-dark" type="text" @input="(e) => emit('update:modelValue', e.target.value)" placeholder="e.g Hello World">
</template>


<script setup>
    const emit = defineEmits(['update:modelValue'])
</script>