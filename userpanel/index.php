<?php
include('../adminpanel/preloader.php');
include('../adminpanel/connection.php');
include('header.php');
?>
    <!-- Modal Search End -->



    <!-- Carousel Start -->
    <!-- <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/carousel-3.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3">Spa & Beauty Center</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Massage Treatment</h1>
                            <p class="mx-md-5 fs-4 px-4 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty
                                Center</h4>
                            <h1 class="display-1 text-capitalize text-dark mb-3">Facial Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-primary text-uppercase mb-3" style="letter-spacing: 3px;">Spa & Beauty
                                Center</h4>
                            <h1 class="display-1 text-capitalize text-dark">Cellulite Treatment</h1>
                            <p class="mx-md-5 fs-4 px-5 mb-5 text-dark">Lorem rebum magna dolore amet lorem eirmod magna
                                erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="#">Get
                                    Start</a>
                                <a class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" href="#">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <!-- Carousel End -->


    <!-- Home section start -->

    <section class="home" id="home">

        <div class="slide active">
            <div class="content">

                <span>Hey There</span>
                <br>
                <span>Elevate your style game with our salon magic!</span>
                <a href="#" class="btn">Book Now</a>
                <div class="controls">
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                </div>
            </div>
            <div class="image">
                <img src="images/main women edit.jpg" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">


                <span>Hey There</span>
                <br>
                <span>Relax, refresh, and radiate confidence with us!</span>
                <a href="#" class="btn">Book Now</a>
                <div class="controls">
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                </div>
            </div>
            <div class="image">
                <img src="images/Man2.jpg" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">

                <span>Glow Inside and Out</span>
                <br>
                <span>Unleash your inner glow with our expert touch!</span>
                <a href="#" class="btn">Book Now</a>
                <div class="controls">
                    <div class="fas fa-angle-left" onclick="prev()"></div>
                    <div class="fas fa-angle-right" onclick="next()"></div>
                </div>
            </div>
            <div class="image">
                <img src="images/Faical.jpg" alt="">
            </div>
        </div>

    </section>

    <!-- discription -->

    <div class="services-section">
        <h2>Our Premium Services</h2>
        <div class="services-container">
            <div class="service-card">
                <i class="fas fa-spa"></i>
                <h3>Spa Services</h3>
                <p>Indulge in ultimate relaxation with our luxurious spa treatments, designed to rejuvenate your mind,
                    body, and soul.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-cut"></i>
                <h3>Hair Services</h3>
                <p>From trendy haircuts to professional styling, color treatments, and nourishing therapies, we craft
                    the perfect look for you.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-hand-sparkles"></i>
                <h3>Manicure</h3>
                <p>Pamper your hands with our exquisite manicure services, featuring beautiful nail art and nourishing
                    hand care.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-shoe-prints"></i>
                <h3>Pedicure</h3>
                <p>Relax and refresh your feet with our soothing pedicure treatments, leaving your feet soft, smooth,
                    and beautiful.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-paint-brush"></i>
                <h3>Makeup Services</h3>
                <p>Enhance your natural beauty with our professional makeup services for every occasion, from casual
                    looks to glamorous events.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-shopping-bag"></i>
                <h3>Cosmetics</h3>
                <p>Explore our exclusive range of high-quality cosmetics, tailored to meet all your beauty needs.</p>
            </div>
        </div>
    </div>

    <!-- background Image -->

    <section class="picture" id="picture">

    </section>

    <!-- background Image -->

    <section class="salon-management">
        <div class="container">
            <h2>About Our Salon Management</h2>
            <p class="description">
                Our salon is managed with precision and care, ensuring that every client has a personalized and
                exceptional experience.
                From the moment you step in, we focus on your needs, offering the highest quality beauty services and
                maintaining a welcoming atmosphere.
                We take pride in our team of expert professionals, who are dedicated to making sure you look and feel
                your best.
                Whether you're here for a quick touch-up or a full makeover, our management ensures that each visit is
                smooth, relaxing, and rewarding.
            </p>
        </div>
    </section>







    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">

                <!-- <p class="fs-4 text-uppercase text-primary">Spa Specialist</p> -->
                <h1 class="display-4 mb-4">Meet Our Experts</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="images/Female Artist1.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Oliva Mia</h3>
                            <p class="mb-0 text-white">Senior Hair Stylist</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="images/Male Artist4.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Henry Thomas</h3>
                            <p class="mb-0 text-white">Barber Specialist</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="images/Artist.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Amelia Luna</h3>
                            <p class="mb-0 text-white">Makeup Artist</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="team-item">
                        <div class="team-img rounded-top">
                            <img src="images/Male Artist7-copy.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                        </div>
                        <div class="team-text rounded-bottom text-center p-4">
                            <h3 class="text-white">Ethan Jack</h3>
                            <p class="mb-0 text-white">Senior Stylist</p>
                        </div>
                        <div class="team-social">
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>


                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="text-center mt-4">
            <button class="team-main btn btn-primary"><a href="team.html"
                    class="text-white text-decoration-none">Discover More</a></button>
        </div>
    </div>


    <!-- Team End -->



    <!-- Why Choose Us Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="images/Team1.jpg" class="img-fluid rounded" alt="Why Choose Us">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 mb-4">Why Choose Us</h2>
                    <p class="mb-3">We are committed to providing exceptional service tailored to your needs. Our team
                        of experts ensures that you receive top-notch treatments in a relaxing and welcoming
                        environment.</p>
                    <p class="mb-3">Here's why we stand out:
                    <ul>
                        <li>Experienced professionals dedicated to excellence</li>
                        <li>State-of-the-art facilities and premium products</li>
                        <li>Personalized care and attention to detail</li>
                        <li>A wide range of services to meet all your beauty needs</li>
                    </ul>
                    </p>
                    <p>Join us to experience the best in beauty and wellness. Your satisfaction is our priority!</p>
                    <div class="text-center mt-4">
                        <button class="team-main btn btn-primary"><a href="about.html"
                                class="text-white text-decoration-none">SEE MORE</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->



    <!-- Home section End -->

<?php
include('footer.php');
?>