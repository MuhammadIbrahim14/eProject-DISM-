<?php
session_start();
include 'Admin/connection.php';

if (isset($_SESSION['username'])) {
    header("location: userpanel/index.php");
}

if (isset($_POST['loginBtn'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $check =  "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";
    $q = mysqli_query($connect, $check);
    $row_count = mysqli_num_rows($q);
    $fetch = mysqli_fetch_assoc($q);
    //    echo $row_count;

    if ($row_count == 1) {
        $_SESSION['username'] =  $fetch['username'];
        $_SESSION['useremail'] =  $fetch['email'];
        $_SESSION['userrole'] =  $fetch['role_id'];

        if ($fetch['role_id'] == 1) {
            header("location: Admin/index.php");
        } else if ($fetch['role_id'] == 2) {
            header("location: User/index.php");
        }
    } else { ?>
        <div class="alert alert-danger" role="alert">
            Username OR password is Incorrect.
        </div>

<?php
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
                <form action="#">
                    <h2>SIGN IN</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn">Sign In</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>

                </form>

            </div>



            <div class="form-box register">
                <form action="#">
                    <h2>SIGN UP</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label>Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms and conditions</label>
                    </div>

                    <button type="submit" class="btn">SIGN UP</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Sign In</a></p>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <script src="userpanel/js/script.js"></script>
</body>

</html>