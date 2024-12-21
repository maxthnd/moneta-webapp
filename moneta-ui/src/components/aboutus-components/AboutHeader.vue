<script setup>
const abouttitle = "You want to know more about Moneta?";
</script>

<template>
  <div class="header-container">
    <img class="header-image" src="/assets/images/aboutus/softwaredev2.jpg" alt="">
    <div class="header-overlay"></div>
    <h2 class="header-title">{{ abouttitle }}</h2>
  </div>
</template>

<style scoped>
.header-container {
  --header-height: 40vh;
  width: 100%;
  height: var(--header-height);
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.header-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: var(--header-height);
  background-color: rgba(0, 0, 0, 0.3);
  z-index: 1;
}
.header-title {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  color: white;
  font-weight: bold;
  font-size: 4rem;
  text-align: center;
  width: 70%;
}
.header-image {
  width: 100%;
  height: var(--header-height);
  object-fit: cover;
}
</style>
