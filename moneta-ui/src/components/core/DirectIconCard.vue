<script setup>
defineProps({
  size: String,
  title: String,
  icon: String,
  color: String,
  description: String
});
</script>

<template>
  <div class="direct-card">
    <div v-if="size === 'm'" class="card-m">
      <div class="card-content">
        <div class="icon-m">
          <img
              :src="'/assets/icons/' + icon + '.png'"
              alt=""
              :class="{ gradient: color === 'gradient' }"
          />
        </div>
        <div class="body-m">
          <h4>{{ title }}</h4>
          <p>{{ description }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.direct-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
  border-radius: 10px;
  .card-m {
    width: 320px;
    height: 100px;
    background: white;
    border-radius: 10px;
    color: black;
    display: flex;
    align-items: center;
    padding: 1rem;

    .card-content {
      display: flex;
      flex-direction: row;
      gap: 1rem;
      align-items: center;

      .icon-m {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 64px;
        height: 64px;

        img {
          width: 32px;
          height: 32px;
          transition: filter 0.3s ease;

          &.gradient {
            filter: brightness(1.2) saturate(1.5) hue-rotate(220deg);
          }
        }
      }

      .body-m {
        display: flex;
        flex-direction: column;
        justify-content: center;

        h4 {
          margin: 0;
          font-size: 1rem;
        }

        p {
          margin: 0;
          font-size: 0.875rem;
          color: #666;
        }
      }
    }
  }

  &:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 4px 10px 0 rgba(0, 0, 0, 0.19);
    background: transparent;

    .card-m {
      background: transparent;
      box-shadow: none;
    }
  }
}
</style>
