// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDXBz2mObt-tV1npnKkyRhXf5LGaMjPbk4",
  authDomain: "esp32-firebase-demo-a2731.firebaseapp.com",
  databaseURL: "https://esp32-firebase-demo-a2731-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "esp32-firebase-demo-a2731",
  storageBucket: "esp32-firebase-demo-a2731.appspot.com",
  messagingSenderId: "348114550644",
  appId: "1:348114550644:web:0ccf1976c11079a20f7621",
  measurementId: "G-XTG08J87CE"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);