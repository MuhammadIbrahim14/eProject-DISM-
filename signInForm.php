<?php
session_start();
include('adminpanel/connection.php');
include('adminpanel/preloader.php');


if(isset($_SESSION['user'])){
    header("location: userpanel/index.php");
}

if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];

   $verify =  "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";
   $q = mysqli_query($connect, $verify);
   $row_count = mysqli_num_rows($q);
   $fetch = mysqli_fetch_assoc($q);

//    echo $row_count;
if($row_count == 1){
    $_SESSION['user'] = $fetch['username'];
    $_SESSION['role_id'] = $fetch['role_id'];

    if($fetch['role_id'] == 1){
        header("location: adminpanel/index.php");
    }
    else{
        header("location: userpanel/index.php");
    }
}

}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="userpanel/css/form.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="background"></div>
    <div class="container">
        <div class="content">
            <div class="text-sci">
                <h2>Welcome! <br><span>To Our Website. </span></h2>

                <p>Step into style! Manage bookings, explore services, and enjoy personalized care at your fingertips.
                </p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form method="post">
                    <h2>SIGN IN</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="text" name="username">
                        <label>Username</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password">
                        <label>Password</label>
                    </div>

                    <button type="submit" class="btn" name="submit">Sign In</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="signUpForm.php" class="register-link">Sign Up</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>