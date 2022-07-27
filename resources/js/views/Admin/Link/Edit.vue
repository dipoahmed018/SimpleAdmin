<template>
    <div class="card w-full">
        <div class="meta-and-actions h-16 w-full mt-5 bg-white flex items-center px-7 justify-between">
            <h2 class="text-title-3 text-dark">Admin / Link / Edit</h2>
        </div>
    <div class="form flex flex-col min-h-[400px]">
            <div class="flex flex-col p-3">
                <label for="title" class="label">Title:</label>
            <TextInput name="title" id="title" v-model:value="form.title" @update:value="(title) => form.title = title" placeholder="Enter Your Title Here" maxLength="200" required/>
        </div>

        <div class="flex flex-col p-3">
            <label for="link" class="label">Link:</label>
            <TextInput name="link" id="link" v-model:value="form.url" @update:value="(url) => form.url = url" placeholder="Enter Your Link" required/>
        </div>

        <div class="flex flex-col p-3">
            <div class="flex items-center">
                <input id="link-checkbox" type="checkbox" v-model="link_target" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Open Link in a new tab</label>
            </div>
        </div>

        <div class="flex mt-auto p-3 justify-end">
            <Button class="min-w-[200px] bg-tints-3 text-white drop-shadow-lg" @click="updateLink(form, link.id)">Save</Button>
        </div>
    </div>
    </div>
</template>

<script setup>
import TextInput from '../../../components/Inputs/Text.vue';
import { reactive, ref, onMounted, inject, computed} from 'vue';
import Button from '../../../components/Buttons/Button.vue';

const link = ref();
const form = reactive({
    title: "",
    url: "",
    target: "_self",
})

const link_target = computed({
    get: () => {
        return form.target == "_self" ? false : true
    },

    set: (value) => {
        form.target = value == true ? "_blank" : "_self"
    }
})

const {getLink, updateLink}  = inject('links')

onMounted(() => {
    const id = location.pathname.match(/\d+$/)
    getLink(id).then((res) => {
        link.value = res
        form.title = res.title
        form.url = res.url
        form.target = res.target
    })

})

</script>
