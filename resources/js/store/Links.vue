<template>
 <slot />
</template>
<script setup>
import axios from 'axios';
import {useToast} from "vue-toast-notification"
import { provide, ref } from 'vue';
import { useRouter } from 'vue-router';

    const data = ref([])
    const url = ref('/api/links')
    const error = ref(undefined)
    const toast = useToast()
    const router = useRouter()

    const loadLinks = () => {
        if(url.value) {
            axios.get(url.value, {headers: {
                'accept': 'application/json'
            }})
            .then(res => {
                data.value.push(...res.data.data)
                url.value = res.data.next_page_url
                loaded.value = true
            })
            .catch(err => error.value = err)
        }
    }

    const getLink = async (id) => {
        try {
            const res = await axios.get(`/api/links/${id}`, {headers: {
                'accept': 'application/json'
            }})
            return res.data
        } catch (error) {
            return error
        }
    }

    const createLink = async (data) => {
        try {
            const res = await axios.post('/api/links', data)
            toast.success('Link Created Successfully!', {position: 'bottom-left'})
            data.value.push(res.data)
            router.push('/admin/link')
            return res.data
        } catch (error) {
            throw error
        }
    }

    const updateLink = async (data, id) => {
         try {
            const res = await axios.put(`/api/links/${id}`, data)
            toast.success('Link Updated Successfully!', {position: 'bottom-left'})
            return res.data
        } catch (error) {
            throw error
        }
    }

    const deleteLink = async (id) => {
         try {
            const res = await axios.delete(`/api/links/${id}`)
            data.value = data.value.filter((item) => item.id != id )
            toast.warning('Link Deleted Successfully!', {position: 'bottom-left'})
            return res.data
        } catch (error) {
            throw error
        }
    }

    provide('links', {data: data, error: error, getLink, loadLinks, createLink, updateLink, deleteLink})

</script>
