<script setup>
import LoginCard from "@/components/login-components/LoginCard.vue";
</script>

<template>
  <video autoplay muted loop id="backgroundVideo">
    <source src="/assets/images/geldrolle_girl.mp4" type="video/mp4">
  </video>
  <div class="login-view">
    <LoginCard/>
  </div>
</template>

<style>
#backgroundVideo {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 1920px;
  height: 1080px;
  z-index: -10;
}
.login-view {
  width: 100%;
  display: flex;
  justify-content: center;
  padding-top: 120px;
  align-items: center;
  height: 100vh;
}
</style>