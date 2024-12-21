<script setup>
import { useRouter } from "vue-router";
import DashboardHeader from "@/components/dashboard-components/DashboardHeader.vue";
import DashCardMiddle from "@/components/core/DashCardMiddle.vue";
import { useSelectedPlanStore } from "@/stores/PlanService.js";
const store = useSelectedPlanStore();
const cards = [
  {
    title: "🛩️ Reisebudget",
    contents: [
      { "Costs": "800€" },
      { "Add. Income": "200€" },
      { "Budget": "2000€" },
    ],
  },
  {
    title: "🏠 Haushaltsplan",
    contents: [
      { "Costs": "1400€" },
      { "Add. Income": "0€" },
      { "Budget": "2500€" },
    ],
  },
  {
    title: "📊 Sparziele",
    contents: [
      { "Costs": "100€" },
      { "Add. Income": "2500€" },
      { "Budget": "3000€" },
    ],
  },
  {
    title: "⚡️ Freizeitbudget",
    contents: [
      { "Costs": "210€" },
      { "Add. Income": "0€" },
      { "Budget": "300€" },
    ],
  },
];

const router = useRouter();

const goToPlanView = (plan) => {
  store.setPlan(plan)
  router.push("/plan");
};
</script>

<template>
  <div class="dashboard-view">
    <div class="dashboard-header">
      <DashboardHeader />
    </div>
    <div class="dashboard-body">
      <div
          v-for="(item, index) in cards"
          :key="index"
          class="dashboard-card-link"
          @click="goToPlanView(item.contents)">
      <DashCardMiddle :title="item.title" :contents="item.contents" />
      </div>
      <div class="dashboard-buttons">
        <button class="btn btn-success">Create Plan</button>
        <button class="btn btn-primary">Edit View</button>
        <button class="btn btn-danger">Delete All</button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.dashboard-view {
  display: flex;
  flex-direction: column;
  width: 100%;
  min-height: 100vh;
}

.dashboard-body {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 25px;
  flex-wrap: wrap;
  padding: 0 64px;
}

.dashboard-card-link {
  text-decoration: none;
  color: inherit;
}

.dashboard-buttons {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 16px;
}

.btn {
  height: 64px;
  width: 180px;
  font-weight: bold;
  border-radius: 6px;
}
</style>
