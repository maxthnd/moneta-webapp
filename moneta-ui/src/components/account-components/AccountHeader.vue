<script setup>
defineProps({
  title: {
    type: String,
  }
})
</script>

<template>
<div class="account-header">
  <h3>{{ title }}</h3>
</div>
</template>

<style scoped>
.account-header {
  width: 100%;
  height: 12rem;
  display: flex;
  justify-content: start;
  align-items: end;
}
</style>