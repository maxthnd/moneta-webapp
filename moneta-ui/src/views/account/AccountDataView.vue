<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";
import Wave from "@/components/core/Wave.vue";
import Popup from "@/components/core/Popup.vue";

const router = useRouter();
const showPopup = ref(false);

const saveChanges = (event) => {
  event.preventDefault();
  showPopup.value = true;
  setTimeout(() => {
    showPopup.value = false;
    router.push("/plan");
  }, 800);
};
const changeMail = (event) => {
  event.preventDefault();
  showPopup.value = true;
};
const changePassword = (event) => {
  event.preventDefault();
  showPopup.value = true;
};
</script>

<template>
  <div class="account-data-view">
    <div class="account-data-view-header">
      <h3>️🌱 Account Data</h3>
    </div>
    <div class="account-data-view-body">
      <div class="transaction-card">
        <form @submit="saveChanges">
          <div class="form-group">
            <label for="accountName">Name</label>
            <input
                type="text"
                class="form-control"
                id="accountName"
                placeholder="Max Mustermann"
            />
          </div>
          <div class="form-group">
            <label for="accountMail">E-Mail</label>
            <input
                type="email"
                class="form-control"
                id="accountMail"
                required
                placeholder="max.mustermann@gmail.com"
                step="any"
            />
          </div>
          <div class="form-group">
            <label for="accountPhone">Phone</label>
            <input
                type="tel"
                class="form-control"
                id="accountPhone"
                required
                placeholder="+49 123 1234567"
                step="any"
                pattern="\+(49|43|41) \d{3} \d{7}"
            />
          </div>
          <div class="form-group">
            <button class="btn btn-warning" @click="changeMail">Change Mail</button>
          </div>
          <div class="form-group">
            <button class="btn btn-danger" @click="changePassword">Change Password</button>
          </div>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
      </div>
    </div>

    <Wave />
    <Popup v-if="showPopup" message="✅ Account data have changed!"/>
  </div>
</template>

<style scoped>
.account-data-view-header {
  display: flex;
  align-items: end;
  justify-content: space-between;
  height: 220px;
  width: 100%;
  padding: 0 64px;
  z-index: 1;
}
.transaction-card {
  height: 100%;
  width: 100%;
  border-radius: 24px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.account-data-view-body {
  display: flex;
  justify-content: start;
  flex-wrap: wrap;
  width: 100%;
  padding: 0 64px;
  z-index: 2;
}
.account-data-view {
  width: 100%;
  height: 100vh;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  flex-shrink: 0;
}
form {
  padding: 50px;
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

form button {
  width: fit-content;
  align-self: end;
}

</style>
