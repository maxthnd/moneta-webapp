<script setup>

</script>

<template>
  <div class="background">
    <svg
        class="wave"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 220"
        preserveAspectRatio="none">
      <path
          fill="url(#gradient)"
          fill-opacity="0.5"
          d="M0,160 C480,200 960,120 1440,160 L1440,320 L0,320 Z">
        <animate
            attributeName="d"
            dur="8s"
            repeatCount="indefinite"
            values="
              M0,160 C480,200 960,120 1440,160 L1440,320 L0,320 Z;
              M0,170 C480,180 960,140 1440,180 L1440,320 L0,320 Z;
              M0,160 C480,200 960,120 1440,160 L1440,320 L0,320 Z"/>
      </path>
      <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" style="stop-color: #2503ff; stop-opacity: 1" />
          <stop offset="100%" style="stop-color: #ff00ea; stop-opacity: 0.5" />
        </linearGradient>
      </defs>
    </svg>
  </div>
</template>

<style scoped>
.background {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 50%;
  overflow: hidden;
  z-index: -1;
}

.wave {
  width: 100%;
  height: 100%;
  position: absolute;
  bottom: 0;
  z-index: -1;
}
</style>