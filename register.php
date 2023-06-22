<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login and Registration | SBS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
  #btn1{

    margin-left: 25px;
  }
    </style>
<body>

    <header>
        <h2 class="logo">Seat Booking System</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Disabled</a>
        </nav> 
        <span> <a href="login.php"> <button class="btn btn-outline-primary" id="btn1">login</button></a></span>
    </header>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        
        <div class="form-box login">
            <h2>Registration</h2>
            <span>
                <?php
                if(isset($_GET['alert'])){
                    echo $_GET['alert'];
                }
                ?>
            </span>
            <form action="action.php?form=register" method="POST">
                
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" placeholder="Email" name="email" required>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                
                <input type="submit" name="btn_register" class="btn" value="Register">
                <div class="login-register">
                    <p>Already have an account? <a
                     href="#" class="register-link">Login</a></p>
            </form>
        </div>    

        

    </div>
    
    <script src="scripts.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>    