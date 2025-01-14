<script setup>
import Wave from "@/components/core/Wave.vue";
</script>

<template>
  <div class="legal-notice-view">
    <div class="legal-notice-header">
      <img src="/assets/images/moneta_logo_trans.png" class="banner-icon" alt="Logo">
      <h3 class="header-title">Legal Notice</h3>
    </div>
    <div class="legal-notice-content">
      <h4>Provider Identification</h4>
      <p>
        <strong>Operator:</strong> Maximilian D., Max F.<br>
        <strong>Address:</strong> 74072 Heilbronn<br>
        <strong>Contact:</strong> <a href="mailto:[Your Email]">contact@moneta-app.com</a><br>
        <strong>Phone:</strong> Unknown<br>
      </p>

      <h4>Registration Details</h4>
      <p>
        <strong>Commercial Register:</strong> Handelsregister<br>
        <strong>Registration Number:</strong> -/-<br>
        <strong>VAT ID:</strong> -/-<br>
      </p>

      <h4>Responsible for Content</h4>
      <p>
        Maximilian D., Max F.<br>
        <strong>Address: 74072 Heilbronn</strong>
      </p>

      <h4>Dispute Resolution</h4>
      <p>
        The European Commission provides a platform for online dispute resolution (ODR):
        <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener">https://ec.europa.eu/consumers/odr</a>. <br>
        We are not obliged and not willing to participate in dispute resolution proceedings before a consumer arbitration board.
      </p>

      <h4>Disclaimer</h4>
      <p>
        The content on this website has been prepared with the utmost care. However, we cannot guarantee the accuracy, completeness, or timeliness of the information provided. We reserve the right to modify or remove content without prior notice.
      </p>
    </div>
    <div class="wave-container">
      <Wave/>
    </div>
  </div>
</template>

<style scoped>
.legal-notice-view {
  min-height: 130vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  padding: 20px;
  font-family: Arial, sans-serif;
  position: relative;
}

.legal-notice-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 40vh;
  width: 100%;
}

.header-title {
  background: -webkit-linear-gradient(#2c55ff, #7500f3);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.banner-icon {
  width: 154px;
  height: 154px;
}

.legal-notice-content {
  padding: 20px;
  line-height: 1.6;
  flex-grow: 1;
  position: relative;
  z-index: 2; /* Ensure content is above the wave */
}

.legal-notice-content h4 {
  margin-top: 20px;
  color: #2c55ff;
}

.legal-notice-content a {
  color: #7500f3;
  text-decoration: none;
}

.wave-container {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  z-index: 1;
  padding-top: 80px;
  margin-top: 0;
  height: 500px;
}

.wave-container .wave {
  height: 300px;
}
</style>
