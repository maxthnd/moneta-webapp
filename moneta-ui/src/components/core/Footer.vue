<script setup>
</script>

<template>
  <div class="footer-container">
    <div class="footer">
      <div class="footer-logo">
        <img class="footer-image" src="/assets/images/moneta_logo_trans_white.png" alt="logo">
      </div>
      <ul class="footer-links">
        <li><RouterLink to="legalnotice">Legal Notice</RouterLink></li>
        <li><RouterLink to="privacy">Privacy</RouterLink></li>
        <li><RouterLink to="">Account</RouterLink></li>
      </ul>
    </div>
  </div>
</template>

<style scoped>
.footer-container {
  width: 100%;
  margin-top: auto;
}

.footer-image {
  width: auto;
  height: 84px;
}

.footer {
  color: white;
  background: #1c1c1c;
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 60px;
  width: 100%;
  padding: 16px 64px;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}

.footer-links {
  list-style: none;
  display: flex;
  flex-direction: row;
  gap: 24px;
  padding: 0;
  margin: 0;
}

.footer-links li {
  display: inline;
}

.footer-links a {
  text-decoration: none;
  color: white;
  font-weight: 400;
  transition: color 0.3s ease;
}

.footer-links a:hover {
  color: #2c55ff;
}
</style>
