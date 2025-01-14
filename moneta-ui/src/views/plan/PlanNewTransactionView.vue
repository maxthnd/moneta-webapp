<script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";
import Wave from "@/components/core/Wave.vue";

const router = useRouter();
const showPopup = ref(false);

const createTransaction = (event) => {
  event.preventDefault();

  showPopup.value = true;
  setTimeout(() => {
    showPopup.value = false;
    router.push("/plan");
  }, 800);
};
</script>

<template>
  <div class="plan-transaction-view">
    <div class="plan-transaction-view-header">
      <h3>💸 Create Transaction</h3>
    </div>
    <div class="plan-transaction-view-body">
      <div class="transaction-card">
        <form @submit="createTransaction">
          <div class="form-group">
            <label for="transactionName">Transaction Name</label>
            <input
                type="text"
                class="form-control"
                id="transactionName"
                placeholder="Party Location"
            />
          </div>
          <div class="form-group">
            <label for="transactionAmount">Amount</label>
            <input
                type="number"
                class="form-control"
                id="transactionAmount"
                required
                name="price"
                min="0"
                value="100"
                step="any"
            />
          </div>
          <div class="form-group">
            <label for="transactionType">Transaction Type</label>
            <select class="form-control" id="transactionType">
              <option>Expense</option>
              <option>Income</option>
            </select>
          </div>
          <div class="form-group">
            <label for="transactionCategory">Transaction Category</label>
            <select class="form-control" id="transactionCategory">
              <option>Salary</option>
              <option>Dividens</option>
              <option>Gifts</option>
              <option>Refunds</option>
              <option>Other Income</option>
              <option>Rent</option>
              <option>Utilies</option>
              <option>Transport</option>
              <option>Going out</option>
              <option>Education</option>
              <option>Health</option>
              <option>Sport</option>
              <option>Debt/Credits</option>
              <option>Unexpected/Other</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Create Transaction</button>
        </form>
      </div>
    </div>

    <Wave />
    <div
        v-if="showPopup"
        class="popup"
    >
      ✅ Transaction was created successfully!
    </div>
  </div>
</template>

<style scoped>
.plan-transaction-view-header {
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
.plan-transaction-view-body {
  display: flex;
  justify-content: start;
  flex-wrap: wrap;
  width: 100%;
  padding: 0 64px;
  z-index: 2;
}
.plan-transaction-view {
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

.popup {
  position: fixed;
  top: 80px;
  right: 20px;
  background-color: #4caf50;
  color: white;
  padding: 15px;
  border-radius: 8px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  animation: fadeInOut 3s forwards;
}

@keyframes fadeInOut {
  0% {
    opacity: 0;
    transform: translateY(-80px);
  }
  10% {
    opacity: 1;
    transform: translateY(0);
  }
  90% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-80px);
  }
}
</style>
