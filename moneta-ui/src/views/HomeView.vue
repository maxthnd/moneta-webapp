<script setup>
import Banner from "@/components/core/Banner.vue";
import Introduction from "@/components/home-components/Introduction.vue";
import MonetaStats from "@/components/home-components/MonetaStats.vue";
import {onMounted, ref} from "vue";

const introductionRef = ref(null);
const statsRef = ref(null);

onMounted(() => {
  const introductionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fadeInUp');
        introductionObserver.unobserve(entry.target);
      }
    });
  });

  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-fadeInUp');
        statsObserver.unobserve(entry.target);
      }
    });
  });

  if (introductionRef.value) {
    introductionObserver.observe(introductionRef.value);
  }
  if (statsRef.value) {
    statsObserver.observe(statsRef.value);
  }
});
</script>

<template>
  <div class="home-view">
    <div class="home-banner">
      <Banner :title="'More than a Budget Planner'" :imageUrl="'/assets/images/moneyzoom.mp4'" />
    </div>
    <div ref="introduction" class="introduction-class">
      <Introduction></Introduction>
    </div>
    <div ref="moneystats" class="moneystats-class">
      <MonetaStats></MonetaStats>
    </div>
  </div>
</template>

<style>
.home-view {
  width: 100%;
  height: 100%;
}
.animate-fadeInUp {
  opacity: 1 !important;
  transform: translateY(0) !important;
}
.home-banner{
  width: 100%;
  margin-top: 80px;
}
</style>