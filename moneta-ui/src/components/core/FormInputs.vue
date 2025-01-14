<script setup>
const props = defineProps({
  labelsAndInputs: Array,
  forgotPassword: Boolean
});
</script>

<template>
  <form class="input-form needs-validation" novalidate>
    <div class="input-fields">
      <div class="mb-2" v-for="obj in props.labelsAndInputs">
        <label :for="obj.id" class="fw-bold form-label">{{ obj.label }}</label>
        <input class="form-control" :type="obj.textType" :id="obj.id" autocomplete="off" required="">
        <div class="invalid-feedback">
          Please fill out {{ obj.label }}
        </div>
      </div>
      <div v-if="props.forgotPassword">
        Forgot password? Click
        <RouterLink to="/">here</RouterLink>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">login</button>
  </form>
</template>

<style scoped>
.input-form {
  display: grid;
  height: 100%;
  width: 100%;

  .input-fields {
    display: block;
    height: 300px;

    input {
      height: 45px;
      border-radius: 10px;
      margin-bottom: 10px;
    }
  }

  .btn {
    height: 45px;
  }
}
</style>