<script setup>
import FormInputs from "@/components/core/FormInputs.vue";

const emailInput = {"label":"Email", "textType":"email", "id": "validationEmail"}
const passwordInput = {"label":"Password", "textType":"password", "id": "validationPassword"}
</script>

<template>
  <div class="login-card">
    <div class="login-card-content">
      <img src="/assets/images/moneta_logo_trans.png" alt="">
      <FormInputs :labels-and-inputs="Array.of(emailInput, passwordInput)" :forgot-password="true" :show-password="true" :register-account="true"/>
    </div>
  </div>
</template>

<style scoped>

.login-card {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: white;
  height: 550px;
  width: 450px;
  border-radius: 25px;
  padding: 0 54px;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2);

  img {
    width: 150px;
    height: auto;
  }
}
.login-card-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  padding: 25px;
}

</style>