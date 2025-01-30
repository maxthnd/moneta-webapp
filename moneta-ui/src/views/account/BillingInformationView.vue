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
      <h3>️💰 Billing Details</h3>
    </div>
    <div class="account-data-view-body">
      <div class="transaction-card">
        <form @submit="saveChanges">
          <div class="form-group">
            <label for="cardName">Name on Card</label>
            <input
                type="text"
                class="form-control"
                id="cardName"
                placeholder="Max Mustermann"
            />
          </div>
          <div class="form-group">
            <label for="cardNumber">Card Number</label>
            <input
                type="number"
                class="form-control"
                id="cardNumber"
                required
                placeholder="1234 1234 1234 1234"
                step="any"
                pattern="\d{4} \d{4} \d{4} \d{4}"
            />
          </div>
          <div class="form-group">
            <label for="cardExpiration">Expire Date</label>
            <input
                type="tel"
                class="form-control"
                id="cardExpiration"
                required
                placeholder="01/25"
                step="any"
                pattern="\d{2}/\d{2}"
            />
          </div>
          <div class="form-group">
            <label for="cardSecurityCode">CCV</label>
            <input
                type="tel"
                class="form-control"
                id="cardSecurityCode"
                required
                placeholder="123"
                step="any"
                pattern="\d{3}"
            />
          </div>
          <button type="submit" class="btn btn-primary">Save Card</button>
        </form>
      </div>
    </div>
    <Wave />
    <Popup v-if="showPopup" message="✅ Your credit card has been updated." />
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
