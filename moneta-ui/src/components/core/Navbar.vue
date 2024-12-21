<script setup>
</script>

<template>
  <nav class="navbar">
    <ul class="nav-left">
      <li><RouterLink to="/">Home</RouterLink></li>
      <li><RouterLink to="/about">About Us</RouterLink></li>
    </ul>
    <div class="logo">
      <a><img src="/assets/images/moneta_logo_trans.png" alt="Logo"></a>
    </div>
    <ul class="nav-right">
      <li><RouterLink to="/dashboard">Dashboard</RouterLink></li>
      <li><RouterLink to="/account">Account</RouterLink></li>
    </ul>
  </nav>
</template>

<style scoped>
@keyframes slideDown {
  0% {
    transform: translate(-50%, -100%);
    opacity: 0;
  }
  100% {
    transform: translate(-50%, 0);
    opacity: 1;
  }
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: fixed;
  top: 12px;
  left: 50%;
  transform: translateX(-50%);
  width: 95%;
  height: 64px;
  background-color: white;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
  border-radius: 80px;
  padding: 0 20px;
  z-index: 1000;

  animation: slideDown 0.8s ease-in-out;
}

.navbar ul {
  list-style: none;
  display: flex;
  margin: 0;
  padding: 0;
  align-items: center;
}

.navbar ul li {
  margin: 0 15px;
}

.navbar ul li a {
  text-decoration: none;
  color: black;
  font-size: 16px;
  transition: color 0.3s;
  padding: 0;
}

.logo {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  justify-content: center;
  align-items: center;
}

.logo img {
  height: 64px;
  width: auto;
}
</style>
