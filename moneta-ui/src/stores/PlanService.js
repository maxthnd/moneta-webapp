import { defineStore } from "pinia";

export const useSelectedPlanStore = defineStore("selectedPlan", {
    state: () => ({
        plan: null,
    }),
    actions: {
        setPlan(plan) {
            this.plan = plan;
        },
    },
    persist: {
        enabled: true,
    },
});
