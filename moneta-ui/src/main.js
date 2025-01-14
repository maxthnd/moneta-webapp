import { createApp } from 'vue'
import { createPinia} from "pinia";
import piniaPluginPersistedstate from "pinia-plugin-persistedstate";
import App from './App.vue'
import router from './router'

const pinia = createPinia();
pinia.use(piniaPluginPersistedstate);

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import '@popperjs/core';
import '../public/assets/fonts/styles.css';

const app = createApp(App)

app.use(router)
app.use(pinia)
app.mount('#app')
