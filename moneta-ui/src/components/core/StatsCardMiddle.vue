<script setup>
defineProps({
  title: {
    type: String,
    required: true,
  },
  contents: {
    type: Array,
    default: () => [],
  },
});
</script>


<template>
  <div class="plan-card-middle hover-effect">
    <div class="plan-card-middle-content">
      <div class="card-header">
        <h2 class="card-title">{{ title }}</h2>
      </div>
      <div class="card-body">
        <div v-for="(item, index) in contents" :key="index" class="card-content">
          <div v-for="(value, key) in item" :key="key" class="card-item">
            <h3 class="item-key">{{ key }}</h3>
            <p class="item-value">{{ value }}</p>
          </div>
        </div>
        <div class="card-buttons">
          <button class="btn btn-dark">Edit</button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.plan-card-middle {
  display: flex;
  flex-direction: column;
  border-radius: 20px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
  padding: 20px;
  background-color: white;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden;
  height: fit-content;
}

.plan-card-middle:hover {
  transform: translateY(-10px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
}

.card-header {
  margin-bottom: 20px;
}

.card-title {
  font-size: 1.5rem;
  font-weight: bold;
}

.card-buttons{
  display: flex;
  justify-content: center;
  align-items: center;
}

.card-body {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.card-content {
  border-bottom: 1px solid #eaeaea;
  padding-bottom: 10px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.card-item {
  display: flex;
  flex-direction: column;
  padding-bottom: 10px;
}

.item-key {
  font-weight: bold;
  font-size: 1.2rem;
  color: #0c0c0c;
  margin: 0;
}

.item-value {
  font-size: 1rem;
  color: #333;
  margin: 0;
}

.plan-card-middle-content {
  display: flex;
  flex-direction: column;
  padding: 10px;
}

.progress {
  margin-top: 15px;
}

.progress-bar {
  transition: width 0.5s ease;
}
</style>

