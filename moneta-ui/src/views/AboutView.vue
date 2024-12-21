<script setup>
import AboutHeader from "@/components/aboutus-components/AboutHeader.vue";
import MiddleCard from "@/components/core/MiddleTextCard.vue";

const aboutItems = [
  {
    title: "Moneta",
    text: "Moneta ist ein führender Anbieter von Finanzlösungen.",
    imageUrl: "https://example.com/image1.jpg",
  },
  {
    title: "Innovation",
    text: "Wir setzen auf innovative Technologien, um Mehrwert zu schaffen.",
    imageUrl: "https://example.com/image2.jpg",
  },
  {
    title: "Nachhaltigkeit",
    text: "Nachhaltigkeit ist ein Kernbestandteil unserer Mission.",
    imageUrl: "https://example.com/image3.jpg",
  },
];
</script>

<template>
  <div class="about-view">
    <div class="about-header">
      <AboutHeader />
    </div>
    <div class="about-content">
      <MiddleCard
          v-for="(item, index) in aboutItems"
          :key="index"
          :title="item.title"
          :text="item.text"
          :imageUrl="item.imageUrl"
      />
    </div>
  </div>
</template>

<style>
.about-view {
  display: flex;
  flex-direction: column;
  width: 100%;
  min-height: 100vh;
  gap: 1rem;
}

.about-header {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f5f5f5;
}

.about-content {
  flex: 1;
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.about-item {
  margin: 1rem 0;
  text-align: center;
}

.about-item img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0.5rem auto;
}
</style>
