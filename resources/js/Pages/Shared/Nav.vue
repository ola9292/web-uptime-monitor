<script setup>
import { Link } from '@inertiajs/vue3'
import hamburgerIcon from '@/images/hamburger.svg';
import cancelIcon from '@/images/cancel.svg';
import updateIcon from '@/images/update.svg';
import { ref } from 'vue';
const overlay = ref(false);
const toggleOverlay = () => {
    overlay.value = !overlay.value;
}
</script>

<template>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Web Monitor</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
            <a href="/webs" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Websites</a>
            </li>
            <li>
            <a href="/about" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">About</a>
            </li>
            <li>
            <a href="/web/create" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Create</a>
            </li>
            <li v-if="$page.props.isLoggedIn">
             <a href="/logout" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
            </li>
            <li v-if="!$page.props.isLoggedIn">
            <a href="/login" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</template>
<style scoped>

/* .main-menu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #737373;
    padding: 10px 20px;

    position: relative;
    color:#ffffff;
}
.main-menu > ul{
    display: flex;
    gap:6px;
    align-items: center;
}
.main-menu > ul > li{
    list-style-type: none;
}
.hambuger{
    display: none;
    color:red;
    z-index: 1000;
}
.mobile-menu{
    position: absolute;
    background-color: #737373;
    top:0;
    left:0;
    width: 100%;
    height: 100svh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.mobile-menu > ul {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap:20px;
}
a{
    text-decoration: none;
    text-transform: capitalize;
    color:#ffffff
}
header{
    display: flex;
    align-items: center;
    gap:8px;
}
.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
@media only screen and (max-width: 740px) {
    .hambuger{
        display: block;
    }
    .main-menu > ul{
        display: none;

    }
  } */
</style>
