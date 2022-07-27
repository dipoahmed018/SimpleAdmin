<template>
 <slot />
</template>
<script setup>
import axios from 'axios';
import { onMounted, provide, ref } from 'vue';

    const data = ref([])
    const url = ref('/api/html-snippet')
    const error = ref(undefined)
    const loaded = ref(false)

    const loadHtmlSnipptes = () => {
        if(url.value) {
            axios.get(url.value, {headers: {
                'accept': 'application/json'
            }})
            .then(res => {
                data.value.push(...res.data.data)
                url.value = res.data.next_page_url
            })
            .catch(err => error.value = err)
        }
    }

    const getHtmlSnippet = async (id) => {
        try {
            const res = await axios.get(`/api/html-snippet/${id}`, {headers: {
                'accept': 'application/json'
            }})
            return res.data
        } catch (error) {
            return error
        }
    }

    const createHtmlSnippet = async (data) => {
        try {
            const res = await axios.post('/api/html-snippet', {
                data: data
            })
            return res.data
        } catch (error) {
            return error
        }
    }

    const updateHtmlSnippet = async (data) => {
         try {
            const res = await axios.put('/api/html-snippet', {
                data: data
            })
            return res.data
        } catch (error) {
            return error
        }
    }

    provide('html-snippet', {data: data.value, error: error.value, loaded: loaded.value, getHtmlSnippet, loadHtmlSnipptes, createHtmlSnippet, updateHtmlSnippet})

</script>
