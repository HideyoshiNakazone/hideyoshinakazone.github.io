<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Hideyoshi - Creative Simple Portfolio Page</title>
        <link rel="icon" href="img/logohideyoshi-red.png">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/src/grid.css" />
        <link rel="stylesheet" type="text/css" href="css/src/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css" />
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="862936948821-qb8ed21v73anjg9oke7iu2cc4vmeabmf.apps.googleusercontent.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/59950f6906.js" crossorigin="anonymous"></script>
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Hideyoshi - Moderno">
        <link rel="manifest" href="./manifest.json">
    </head>
    <body>
	    <div class="container">
            <div class="login-content">
                <form action="index.php">
                    <img src="img/undraw_profile_pic_ic5t.png">
                    <h2 class="title">Welcome</h2>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input">
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input">
                    </div>
                    </div>
                    <a href="#">Forgot Password?</a>
                    <a href="./signup.html">Signup</a>
                    <button type="submit">login</button>
                </form>
            </div>

            <div class="separator"></div>

            <div class="social">

                <div class="g-signin2" data-onsuccess="onSignIn" 
                data-scope="https://www.googleapis.com/auth/plus.login" data-accesstype="offline"
                data-redirecturi="https://hideyoshinakazone.github.io/Moderno"
                data-theme="dark" data-width="300" data-height="50"
                data-longtitle="true" data-lang="pt-BR">
                </div>
            
                <!-- <button class='logout' onclick="Logoutfuncion()">Sign Out</button>

                <script>
                function LogoutFunction() {
                    gapi.auth2.getAuthInstance().signOut().then(function () {
                    console.log('User signed out.');
                    location.reload();
                    });

                }
                </script> -->
                
            </div>
        
        </div>
        <script src="./js/login.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </body>
</html>