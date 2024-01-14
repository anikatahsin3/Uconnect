<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

</head>
<body>
  <div class="container">

    <h1>Create A Teacher</h1>

    <form>
      <input type="text" id="id" placeholder="Enter Your Username">

      <div class="spaceboxv"></div>

      <input type="text" id="name" placeholder="Enter Your Name">  

      <div class="spaceboxv"></div>

      <input type="int" id="counseling_time_start" placeholder="Enter Your Starting Counseling Time">
      
      <div class="spaceboxv"></div>

      <input type="int" id="counseling_time_end" placeholder="Enter Your Ending Counseling Time">
      
      <div class="spaceboxv"></div>

      <button id="add">Add Teacher</button>
      
      <div class="spaceboxv2"></div>

      <button id="cancel">Cancel</button>
      
    </form>
  </div>
    
  <script>src="https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js"</script>
  <script>src="https://www.gstatic.com/firebasejs/9.10.0/firebase-database.js"</script>


  <!-- <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from ;
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
    const provider = new GoogleAuthProvider();
    const auth = getAuth();

  </script> -->

  <script>
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "firebase/app";
    import { getAnalytics } from "firebase/analytics";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyB8gUjanpZbOHz6ZgofNSGYspRV-dU8XtM",
      authDomain: "project-b5516.firebaseapp.com",
      projectId: "project-b5516",
      storageBucket: "project-b5516.appspot.com",
      messagingSenderId: "812653669678",
      appId: "1:812653669678:web:89d82566668b076c975ebf",
      measurementId: "G-FR0GRYZRKG"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
  </script>

  <script> src="connect.js"</script>

</body>


</html>