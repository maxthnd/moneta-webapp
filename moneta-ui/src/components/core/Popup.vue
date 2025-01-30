<script setup>
defineProps({
  message: {
    type: String,
  }
})
</script>

<template>
  <div class="popup">
    {{message}}
  </div>
</template>

<style scoped>
.popup {
  position: fixed;
  top: 80px;
  right: 20px;
  background-color: #4caf50;
  color: white;
  font-weight: normal;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  animation: fadeInOut 3s forwards;
}

@keyframes fadeInOut {
  0% {
    opacity: 0;
    transform: translateY(-80px);
  }
  10% {
    opacity: 1;
    transform: translateY(0);
  }
  90% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-80px);
  }
}
</style>