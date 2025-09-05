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
   <div class="main-menu">
        <header>
              <a href="/"><img :src="updateIcon" width="30"/></a>
                <span>Hello {{ $page.props.username }}</span>
        </header>
      <ul>
        <a href="/about">About</a>
        <a href="web/create">Add</a>
        <a href="/webs">Websites</a>
        <Link  v-if="$page.props.isLoggedIn" href="/logout" method="post">Logout</Link>
        <Link  v-else href="/login">Login</Link>


      </ul>
      <div class="hambuger" @click="toggleOverlay">
            <img v-if="overlay" :src="cancelIcon" alt="Menu" width="20"/>
            <img v-else :src="hamburgerIcon" alt="Menu" width="30"/>

      </div>
    </div>
    <Transition>
        <div class="mobile-menu" v-if="overlay">
                <ul>
                    <a href="/about">About</a>
                    <a href="web/create">Add</a>
                    <a href="/webs">Websites</a>
                    <Link  v-if="$page.props.isLoggedIn" href="/logout" method="post">Logout</Link>
                    <Link  v-else href="/login">Login</Link>
                </ul>
        </div>
    </Transition>

</template>
<style scoped>

.main-menu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #737373;
    padding: 10px 20px;
    /* width: 100%; */
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
  }
</style>
