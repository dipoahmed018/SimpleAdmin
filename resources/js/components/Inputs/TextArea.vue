<template>
    <textarea class="h-16 w-full drop-shadow-lg rounded-md p-2 text-dark" type="text" @input="(e) => emit('update:value', e.target.value)" placeholder="e.g Hello World">
        {{$attrs.value}}
    </textarea>
</template>


<script setup>
    const emit = defineEmits(['update:value'])
</script>
