<script setup>
import Wave from "@/components/core/Wave.vue";
</script>

<template>
  <div class="legal-notice-view">
    <div class="legal-notice-header">
      <img src="/assets/images/moneta_logo_trans.png" class="banner-icon" alt="Logo">
      <h3 class="header-title">Privacy Policy</h3>
    </div>
    <div class="legal-notice-content">
      <h4>Introduction</h4>
      <p>
        Protecting your personal data is of utmost importance to us. This privacy policy explains how we collect, use, and safeguard your information when you use our application or website.
      </p>

      <h4>Data Controller</h4>
      <p>
        <strong>Responsible Entity:</strong> Maximilian D., Max F.<br>
        <strong>Address:</strong> 74072 Heilbronn<br>
        <strong>Contact:</strong> <a href="mailto:contact@moneta-app.com">contact@moneta-app.com</a><br>
        <strong>Phone:</strong> Unknown
      </p>

      <h4>What Data We Collect</h4>
      <p>
        We collect the following types of data:
      </p>
      <ul>
        <li><strong>Personal Identifiable Information:</strong> Name, email address, phone number, etc., when voluntarily provided by you.</li>
        <li><strong>Usage Data:</strong> Information on how you use the app, including IP address, device type, browser type, and interaction logs.</li>
        <li><strong>Cookies and Tracking:</strong> Data collected through cookies to enhance user experience.</li>
      </ul>

      <h4>How We Use Your Data</h4>
      <p>
        The data collected is used for the following purposes:
      </p>
      <ul>
        <li>Providing and maintaining our services.</li>
        <li>Personalizing your experience within the application.</li>
        <li>Complying with legal obligations.</li>
        <li>Improving our application based on usage patterns and feedback.</li>
      </ul>

      <h4>Data Sharing and Third Parties</h4>
      <p>
        We do not sell your data to third parties. However, your data may be shared with:
      </p>
      <ul>
        <li>Service providers who assist in delivering our services (e.g., hosting providers).</li>
        <li>Authorities, if required by law.</li>
      </ul>

      <h4>Your Rights</h4>
      <p>
        As a user, you have the following rights:
      </p>
      <ul>
        <li><strong>Access:</strong> Request access to the data we hold about you.</li>
        <li><strong>Correction:</strong> Correct any inaccurate or incomplete data.</li>
        <li><strong>Deletion:</strong> Request the deletion of your data where applicable.</li>
        <li><strong>Objection:</strong> Object to the processing of your data under certain circumstances.</li>
      </ul>
      <p>
        To exercise these rights, please contact us at <a href="mailto:contact@moneta-app.com">contact@moneta-app.com</a>.
      </p>
      <h4>Data Security</h4>
      <p>
        We implement industry-standard security measures to protect your data. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.
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
  background: -webkit-linear-gradient(#f500ff, #f38a00);
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
  color: #e32cff;
}

.legal-notice-content a {
  color: #c600f3;
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
