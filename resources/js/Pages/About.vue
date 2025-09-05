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
            <h1>About Web Uptime Keeper</h1>
            <h3>What It Does</h3>
            <p>Website Uptime Keeper is a simple yet powerful tool designed to monitor your websites and keep you informed about their status. Built with Laravel and Vue.js, it sends regular HTTP requests to your specified URLs, checking if they’re online and responsive. Whether you’re managing a personal blog or a business site, this app ensures you’re never caught off guard by downtime.</p>
            <h3>How It Works</h3>
            <p>The magic happens behind a clean, user-friendly dashboard powered by Vue.js, where you can see real-time updates on your websites’ uptime status. On the backend, Laravel handles the heavy lifting, sending HTTP requests, processing responses, and storing the results efficiently. It’s a seamless blend of frontend reactivity and backend reliability, all wrapped into one intuitive experience.</p>
            <h3>Why We Built It</h3>
            <p>As web developers ourselves, we know how critical it is to keep websites running smoothly. Website Uptime Keeper was born from that need a practical solution to save time and reduce stress. Using our expertise in Laravel and Vue.js, we created this app to help others monitor their online presence with ease, so you can focus on what matters most: building and growing your digital world.</p>
        </div>
</template>
