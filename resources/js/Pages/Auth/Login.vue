<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  email: null,
  password: null,
})
</script>

<template>
    <h1 class="text-center">Login</h1>
    <div class="container-sm card">
        <form class="form-input" @submit.prevent="form.post('/login')">
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
                <button type="submit" :disabled="form.processing">Login</button>
            </div>

        </form>
        <p>Click here to <a href="/register" class="green">register</a> </p>
    </div>

</template>
