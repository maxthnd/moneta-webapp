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

const getUsedPercentage = contentArray => {
  if (!Array.isArray(contentArray)) {
    console.error("Contents ist kein Array oder ungültig:", contentArray);
    return 0;
  }

  const extractValue = (key, array) => {
    const obj = array.find(item => item[key] !== undefined);
    if (!obj || !obj[key]) return 0;

    const value = obj[key]
        .replace("€", "")
        .replace(",", ".")
        .trim();
    return parseFloat(value) || 0;
  };

  const budget = extractValue("Budget", contentArray);
  const add_income = extractValue("Add. Income", contentArray);
  const outcome = extractValue("Costs", contentArray);
  const income = budget + add_income;

  return ( outcome / income ) * 100;
};

const getProgressBarClass = value => {
  switch (true) {
    case value > 85:
      return "progress-bar-striped bg-danger";
    case value > 65:
      return "progress-bar-striped bg-warning";
    case value > 35:
      return "progress-bar-striped bg-info";
    default:
      return "progress-bar-striped bg-success";
  }
};

</script>


<template>
  <div class="dashboard-card-middle hover-effect">
    <div class="dashboard-card-middle-content">
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
        <div v-if="contents && contents.length > 0" class="progress">
          <div
              class="progress-bar progress-bar-animated"
              role="progressbar"
              :class="getProgressBarClass(getUsedPercentage(contents))"
              :style="{ width: `${Math.min(getUsedPercentage(contents), 100)}%` }"
              :aria-valuenow="getUsedPercentage(contents)"
              aria-valuemin="0"
              aria-valuemax="100"
          ></div>
        </div>
        <div v-else>
          <p>Keine Daten verfügbar</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.dashboard-card-middle {
  display: flex;
  flex-direction: column;
  border-radius: 20px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
  padding: 20px;
  background-color: white;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.dashboard-card-middle:hover {
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

.dashboard-card-middle-content {
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
