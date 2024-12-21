import { defineStore } from "pinia";

export const useSelectedPlanStore = defineStore("selectedPlan", {
    state: () => ({
        plan: null,
    }),
    actions: {
        setPlan(plan) {
            if (!plan) {
                console.error("Kein Plan übergeben.");
                return;
            }
            this.plan = plan;
        },
    },
});