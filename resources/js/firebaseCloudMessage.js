import { initializeApp } from "firebase/app";
import { getMessaging } from "firebase/messaging/sw";

const firebaseConfig = {
    apiKey: "AIzaSyDvQW_x2AiL83TAhBtbi9biPMZPdugW-sY",
    authDomain: "testconnection-345113.firebaseapp.com",
    projectId: "testconnection-345113",
    storageBucket: "testconnection-345113.appspot.com",
    messagingSenderId: "1082956520044",
    appId: "1:1082956520044:web:9c65a57bb966a306219649"
};

const firebaseApp = initializeApp(firebaseConfig);
const messaging = getMessaging(firebaseApp);

export { messaging };
