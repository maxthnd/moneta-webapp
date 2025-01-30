<script setup>
import { ref, onMounted } from 'vue';
const props = defineProps({
  title: String,
  imageUrl: String
});

const displayedTitle = ref('');
const cursor = ref('|');
const typingDelay = 100;
const blinkingDelay = 500;
const pauseDuration = 1000;

function typeTitle() {
  displayedTitle.value = '';
  let currentIndex = 0;

  const typingInterval = setInterval(() => {
    if (currentIndex < props.title.length) {
      displayedTitle.value += props.title[currentIndex];
      currentIndex++;
    } else {
      clearInterval(typingInterval);
      blinkCursor();
    }
  }, typingDelay);
}

function blinkCursor() {
  let blinkCount = 0;
  cursor.value = '|';

  const cursorInterval = setInterval(() => {
    cursor.value = cursor.value === '|' ? '' : '|';
    blinkCount++;

    if (blinkCount >= 8) {
      clearInterval(cursorInterval);
      setTimeout(() => {
        typeTitle();
      }, pauseDuration);
    }
  }, blinkingDelay);
}

onMounted(() => {
  typeTitle();
});
</script>

<template>
  <div class="banner-container">
    <div class="banner">
      <img v-if="imageUrl.endsWith('.jpg')" :src="imageUrl" alt="Logo" class="banner-image">
      <video v-if="imageUrl.endsWith('.mp4')" :src="imageUrl" autoplay muted loop class="banner-image"/>
      <div class="blacksetter"></div>
      <div class="banner-content">
        <img src="/assets/images/moneta_logo_trans_white.png" class="banner-icon" alt="Logo">
        <h1 class="banner-title">{{ displayedTitle }}<span class="cursor">{{ cursor }}</span></h1>
      </div>
    </div>
  </div>
</template>

<style scoped>
.banner-title{
  font-weight: bold;
  font-size: 3rem;
}
.banner{
  position: absolute;
  width: 90%;
  height: 95%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
}
.banner-container {
  position: relative;
  width: 100%;
  height: 600px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  border-radius: 30px;
}
.banner-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  border-radius: 30px;
}
.banner-content{
  position: relative;
  color: white;
  text-align: center;
  width: 100%;
  height: 100%;
  font-size: 50px;
  font-weight: bold;
  z-index: 2;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.blacksetter {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 1;
  border-radius: 30px;
}
.banner-icon{
  width: 324px;
  height: 324px;
}

</style>
