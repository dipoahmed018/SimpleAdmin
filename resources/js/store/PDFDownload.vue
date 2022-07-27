<template>
 <slot />
</template>
<script setup>
import axios from 'axios';
import {useToast} from "vue-toast-notification"
import { provide, ref } from 'vue';
import { useRouter } from 'vue-router';

    const data = ref([])
    const url = ref('/api/pdf-download')
    const error = ref(undefined)
    const toast = useToast()
    const router = useRouter()

    const loadPDF = () => {
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

    const getPDF = async (id) => {
        try {
            const res = await axios.get(`/api/pdf-download/${id}`, {headers: {
                'accept': 'application/json'
            }})
            return res.data
        } catch (error) {
            return error
        }
    }

    const createPDF = async (data) => {
        try {
            const res = await axios.post('/api/pdf-download', data)
            toast.success('PDF Created Successfully!', {position: 'bottom-left'})
            router.push('/admin/pdf-download')
            return res.data
        } catch (error) {
            throw error
        }
    }

    const updatePDF = async (data, id) => {
         try {
            const res = await axios.put(`/api/pdf-download/${id}`, data)
            toast.success('PDF Updated Successfully!', {position: 'bottom-left'})
            return res.data
        } catch (error) {
            throw error
        }
    }

    const deletePDF = async (id) => {
         try {
            const res = await axios.delete(`/api/pdf-download/${id}`)
            data.value = data.value.filter((item) => item.id != id )
            toast.warning('PDF Deleted Successfully!', {position: 'bottom-left'})
            return res.data
        } catch (error) {
            throw error
        }
    }

    provide('pdf-download', {data: data, error: error, getPDF, loadPDF, createPDF, updatePDF, deletePDF})

</script>
