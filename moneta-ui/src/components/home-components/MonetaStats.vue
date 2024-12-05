<script setup>
import {onMounted, ref} from "vue";

const userStats = 100;
const displayedUsers = ref(0);

const moneySaved = 200000;
const displaySaved = ref(0);

const budgets = 56;
const displayBudgets = ref(0);

onMounted(() => {
  const duration = 1500;
  const userSteps = userStats / (duration / 16);
  const savedMoneySteps = moneySaved / (duration / 16);
  const budgetSteps = budgets / (duration / 16);


  const savedMoneyCounter = setInterval(() => {
    displaySaved.value += savedMoneySteps;

    if (displaySaved.value >= moneySaved) {
      displaySaved.value = moneySaved;
      clearInterval(savedMoneyCounter);
    }
  }, 16);

  const registeredUserCounter = setInterval(() => {
    displayedUsers.value += userSteps;

    if (displayedUsers.value >= userStats) {
      displayedUsers.value = userStats;
      clearInterval(registeredUserCounter);
    }
  }, 16);

  const budgetsCounter = setInterval(() => {
    displayBudgets.value += budgetSteps;

    if (displayBudgets.value >= budgets) {
      displayBudgets.value = budgets;
      clearInterval(budgetsCounter);
    }
  }, 16);
});

</script>

<template>
  <div class="stats-container">
      <div class="stats-card">
        <h1 class="stats-title">Moneta Stats</h1>
        <div class="stats">
          <div class="stats-user">
            <h3 class="stats-main">+{{ Math.floor(displayedUsers) }}</h3>
            <p class="stats-sub">Registered Users</p>
          </div>
          <div class="stats-budgets">
            <h3 class="stats-main">+{{ Math.floor(displayBudgets) }}</h3>
            <p class="stats-sub">Budgets on Moneta</p>
          </div>
          <div class="stats-savedmoney">
            <h3 class="stats-main">+{{ Math.floor(displaySaved) }} €</h3>
            <p class="stats-sub">Saved Money Overall</p>
          </div>
        </div>
    </div>
  </div>
</template>

<style scoped>
.stats-container {
  width: 100%;
  display: flex;
  padding: 60px;
  justify-content: center;
}
.stats-card{
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  border-radius: 30px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 25vh;
  max-width: 1200px;
  min-width: 600px;
}
.stats{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 30px;
  padding: 30px;
}
.stats-main{
  background: -webkit-linear-gradient(#0031ff, #7500f3);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: bold;
  font-size: calc(1rem + 16px);
}
.stats-sub{
  font-size: calc(1rem + 2px);
}
.stats-title{
  font-size: calc(1rem + 18px);
  margin-top: 20px;
  font-weight: bold;
}
</style>