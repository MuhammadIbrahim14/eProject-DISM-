<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
// session_start();

if(!isset($_SESSION['user'])){
    header("location: ../signInForm.php");
}

if($_SESSION['role_id'] == 1){
    header("location: ../adminpanel/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sparlex - Spa Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <!-- <div class="container-fluid topbar d-none d-lg-block">
            <div class="container px-0">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="me-4 text-light"><i
                                    class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="#" class="me-4 text-light"><i
                                    class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="#" class="text-light"><i
                                    class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-square border rounded-circle nav-fill"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="index.php" class="navbar-brand">
                        <img src="../logo.png" alt="" width="150px" height="150px">
                        <!-- <h1 class="text-primary display-4"></h1> -->
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="service.php" class="nav-item nav-link">Services</a>
                            <a href="product.php" class="nav-item nav-link">Product</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="team.html" class="dropdown-item">Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="gallery.html" class="dropdown-item">Gallery</a>
                                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                                    <a href="404.html" class="dropdown-item">404 page</a>
                                </div>
                            </div> -->
                            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>

                                <a href="../signInForm.php"
                                class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">
                                Sign In</a>
                                <a href="../logout.php"
                                    class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">
                                    LogOut</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->