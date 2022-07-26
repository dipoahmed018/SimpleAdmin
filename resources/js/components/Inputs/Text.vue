<template>
    <input class="h-16 w-full rounded-md pl-7 text-dark drop-shadow-lg" type="text" @input="(e) => emit('update:modelValue', e.target.value)" placeholder="e.g Hello World">
</template>


<script setup>
    const emit = defineEmits(['update:modelValue'])
</script>