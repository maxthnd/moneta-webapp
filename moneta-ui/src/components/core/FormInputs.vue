<script setup>
import { ref } from 'vue';
import { RouterLink } from 'vue-router';

const props = defineProps({
  labelsAndInputs: Array,
  forgotPassword: Boolean,
  showPassword: Boolean,
  registerAccount: Boolean
});

const showPasswordStates = ref({});
props.labelsAndInputs.forEach((obj) => {
  if (obj.textType === 'password') {
    showPasswordStates.value[obj.id] = false;
  }
});

const togglePassword = (id) => {
  if (showPasswordStates.value[id] !== undefined) {
    showPasswordStates.value[id] = !showPasswordStates.value[id];
  }
};
</script>

<template>
  <form class="input-form needs-validation" novalidate>
    <div class="input-fields">
      <div class="field mb-2" v-for="obj in labelsAndInputs" :key="obj.id">
        <label :for="obj.id" class="fw-bold form-label">{{ obj.label }}</label>
        <div class="field-container">
          <input
              class="form-control"
              :type="obj.textType === 'password' && showPasswordStates[obj.id] ? 'text' : obj.textType"
              :id="obj.id"
              autocomplete="off"
              required
          />
          <span
              v-if="obj.textType === 'password' && showPassword"
              class="toggle-password"
              @click="togglePassword(obj.id)"
              style="cursor: pointer;"
          >
            {{ showPasswordStates[obj.id] ? '✅' : '☑️' }}
          </span>
        </div>
        <div class="invalid-feedback">
          Please fill out {{ obj.label }}
        </div>
      </div>

      <div v-if="forgotPassword" class="forgot-password">
        Forgot password? Click
        <RouterLink to="/forgotpassword">here</RouterLink>
      </div>
      <div v-if="registerAccount" class="forgot-password">
        Register new Account
        <RouterLink to="/register">here</RouterLink>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Login</button>
  </form>
</template>

<style scoped>
.input-form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100vh;
  gap: 16px;

  .input-fields {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    gap: 16px;
    width: 100%;
    max-width: 800px;
  }

  .field {
    display: flex;
    flex-direction: column;
    width: calc(50% - 16px);
    min-width: 300px;
  }

  input {
    height: 45px;
    border-radius: 10px;
    padding: 0 10px;
  }

  .btn {
    height: 45px;
    width: 200px;
    text-align: center;
  }

  .toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.2em;
  }

  .field-container {
    position: relative;
    width: 100%;
  }
}
</style>
