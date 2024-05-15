import './bootstrap';
import '../css/app.css';

import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import {getMessaging, onMessage} from "firebase/messaging";
import {register} from "@/serviceWorker.js";
import {toast, ToastContainer} from "react-toastify";
import 'react-toastify/dist/ReactToastify.css';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

register()

const messaging = getMessaging();
onMessage(messaging, (payload) => {
    const { title, body } = payload.notification;
    toast.success(body)
});

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.jsx`, import.meta.glob('./Pages/**/*.jsx')),
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render( <>
            <App {...props} />
            <ToastContainer
                position="top-center"
                autoClose={5000}
                hideProgressBar={false}
                newestOnTop={false}
                closeOnClick
                rtl={false}
                pauseOnFocusLoss
                draggable
                pauseOnHover
                theme="light"
                transition: Bounce
            />
        </>);
    },
    progress: {
        color: '#4B5563',
    },
});
