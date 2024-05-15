import axios from 'axios';
import {messaging} from "@/firebaseCloudMessage.js";
window.axios = axios;
window.messaging = messaging;


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
