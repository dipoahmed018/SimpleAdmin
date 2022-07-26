<template>
        <DefaultLayout> 
               <router-view></router-view>
        </DefaultLayout>
</template>

<script setup>
    import DefaultLayout from './layout/DefaultLayout.vue';
    import ('./assets/css/index.css' )
    import ('./assets/css/prism.css')


</script>