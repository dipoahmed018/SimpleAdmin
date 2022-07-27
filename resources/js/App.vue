<template>
        <DefaultLayout>
            <PDFDownload>
            <Links>
            <HTMLSnippet>
                <router-view></router-view>
            </HTMLSnippet>
            </Links>
            </PDFDownload>
        </DefaultLayout>
</template>

<script setup>
import DefaultLayout from './layout/DefaultLayout.vue';
import HTMLSnippet from './store/HTMLSnippet.vue';
import Links from './store/Links.vue';
import PDFDownload from './store/PDFDownload.vue';
import 'vue-toast-notification/dist/theme-sugar.css';
import './assets/css/index.css'


</script>
