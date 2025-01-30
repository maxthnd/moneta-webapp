<script setup>
import {ref, watch} from "vue";
import {storeToRefs} from "pinia";
import {useSelectedPlanStore} from "@/stores/PlanStore.js";
import router from "@/router/index.js";

const selectedPlanStore = useSelectedPlanStore();
const { plan } = storeToRefs(selectedPlanStore);

const transactions = ref(plan.value?.transactions || []);
watch(plan, (newPlan) => {
  transactions.value = newPlan?.transactions || [];
});
const createTransaction = () => {
  router.push("/transaction");
};
const deleteTransaction = (index) => {
  if (!plan.value || !transactions.value[index]) return;
  const row = document.querySelector(`#transaction-row-${index}`);
  row.classList.add("fade-out");

  setTimeout(() => {
    const updatedTransactions = [...transactions.value];
    updatedTransactions.splice(index, 1);
    selectedPlanStore.setPlan({ ...plan.value, transactions: updatedTransactions });
    transactions.value = updatedTransactions;
  }, 500);
};

</script>


<template>
  <div class="transaction-table">
    <div class="transaction-table-content">
      <h4 class="table-title">💸 Transactions</h4>
      <template v-if="transactions.length > 0">
        <table class="table">
          <thead class="transaction-table-header">
          <tr>
            <th scope="col" v-for="(key, index) in Object.keys(transactions[0] || {})" :key="index">
              {{ key.charAt(0).toUpperCase() + key.slice(1) }}
            </th>
            <th scope="col">Actions</th>
          </tr>
          </thead>
          <tbody>
          <tr
              v-for="(transaction, index) in transactions"
              :key="index"
              :id="'transaction-row-' + index"
          >
            <td v-for="(value, key) in transaction" :key="key">
              {{ value }}
            </td>
            <td>
              <button class="btn btn-danger" @click="deleteTransaction(index)">Delete</button>
            </td>
          </tr>
          </tbody>
        </table>
      </template>

      <template v-else>
        <p class="no-data">Keine Daten vorhanden</p>
      </template>

      <div class="table-buttons">
        <button class="btn btn-primary" @click="createTransaction">Add Transaction</button>
      </div>
    </div>
  </div>
</template>


<style scoped>
.transaction-table {
  height: 318px;
  width: 854px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
  border-radius: 20px;
  background: white;
}

.transaction-table-content {
  padding: 24px;
  display: flex;
  flex-direction: column;
  justify-content: end;
  align-items: end;
}

.table-title {
  align-self: start;
}

.no-data {
  color: #999;
  font-style: italic;
  text-align: center;
  margin-top: 20px;
  width: 100%;
}

.table {
  width: 100%;
  border-collapse: collapse;
}

th,
td {
  padding: 8px 12px;
  text-align: left;
}

th {
  background-color: #ffffff;
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f1f1f1;
}

.btn {
  padding: 5px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-danger {
  background-color: #e74c3c;
  color: white;
}

.btn-danger:hover {
  background-color: #c0392b;
}

.btn-primary {
  background-color: #3498db;
  color: white;
}

.btn-primary:hover {
  background-color: #2980b9;
}

.table-buttons {
  margin-top: 16px;
  display: flex;
  justify-content: end;
  width: 100%;
}


.fade-out {
  animation: fadeOut 0.5s forwards;
}

@keyframes fadeOut {
  from {
    opacity: 1;
    transform: translateY(0);
  }
  to {
    opacity: 0;
    transform: translateY(-10px);
  }
}


</style>
