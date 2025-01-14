<script>
import Navbar from "@/components/core/Navbar.vue";
import Footer from "@/components/core/Footer.vue";
export default {
  components: {Footer, Navbar},
  data() {
    return {
      errorMessage: null,
      errorTimeout: null,
    };
  },
  created() {
    this.$root.$options.errorHandler = (err) => {
      this.showError(err.message);
    };
    window.addEventListener("unhandledrejection", (event) => {
      this.showError(event.reason.message || "Ein unbekannter Fehler ist aufgetreten.");
    });
  },
  methods: {
    showError(message) {
      this.errorMessage = message;
      if (this.errorTimeout) {
        clearTimeout(this.errorTimeout);
      }
      this.errorTimeout = setTimeout(() => {
        this.closePopup();
      }, 5000);
    },
    closePopup() {
      this.errorMessage = null;
      clearTimeout(this.errorTimeout);
      this.errorTimeout = null;
    },
  },
};
</script>

<template>
  <div class="app">
    <Navbar></Navbar>
    <div class="content">
      <RouterView />
      <div v-if="errorMessage" class="error-popup">
        <h2>Error!</h2>
        <p>{{ errorMessage }}</p>
        <button class="btn btn-light" @click="closePopup">Close</button>
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>

<style>
@keyframes fadeInOut {
  0% {
    opacity: 0;
    transform: translateY(-80px);
  }
  10% {
    opacity: 1;
    transform: translateY(0);
  }
  90% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-80px);
  }
}
.error-popup {
  position: fixed;
  top: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: rgba(255, 0, 0, 0.9);
  color: white;
  padding: 1rem;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  z-index: 1000;
  animation: fadeInOut 1s;
}
.app{
  min-height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
}
.content{
  flex: 1;
}
body, html{
  font-family: Helvetica, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
