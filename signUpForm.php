<?php

include('adminpanel/connection.php');
include('adminpanel/preloader.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="userpanel/css/form.css">
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
                <div class="form-box register">
                    <form action="#" method="post">
                        <h2>SIGN UP</h2>
                    
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" name="firstName">
                            <label>First Name</label>
                            <span id="firstNameError" class="error-message"></span>
                        </div>
                    
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" name="lastName">
                            <label>Last Name</label>
                            <span id="lastNameError" class="error-message"></span> 
                        </div>
                    
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-envelope'></i></span>
                            <input type="email" name="email">
                            <label>Email</label>
                            <span id="emailError" class="error-message"></span> 
                        </div>
                    
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="text" name="username">
                            <label>Username</label>
                            <span id="passwordError" class="error-message"></span> 
                        </div>
                    
                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                            <input type="password" name="password">
                            <label>Password</label>
                            <span id="confirmPasswordError" class="error-message"></span> 
                        </div>
                    
                        <div class="remember-forgot">
                            <label><input type="checkbox" name="terms"> I agree to the terms and conditions</label>
                            <span id="termsError" class="error-message"></span> 
                        </div>
                    
                        <button type="submit" name="signupBtn" class="btn" onclick="validateForm(event)">SIGN UP</button>
                    
                        <div class="login-register">
                            <p>Already have an account? <a href="signInForm.php" class="login-link">Sign In</a></p>
                        </div>
                    </form>
                                 

                </div>
            </div>
        </div>

</body>
<!-- <script src="userpanel/js/scriptV.js"></script> -->
</html>


<?php 
if(isset($_POST['signupBtn'])){
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $role_id = 4;

    $insert = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `username`, `password`, `role_id`)
    VALUES ('$fname', '$lname', '$email', '$uname', '$pass', '$role_id')";
    $q = mysqli_query($connect, $insert);

    if($q){
        echo "<script>
        alert('account created');
        window.location.href = 'signInForm.php';
        </script>";
    }
}
?>