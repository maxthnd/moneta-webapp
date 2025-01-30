<script setup>
import RegisterOverlay from "@/components/register-components/RegisterOverlay.vue";
</script>

<template>
  <video autoplay muted loop id="backgroundVideo">
    <source src="/assets/images/moneycount.mp4" type="video/mp4">
  </video>
  <div class="container-lg">
    <div class="row">
      <div class="col logo-container">
        <img src="/assets/images/moneta_logo_trans_white.png" alt="Logo" class="logo">
      </div>
      <div class="col overlay-container">
        <RegisterOverlay />
      </div>
    </div>
  </div>
</template>

<style scoped>
#backgroundVideo {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -10;
}

.container-lg {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-start;
  height: 100vh;
  width: 100%;
}

.row {
  display: flex;
  width: 100%;
}

.col {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.logo-container {
  flex: 1;
  max-width: 60%;
}

.logo {
  max-height: 70%;
  width: auto;
}

.overlay-container {
  position: absolute;
  top: 0;
  right: 0;
  width: 40%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10;
}
</style>
