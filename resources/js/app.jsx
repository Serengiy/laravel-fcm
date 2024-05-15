import './bootstrap';
import '../css/app.css';

import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import {getToken} from "firebase/messaging";
import {register} from "@/serviceWorker.js";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

register()


// if ('serviceWorker' in navigator) {
//     window.addEventListener('load', () => {
//         navigator.serviceWorker.register('../../firebase-messaging-sw.js')
//             .then((registration) => {
//                 console.log('Service Worker registered with scope:', registration.scope);
//             })
//             .catch((error) => {
//                 console.log('Service Worker registration failed:', error);
//             });
//     });
// }

const vapidKey = 'BLII6_ZtpQ25RCmaH2ddywheW9dGv4fpkk9o5TKdsBpKLlGi0S7Z7Y2bUcwjocINJN6lmdQs6c2SASaFvCYrXDg'
let deviceToken = ''

async function requestPermission() {
    //requesting permission using Notification API
    const permission = await Notification.requestPermission();

    if (permission === "granted") {
        const token = await getToken(messaging, {
            vapidKey: vapidKey,
        });
        // setUserToken(token)
        deviceToken = token

        //We can send token to server
        console.log("Token generated : ", token);
    } else if (permission === "denied") {
        //notifications are blocked
        alert("You denied for the notification");
    }
}
requestPermission()


createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.jsx`, import.meta.glob('./Pages/**/*.jsx')),
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(<App {...props} />);
    },
    progress: {
        color: '#4B5563',
    },
});
