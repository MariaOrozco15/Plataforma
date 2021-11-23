<!DOCTYPE html>

<html lang="es">
    <head>

        <meta charset="utf-8">
        <title>Login + Firebase Database</title>
         <!-- Cool Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
        <!-- Our stylesheet -->
       <link rel="stylesheet" href="estolos.css">
    </head>
    <body>
        
        <div  id="content_container">
            <div id="form_container">
                <div id="form_header_container">
                    <h2 id="form_header"> bienvenida </h2>
                </div>

                <div id="form_content_container">
                    <div id="form_content_inner_container">
                        <input type="text" id="full_name" placeholder="Full name">
                        <input type="email" id="email" placeholder="Email">
                        <input type="password" id="password" placeholder="New Password">

                       
                        <div id="button_container"  >
                            <button onclick="login()" >Login</button>
                            <button onclick="register()">Register</button>
                        </div>
                        
     
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>


    

    <!-- Our script must be loaded after firebase references -->
   <script src="app.js"></script>

</html>