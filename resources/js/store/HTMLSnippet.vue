<template>
 <slot />
</template>
<script setup>
import axios from 'axios';
import {useToast} from "vue-toast-notification"
import { provide, ref } from 'vue';
import { useRouter } from 'vue-router';

    const data = ref([])
    const url = ref('/api/html-snippet')
    const error = ref(undefined)
    const toast = useToast()
    const router = useRouter()

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
            const res = await axios.post('/api/html-snippet', data)
            toast.success('Snippet Created Successfully!', {position: 'bottom-left'})
            data.value.push(res.data)
            router.push('/admin/html-snippet')
            return res.data
        } catch (error) {
            throw error
        }
    }

    const updateHtmlSnippet = async (data, id) => {
         try {
            const res = await axios.put(`/api/html-snippet/${id}`,data)
            toast.success('Snippet Updated Successfully!', {position: 'bottom-left'})
            return res.data
        } catch (error) {
            throw error
        }
    }

      const deleteHtmlSnippet = async (id) => {
         try {
            const res = await axios.delete(`/api/html-snippet/${id}`)
            data.value = data.value.filter((item) => item.id != id )
            toast.warning('Snippet Deleted Successfully!', {position: 'bottom-left'})
            return res.data
        } catch (error) {
            throw error
        }
    }

    provide('html-snippet', {data: data, error: error, getHtmlSnippet, loadHtmlSnipptes, createHtmlSnippet, updateHtmlSnippet, deleteHtmlSnippet})

</script>
