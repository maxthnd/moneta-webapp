<script setup>
import Wave from "@/components/core/Wave.vue";
import AccountHeader from "@/components/account-components/AccountHeader.vue";
import DirectIconCard from "@/components/core/DirectIconCard.vue";

const accountCards = [
  {size: "m", title: "Account", color: "gradient", link: "/account/data", icon: "user", description: "Manage your account"},
  {size: "m", title: "Billing", color: "gradient", link: "/account/billing", icon: "dollar", description: "Edit your billing details"},
  {size: "m", title: "Subscription", color: "gradient", link: "/subscriptions", icon: "money-check-edit", description: "Manage subscriptions"},
  {size: "m", title: "Support", color: "gradient", link: "/account/support", icon: "comments", description: "Need help? Contact us!"},
  {size: "m", title: "Logout", color: "gradient", link: "/logout", icon: "lock", description: "Logout from account"},
];
</script>

<template>
  <div class="account-view">
    <div class="content">
      <div class="header">
        <AccountHeader title="💫 Account Overview "/>
      </div>
      <div class="body">
        <RouterLink
            v-for="(card, index) in accountCards"
            :key="index"
            :to="card.link"
            class="router-link"
        >
          <DirectIconCard
              :size="card.size"
              :title="card.title"
              :color="card.color"
              :icon="card.icon"
              :description="card.description"
          />
        </RouterLink>
      </div>
    </div>
    <Wave/>
  </div>
</template>

<style scoped>
.account-view {
  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 1rem;

  .content {
    display: flex;
    flex-direction: column;
    gap: 3rem;
    padding: 3rem;

    .body {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 2rem;
      max-width: 80%;

      .router-link {
        text-decoration: none;
        display: block;
        width: fit-content;
      }
    }
  }
}
</style>
