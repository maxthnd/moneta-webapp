<script setup>
import { ref, watch, toRefs } from "vue";

// Props definieren und verwenden
const props = defineProps({
  title: {
    type: String,
    required: true,
  },
  contents: {
    type: Array,
    default: () => [],
  },
});

// Props reaktiv machen
const { contents } = toRefs(props);

const showModal = ref(false);
const editableContents = ref([]);

// Inhalte überwachen und initialisieren
watch(
    contents,
    (newContents) => {
      editableContents.value = JSON.parse(JSON.stringify(newContents));
    },
    { immediate: true }
);

const openModal = () => {
  showModal.value = true;
};

const closeModal = () => {
  showModal.value = false;
};

const saveChanges = () => {
  console.log("Speichern:", editableContents.value);
  closeModal();
};
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
          <button class="btn btn-dark" @click="openModal">Edit</button>
        </div>
      </div>
    </div>
  </div>
  <div v-if="showModal" class="popup-overlay" @click.self="closeModal">
    <div class="popup-content">
      <h3>Edit {{ title }}</h3>
      <div class="popup-body">
        <div v-for="(item, index) in editableContents" :key="index" class="popup-item">
          <div v-for="(value, key) in item" :key="key" class="form-group">
            <label :for="`input-${index}-${key}`">{{ key }}</label>
            <input
                v-model="editableContents[index][key]"
                :id="`input-${index}-${key}`"
                type="text"
                class="form-control"
            />
          </div>
        </div>
      </div>
      <div class="popup-footer">
        <button class="btn btn-secondary" @click="closeModal">Cancel</button>
        <button class="btn btn-primary" @click="saveChanges">Save</button>
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

.card-buttons {
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

.popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.popup-content {
  background: white;
  border-radius: 10px;
  width: 90%;
  max-width: 600px;
  max-height: 80%;
  padding: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.popup-content h3 {
  margin-bottom: 15px;
}

.popup-body {
  flex: 1;
  overflow-y: auto;
  margin-bottom: 20px;
  padding-right: 10px;
}

.popup-item {
  margin-bottom: 15px;
}
.popup-footer{
  display: flex;
  flex-direction: row;
  gap: 12px;
}
</style>
