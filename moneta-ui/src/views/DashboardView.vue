<script setup>
import { useRouter } from "vue-router";
import DashboardHeader from "@/components/dashboard-components/DashboardHeader.vue";
import DashCardMiddle from "@/components/core/DashCardMiddle.vue";
import { useSelectedPlanStore } from "@/stores/PlanService.js";
import {onMounted, ref} from "vue";
const store = useSelectedPlanStore();

const cards = ref([]);

onMounted(async () => {
  try {
    const response = await fetch("/assets/data/plans.json")
    cards.value = await response.json();
  } catch (error) {
    console.error("Error loading cards:", error);
  }
});

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
          @click="goToPlanView({ title: item.title, contents: item.contents, transactions: item.transactions })">
      <DashCardMiddle :title="item.title" :contents="item.contents" />
      </div>
      <div class="dashboard-buttons">
        <button class="btn btn-success">Create Plan</button>
        <button class="btn btn-primary">Backup Plans</button>
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
  padding: 0 64px 64px;
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
