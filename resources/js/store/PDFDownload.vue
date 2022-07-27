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
    const error = ref()
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

    const createPDF = async (form) => {
        try {
            const form_data = new FormData()
            form_data.append('title', form.title)
            form_data.append('file', form.file)

            const res = await axios.post('/api/pdf-download', form_data)
            toast.success('PDF Created Successfully!', {position: 'bottom-left'})
            data.value.push(res.data)
            router.push('/admin/pdf-download')
            return res.data
        } catch (error) {
            throw error
        }
    }

    const updatePDF = async (data, id) => {
         try {
             let form_data = new FormData()
             if(data.file) {
                form_data.append('title', data.title)
                form_data.append('file', data.file)
                form_data.append('_method', 'PUT')
            } else {
                data._method = 'PUT'
                form_data = data
            }

            const res = await axios.post(`/api/pdf-download/${id}`, form_data)
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
