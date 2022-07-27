<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / PDF</h2>
            <ButtonLink class="min-w-[30%] text-title-4" href="/admin/pdf-download/create">Create PDF</ButtonLink>
        </div>

        <div class="flex p-3 flex-col gap-2 overflow-y-auto">
            <div class="min-h-[80px] w-full bg-shade-3 flex pl-3 rounded-md" v-for="pdf in data" :key="pdf.id">
                <div class="flex w-10/12 flex-col">
                    <h3 class="text-white text-title-4  flex items-center">{{pdf.title}}</h3>
                    <div class="actions flex justify-end h-10 gap-4 mt-4 mb-2 mr-2">
                        <Button class="bg-dark-A200 text-dark w-[20%] py-1 flex justify-center items-center gap-2" @click="deletePDF(pdf.id)">
                            Delete
                        </Button>
                        <ButtonLink :href="`/admin/pdf-download/edit/${pdf.id}`" class="bg-dark-A400 w-[20%] py-1 flex items-center justify-center">
                            Edit
                        </ButtonLink>
                    </div>
                </div>
                <a :href="pdf.file_url" download class="bg-black text-rose w-2/12 rounded-none flex flex-row items-center justify-center">
                    Download
                    <PdfDownloadIcon />
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
import ButtonLink from '../../../components/Buttons/ButtonLink.vue';
import Button from '../../../components/Buttons/Button.vue';
import PdfDownloadIcon from '../../../components/Icons/PdfDownload.vue';
import { inject, onMounted } from 'vue';

const {data, loadPDF, error, deletePDF} = inject('pdf-download')


onMounted(() => {
    if(!error.value) {
        loadPDF()
    }
})

</script>
