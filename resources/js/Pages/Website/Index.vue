<script setup>
import Layout from '../Shared/Layout.vue'
import { ref, onMounted, onUnmounted } from 'vue';
import { usePoll, Link } from '@inertiajs/vue3'
import axios from 'axios';

   const props = defineProps({
         websites: Array,
    })
    const formatDate = (dateString) => {
    const date = new Date(dateString);
    return `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(date.getDate()).padStart(2, '0')} ${String(date.getHours()).padStart(2, '0')}:${String(date.getMinutes()).padStart(2, '0')}`;
    };

    usePoll(60000)



</script>
<script>
 export default{
    layout: Layout
 }
</script>
<template>
    <div class="mt-3">
        <h2 class="text-center">Your Webistes</h2>
    </div>

    <div class="container-lg">
        <div class="site-list" v-if="websites.length > 0">
            <div class="card" v-for="website in websites" :key="website.id">
                <p class="mb-2">Name: {{ website.name }}</p>
                <p class="mb-2">Url: <a class="black" :href="website.url" target="_blank">{{ website.url }}</a></p>
                <p :class="{ 'green': website.is_online, 'red': !website.is_online }" class="mb-2">Status: {{ website.is_online ? '✅ Online' : '❌ Offline' }}</p>
                <p class="mb-2">Last Updated: {{ formatDate(website.updated_at) }}</p>
                <Link :href="`web/delete/${website.id}`" method="DELETE">Delete</Link>

            </div>
        </div>
        <div v-else>
            <p>You don't have any websites</p>
        </div>
    </div>

</template>
