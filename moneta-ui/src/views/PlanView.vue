<script setup>
import {useSelectedPlanStore} from "@/stores/PlanService.js";
import router from "@/router/index.js";

const store = useSelectedPlanStore();

const selectedPlan = store.plan;
if(!selectedPlan){
  router.back();
}
</script>

<template>
  <div class="plan-view">
    <div class="plan-view-header">
      <div v-if="selectedPlan" class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          Plan got into the View!
        </div>
      </div>
      <div v-if="!selectedPlan" class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
          Plan didn't get to the View!
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.plan-view {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
}
.plan-view-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 400px;
  width: 100%;
  padding: 50px;
}
</style>