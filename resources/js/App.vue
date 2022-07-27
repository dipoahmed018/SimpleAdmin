<template>
        <DefaultLayout> 
            <HTMLSnippet>
                <router-view></router-view>
            </HTMLSnippet>
        </DefaultLayout>
</template>

<script setup>
    import DefaultLayout from './layout/DefaultLayout.vue';
import HTMLSnippet from './store/HTMLSnippet.vue';
    import ('./assets/css/index.css' )


</script>