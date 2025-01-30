<script setup>

</script>

<template>
  <div class="pagenotfound-view">
    <div class="pagenot-found-content">
      <h2 class="headline">Error 404</h2>
      <p>The page you search couldn't be found.</p>
      <RouterLink to="/"><button class="btn btn-danger">Back Home</button></RouterLink>
    </div>
  </div>
</template>

<style scoped>
.pagenotfound-view {
  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.pagenot-found-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 64px;
  .headline {
    color: #ec2e1c;
    font-weight: bold;
  }
}
.btn {
  border-radius: 32px;
}
</style>