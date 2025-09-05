<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    name:null,
    email: null,
    password: null,
})
</script>

<template>
    <h1 class="text-center">Register</h1>
    <div class="container-sm card">
        <form class="form-input" @submit.prevent="form.post('/register')">
            <div class="col">
                <label for="">Name</label>
                <input type="text" v-model="form.name">
                <div class="red" v-if="form.errors.name">{{ form.errors.name }}</div>
            </div>
            <div class="col">
                <label for="">Email</label>
                <input type="email" v-model="form.email">
                <div class="red" v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
            <div class="col">
                <label for="">Password</label>
                <input type="password" v-model="form.password">
                <div class="red" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <div class="col-btn">
                <button type="submit" :disabled="form.processing">Register</button>
            </div>

    </form>
    </div>

</template>
