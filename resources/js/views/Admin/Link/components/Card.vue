<template>
    <div class="bg-white p-2 rounded-md flex gap-2 w-full items-center justify-between">
        <div class="link-wrapper flex gap-1">
            <span class="text-rose text-4">Link:</span>
            <span>
                <a :href="link.url" class="text-dark-A400 title text-title-4 my-2 cursor-pointer underline underline-offset-4" :target="link.target">{{link.title}}</a>
            </span>
        </div>
        <div class="btns flex gap-2">
            <Button class="bg-dark-A400 w-[80px]" @click="this.$emit('delete', link.id)">Delete</Button>
            <ButtonLink :href="`/admin/link/edit/${link.id}`" class="w-[80px]">Edit</ButtonLink>
        </div>
    </div>
</template>

<script setup>
import Button from '../../../../components/Buttons/Button.vue';
import ButtonLink from '../../../../components/Buttons/ButtonLink.vue';
    defineProps({
        link: {
            type: Object,
            required:true,
        }
    })
</script>
