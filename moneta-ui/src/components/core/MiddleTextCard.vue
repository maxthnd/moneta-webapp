<script setup lang="ts">
defineProps({
  title: String,
  text: String,
  imageUrl: String
})
</script>

<template>
  <div class="m-mc">
    <div class="card-image">
      <img class="mc-image" alt="" :src="imageUrl" />
    </div>
    <div class="card-content">
      <h3 class="mc-title">{{ title }}</h3>
      <p class="mc-text">{{ text }}</p>
    </div>
  </div>
</template>

<style scoped>
.m-mc {
  display: flex;
  flex-direction: row;
  height: 90%;
  width: 90%;
  gap: 80px;
  color: white;
}
.card-content {
  display: flex;
  flex-direction: column;
  justify-content: start;
  align-items: start;
  text-align: start;
}
</style>