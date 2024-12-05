<script setup>
import { RouterView } from 'vue-router'
import Navbar from "@/components/core/Navbar.vue";
import Footer from "@/components/core/Footer.vue";
</script>

<template>
  <div class="app">
    <Navbar></Navbar>
    <div class="content">
      <RouterView />
    </div>
    <Footer></Footer>
  </div>
</template>

<style>
.app{
  min-height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 40px;
}
.content{
  flex: 1;
}
body, html{
  font-family: Helvetica, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
