<script setup>

</script>

<template>
  <div class="introduction-container">
    <div class="introduction">
      <h1 class="introduction-title">What is Moneta?</h1>
      <div class="introduction-content">
        <div class="introduction-theme">
          <img src="/assets/images/introduction/financeillustration.jpg" alt="" class="theme-img">
          <div class="theme-content">
            <h2 class="theme-title">We care about your time.</h2>
            <p class="theme-text">Moneta is a modern way to create an overview about all your finances. Built to make your financial decisions easier. Give yourself shot and try building your financial happyness.</p>
            <RouterLink to="about"><button type="button" class="btn btn-primary">About Us</button></RouterLink>
          </div>
        </div>
        <div class="introduction-theme">
          <img src="/assets/images/introduction/wealth.jpg" alt="" class="theme-img">
          <div class="theme-content">
            <h2 class="theme-title">Build your wealth.</h2>
            <p class="theme-text">We work together with many partners and wealthy people in the whole world. Because of that we can only give you our best advices to save money and generate more money out of our advices.</p>
            <button type="button" class="btn btn-primary" href="/about">About Us</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.introduction-container {
  display: flex;
  flex-direction: column;
  gap: 40px;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 60px;
}
.theme-content{
  display: flex;
  flex-direction: column;
  gap: 15px;
  align-items: start;
  justify-content: center;
  text-align: start;
  max-width: 650px;
}
.introduction-content {
  width: 100%;
  padding: 60px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: start;
  flex-wrap: wrap;
  gap: 120px;
}
.theme-img{
  width: auto;
  height: 300px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  border-radius: 25px;
}
.introduction-theme{
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  text-align: start;
  flex-wrap: wrap;
  gap: 54px;
}
</style>