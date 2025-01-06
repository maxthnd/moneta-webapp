<script setup>
import { useSelectedPlanStore } from "@/stores/PlanService.js";
import router from "@/router/index.js";
import Wave from "@/components/core/Wave.vue";
import TransactionTable from "@/components/plan-components/TransactionTable.vue";
import { ref, computed, onMounted } from "vue";
import StatsCardMiddle from "@/components/core/StatsCardMiddle.vue";

const store = useSelectedPlanStore();
const showError = ref(false);

const handleMissingPlan = () => {
  showError.value = true;
  setTimeout(() => {
    showError.value = false;
    router.push("/dashboard");
  }, 1000);
};

onMounted(() => {
  if (!store.plan) {
    handleMissingPlan();
  }
});

const selectedPlan = computed(() => store.plan || { title: "Unbekannter Plan", contents: [] });

const extractValue = (key) => {
  const item = selectedPlan.value.contents.find((entry) => entry[key] !== undefined);
  return item ? item[key] : null;
};

const parseEuroValue = (value) => {
  if (!value) return 0;
  return parseFloat(value.replace("€", "").replace(",", ".")) || 0;
};

const costs = computed(() => parseEuroValue(extractValue("Costs")));
const addIncome = computed(() => parseEuroValue(extractValue("Add. Income")));
const budget = computed(() => parseEuroValue(extractValue("Budget")));

const overallStats = computed(() => [
  { Costs: `${costs.value}€` },
  { "Add. Income": `${addIncome.value}€` },
  { Budget: `${budget.value}€` },
]);
</script>

<template>
  <div class="plan-view">
    <div class="plan-view-header">
      <h3>{{ selectedPlan.title }}</h3>
    </div>
    <div class="plan-view-body">
      <StatsCardMiddle title="📚 Plan Stats" :contents="overallStats" />
      <TransactionTable />
    </div>
    <Wave />
    <div v-if="showError" class="popup-error">
      💔 Plan is not available! Please reload the site.
    </div>
  </div>
</template>

<style scoped>
.popup-error {
  position: fixed;
  top: 80px;
  right: 20px;
  background-color: #ff2929;
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

.plan-view {
  width: 100%;
  height: 100vh;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  gap: 1rem;
  flex-shrink: 0;
}

.plan-view-header {
  display: flex;
  align-items: end;
  justify-content: space-between;
  height: 220px;
  width: 100%;
  padding: 0 64px;
  z-index: 1;
}

.plan-view-body {
  flex-grow: 1;
  display: flex;
  flex-direction: row;
  gap: 2rem;
  padding: 64px;
}
</style>
