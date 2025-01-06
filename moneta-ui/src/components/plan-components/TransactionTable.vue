<script setup>
import { storeToRefs } from 'pinia';
import { useSelectedPlanStore} from "@/stores/PlanService.js";
import router from "@/router/index.js";

const selectedPlanStore = useSelectedPlanStore();
const { transactions } = storeToRefs(selectedPlanStore);
const create_transaction = () => {
  router.push("/transaction");
}
</script>

<template>
  <div class="transaction-table">
    <div class="transaction-table-content">
      <h4 class="table-title">💸 Transactions</h4>
      <template v-if="transactions && transactions.length > 0">
        <table class="table">
          <thead>
          <tr>
            <th scope="col" v-for="(key, index) in Object.keys(transactions[0] || {})" :key="index">
              {{ key.charAt(0).toUpperCase() + key.slice(1) }}
            </th>
          </tr>
          </thead>
          <tbody>
          <tr v-for="(transaction, index) in transactions" :key="index">
            <td v-for="(value, key) in transaction" :key="key">
              {{ value }}
            </td>
          </tr>
          </tbody>
        </table>
      </template>
      <template v-else>
        <p class="no-data">Keine Daten vorhanden</p>
      </template>
      <div class="table-buttons">
        <button class="btn btn-primary" @click="create_transaction">Add Transaction</button>
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
</style>
