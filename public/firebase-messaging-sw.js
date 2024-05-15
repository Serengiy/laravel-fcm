importScripts('https://www.gstatic.com/firebasejs/9.2.0/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/9.2.0/firebase-messaging-compat.js');

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
// Following values are changed for security purpose

firebase.initializeApp( {
    measurementId: "G-CXKE",
    apiKey: "AIzaSyDvQW_x2AiL83TAhBtbi9biPMZPdugW-sY",
    authDomain: "testconnection-345113.firebaseapp.com",
    projectId: "testconnection-345113",
    storageBucket: "testconnection-345113.appspot.com",
    messagingSenderId: "1082956520044",
    appId: "1:1082956520044:web:9c65a57bb966a306219649"
});


const messaging = firebase.messaging();
let  link ="";

messaging.onBackgroundMessage(function(payload) {
    //console.log('[firebase-messaging-sw.js] Received background message ', payload);
    // Customize notification here
    title = payload.notification.title;
    body = payload.notification.body;
    link =  payload.data.link;
    imgLink = payload.data.imgLink;

    console.log('[Received background message ',title+"  "+body+"  "+link );
    const notificationTitle = title;
    const notificationOptions = {
        body: body,
        icon: imgLink,
        image: imgLink
    };

    self.registration.showNotification(notificationTitle, notificationOptions);

});

self.addEventListener('notificationclick', (event) => {
    console.log('On notification click: ', event.notification.tag);

    event.notification.close();
    // This looks to see if the current is already open and
    // focuses if it is
    event.waitUntil(clients.matchAll({
        type: "window"
    }).then((clientList) => {
        for (const client of clientList) {
            if (client.url === '/' && 'focus' in client)
                return client.focus();
        }

        if (clients.openWindow)
            return clients.openWindow(link);
    }));
});
// export const messaging = getMessaging(app);
