<template>
    <router-link v-if="this.$attrs.href" class="bg-tints-3 rounded-lg block py-3 text-white text-center" :to="this.$attrs.href"><slot /></router-link>
</template>

<script setup></script>