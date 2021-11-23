// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyCkCR-dAaWpxV4HwVz8tIWMt3iHzmSRczE",
    authDomain: "login-fcb6d.firebaseapp.com",
    projectId: "login-fcb6d",
    storageBucket: "login-fcb6d.appspot.com",
    messagingSenderId: "584422330699",
    appId:"1:584422330699:web:31c2d624f62186c79418ce"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  // Initialize variables
  const auth = firebase.auth()
  const database = firebase.database()
  
  // Set up our register function
  function register () {
    // Get all our input fields
    email = document.getElementById('email').value
    password = document.getElementById('password').value
    full_name = document.getElementById('full_name').value

  
    // Validate input fields
    if (validate_email(email) == false || validate_password(password) == false) {
      alert('El campo de email o contraseña estan vacios!!')
      return
      // Don't continue running the code
    }
    if (validate_field(full_name) == false ) {
      alert('el campo del nombre esta vacio!!')
      return
    }
   
    // Move on with Auth
    auth.createUserWithEmailAndPassword(email, password)
    .then(function() {
      // Declare user variable
      var user = auth.currentUser
  
      // Add this user to Firebase Database
      var database_ref = database.ref()
  
      // Create User data
      var user_data = {
        email : email,
        full_name : full_name,
        last_login : Date.now()
      }
  
      // Push to Firebase Database
      database_ref.child('users/' + user.uid).set(user_data)
  
      // DOne
      alert('Usuario Autorizado!!')
      window.location.href='alumno.php';
    })
    .catch(function(error) {
      // Firebase will use this to alert of its errors
      var error_code = error.code
      var error_message = error.message
  
      alert(error_message)
    })
  }
  
  // Set up our login function
  function login () {
    // Get all our input fields
    email = document.getElementById('email').value
    password = document.getElementById('password').value
  
    // Validate input fields
    if (validate_email(email) == false || validate_password(password) == false) {
      alert('el email o la contraseña estan vacios!!')
      return
      // Don't continue running the code
    }
  
    auth.signInWithEmailAndPassword(email, password)
    .then(function() {
      // Declare user variable
      var user = auth.currentUser
  
      // Add this user to Firebase Database
      var database_ref = database.ref()
  
      // Create User data
      var user_data = {
        last_login : Date.now()
      }
  
      // Push to Firebase Database
      database_ref.child('users/' + user.uid).update(user_data)
  
      // DOne
      alert('User Logged In!!')
      window.location.href='alumno.php';

  
    })
    .catch(function() {
      // Firebase will use this to alert of its errors
     // var error_code = error.code
     // var error_message = error.message

  
      alert("el usuario es invalido")
    })
  }
  
  
  
  
  // Validate Functions
  function validate_email(email) {
    expression = /^[^@]+@\w+(\.\w+)+\w$/
    if (expression.test(email) == true) {
      // Email is good
      return true
    } else {
      // Email is not good
      return false
    }
  }
  
  function validate_password(password) {
    // Firebase only accepts lengths greater than 6
    if (password < 6) {
      return false
    } else {
      return true
    }
  }
  
  function validate_field(field) {
    if (field == null) {
      return false
    }
  
    if (field.length <= 0) {
      return false
    } else {
      return true
    }
  }