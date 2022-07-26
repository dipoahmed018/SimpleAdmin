<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / PDF</h2>
            <ButtonLink class="min-w-[30%] text-title-4" href="/admin/pdf-download/create">Create PDF</ButtonLink>
        </div>

        <div class="flex p-3">
            <div class="min-h-[80px] w-full bg-shade-3 flex pl-3 rounded-md">
                <h3 class="text-white text-title-4 w-10/12 flex items-center">TIle</h3>
                <a href="#" download="hello" class="bg-black text-rose w-2/12 rounded-none flex flex-row items-center justify-center">
                    Download
                    <PdfDownloadIcon />
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
import ButtonLink from '../../../components/Buttons/ButtonLink.vue';
import PdfDownloadIcon from '../../../components/Icons/PdfDownload.vue';

</script>