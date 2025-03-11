<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once '../Controllers/registerController.php';
    require_once '../Controllers/loginController.php';
    $controller = new RegisterController();
    $logincontroller = new LoginController();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['submit'])){
            $controller->register();
        } else {
            $logincontroller->login();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="../wwwroot/css/style_public.css">
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <form action="" method="POST">
                <h1>login</h1>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i><ion-icon name="mail"></ion-icon></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <p>or login with social platforms</p>
                <div class="social-icons">
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-github"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                </div>
            </form>
        </div>
        
        <div class="form-box register">
            <form action="index.php" method="POST">
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                    <i><ion-icon name="person"></ion-icon></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i><ion-icon name="mail"></ion-icon></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i><ion-icon name="lock-closed"></ion-icon></i>
                </div>
                <button type="submit" name="submit" class="btn">Register</button>
                <p>or register with social platforms</p>
                <div class="social-icons">
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-github"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                </div>
            </form>
        </div>
        
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Register</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
        </div>
    </div>
    <script src="../wwwroot/js/script.js"></script>    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>