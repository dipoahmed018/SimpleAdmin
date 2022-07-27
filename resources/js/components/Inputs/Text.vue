<template>
    <input class="h-16 w-full rounded-md pl-7 text-dark drop-shadow-lg" type="text" placeholder="e.g Hello World" @input="(e) => this.$emit('update:value', e.target.value)">
</template>


<script setup>
</script>
