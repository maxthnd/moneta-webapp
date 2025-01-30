<script setup>
import RegisterFormInputs from "@/components/core/RegisterFormInputs.vue";
const nameInput = {"label":"Name", "textType":"text", "id": "validationName"}
const emailInput = {"label":"Email", "textType":"email", "id": "validationEmail"}
const passwordInput = {"label":"Password", "textType":"password", "id": "validationPassword"}
const password2Input = {"label":"Password", "textType":"password", "id": "validationPassword2"}
</script>

<template>
  <div class="register-overlay">
    <div class="overlay-content">
      <h2>👋 Register new Account</h2>
      <RegisterFormInputs :labels-and-inputs="Array.of(nameInput, emailInput, passwordInput, password2Input)" :show-password="true"/>
    </div>
  </div>
</template>

<style scoped>
.register-overlay {
  height: 100%;
  width: 100%;
  background: white;
  display: flex;
  justify-content: center;
  align-items: center;
  .overlay-content{
    padding: 32px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: start;
    gap: 24px;
  }
}
</style>