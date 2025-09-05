<script setup>
import { useForm } from '@inertiajs/vue3'
import Layout from '../Shared/Layout.vue'

const form = useForm({
    name:null,
    url: null,

})
</script>
<script>
 export default{
    layout: Layout
 }
</script>
<template>
    <h1 class="text-center">Create New Url</h1>
    <div class="container-sm card">
        <form class="form-input" @submit.prevent="form.post('/web/create')">
            <div class="col">
                <label for="">Name</label>
                <input type="text" v-model="form.name">
                <div class="red" v-if="form.errors.name">{{ form.errors.name }}</div>
            </div>

            <div class="col">
                <label for="">Url</label>
                <input type="url" v-model="form.url">
                <div class="red" v-if="form.errors.url">{{ form.errors.url }}</div>
            </div>

            <div class="col-btn">
                <button type="submit" :disabled="form.processing">Create</button>
            </div>

        </form>
    </div>

</template>

