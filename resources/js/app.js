import './bootstrap';
import { createApp } from 'vue';
import 'bootstrap/dist/css/bootstrap.css';
import '../css/app.css'
import '../js/config/axiosConfig'

import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';

import router from './router/index.js'
import store from './store/index.js'
import app from '../js/App.vue'

library.add(fas)

createApp(app)
    .use(router)
    .use(store)
    .component("font-awesome-icon", FontAwesomeIcon)
    .mount("#app")

