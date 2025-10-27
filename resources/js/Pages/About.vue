<script setup>
import Layout from './Shared/Layout.vue'
</script>
<script>
 export default{
    layout: Layout
 }
</script>
<template>
        <div class="container-lg">
            <h1 class="text-2xl font-bold mb-4">About Web Uptime Keeper</h1>
            <h3 class="text-xl font-bold">What It Does</h3>
            <p class="mb-3">Website Uptime Keeper is a simple yet powerful tool designed to monitor your websites and keep you informed through email and the dashboard about their status. Built with Inertia js, it sends HTTP requests to your specified URLs, checking if they’re online and responsive. Whether you’re managing a personal blog or a business site, this app ensures you’re never caught off guard by downtime.</p>
            <h3 class="text-xl font-bold">How It Works</h3>
            <p class="mb-3">The magic happens behind a clean, user-friendly dashboard powered by Vue.js, where you can see real-time updates on your websites’ uptime status. On the backend, Laravel handles the heavy lifting, sending HTTP requests, processing responses, and storing the results efficiently. It’s a seamless blend of frontend reactivity and backend reliability, all wrapped into one intuitive experience.</p>
            <h3 class="text-xl font-bold">Why I Built It</h3>
            <p>As a web developer myself, I know how critical it is to keep websites running smoothly. Website Uptime Keeper was born from that need a practical solution to save time and reduce stress. Using my expertise in this area, I created this app to help others monitor their online presence with ease, so you can focus on what matters most: building and growing your digital world.</p>
        </div>
</template>
