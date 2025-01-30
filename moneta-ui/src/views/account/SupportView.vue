<script setup>

</script>

<template>
  <div class="support-view">
    <div class="support-content">
      <h2 class="headline">☎️ Support</h2>
      <p>Currently there is no support for our service available.</p>
      <RouterLink to="/legalnotice"><button class="btn btn-primary">Contact Informations</button></RouterLink>
    </div>
  </div>
</template>

<style scoped>
.support-view {
  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.support-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 64px;
  .headline {
    color: #00bbff;
    font-weight: bold;
  }
}
.btn {
  border-radius: 32px;
}
</style>