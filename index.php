<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <title>Khabarwala</title>
    <link rel="icon" href="images/bg-1.jpg">

    <!-- bootstrap CDN -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


    <!-- OWN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">

    <!-- default css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

</head>

<body>
    <!-- header design -->

    <!-- header design -->
    <header style="background-color: white;">
        <nav class="navbar navbar-expand-lg navigation-wrap">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/logo.jpg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#explore-food">Explore Foods</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.html">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faq">FAQ</a>
                        </li>
                        <li><button class="main-btn">1200 345 123</button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- section-1 top-banner -->
    <section id="home">
        <div class="container-fluid px-8 top-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <h1>Good food choices are good investments.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                            bibendum amet leo. </p>
                        <div class="mt-4">
                            <button class="main-btn">Order now <i class="fa fa-shopping-basket ps-3"></i></button>
                            <button class="white-btn ms-lg-4 mt-lg-0 mt-4">Order now <i
                                    class="fas fa-angle-right ps-3"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <img src="images/bg-1.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- section-2 counter -->
    <section id="counter">
        <section class="counter-section">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-lg-0-mb-md-0-mb-5">
                        <h2>
                            <span id="count1"></span>+
                        </h2>
                        <p>SAVINGS</p>
                    </div>
                    <div class="col-md-3 mb-lg-0-mb-md-0-mb-5">
                        <h2>
                            <span id="count2"></span>+
                        </h2>
                        <p>PHOTOS</p>
                    </div>
                    <div class="col-md-3 mb-lg-0-mb-md-0-mb-5">
                        <h2>
                            <span id="count3"></span>+
                        </h2>
                        <p>REVIEWS</p>
                    </div>
                    <div class="col-md-3 mb-lg-0-mb-md-0-mb-5">
                        <h2>
                            <span id="count4"></span>+
                        </h2>
                        <p>ORDERS</p>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <!-- section-3 about -->
    <section id="about">
        <div class="about-section wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
                        <div class="card border-0">
                            <img src="images/bg-2.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 text-sec">
                        <h2>We pride ourselves on making real food from the best ingredients.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                            bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
                        <button class="main-btn mt-4">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="container food-type">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                        <h2>We make everything by hand with the best possible ingredients.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                            bibendum in sit amet leo. Mauris feugiat erat tellus. Far far away, behind the word
                            mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="list-unstyled py-3">
                            <li>Etiam sed dolor ac diam volutpat. </li>
                            <li>Erat volutpat aliquet imperdiet. </li>
                            <li>purus a odio finibus bibendum.</li>
                        </ul>
                        <button class="main-btn mt-4">Learn More</button>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="card border-0">
                            <img src="images/bg-4.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-3 story-->
    <section id="story">
        <div class="story-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-content">
                            <h2>When a man's stomach is full it makes no
                                difference whether he is rich or poor.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                                bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- section-4 explore food-->
    <section id="explore-food">
        <div class="explore-food wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-content text-center">
                            <h2>Explore Our Foods</h2>
                            <p>"One cannot think well, love well, sleep well, if one has not dined well." - Virginia
                                Woolf</p>
                            <p>"All you need is love. But a little chocolate now and then doesn't hurt." - Charles M.
                                Schulz</p>
                            <p>"The secret of success in life is to eat what you like and let the food fight it out
                                inside." - Mark Twain</p>
                            <p>"Cooking is like love. It should be entered into with abandon or not at all." - Harriet
                                Van Horne</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="images/food-7.png" class="img-fluid">
                            <div class="pt-3">
                                <h4>Vegetable Samosa</h4>
                                <p>Time: 5 - 7 Minutes | Serves: 1</p>
                                <span>$10.00<del>$20.00</del></span>
                                <button class="mt-4 main-btn">Order Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="images/food-8.png" class="img-fluid">
                            <div class="pt-3">
                                <h4>Chicken Noodles Soup</h4>
                                <p>Time: 10 - 15 Minutes | Serves: 1</p>
                                <span>$50.00<del>$100.00</del></span>
                                <button class="mt-4 main-btn">Order Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                        <div class="card">
                            <img src="images/food-9.png" class="img-fluid">
                            <div class="pt-3">
                                <h4>Garlic Butter Steak</h4>
                                <p>Time: 20 - 30 Minutes | Serves: 1</p>
                                <span>$200.00<del>$300.00</del></span>
                                <button class="mt-4 main-btn">Order Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- section gallery  -->
    <section class="gallery" id="gallery">
        <div class="heading">
            <span>
                <h2 style="text-align: center;">Our Gallery</h2>
            </span>
            <h4 style="text-align: center;">our untold stories</h4>
        </div>
        <div class="gallery-container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="images/food-1.png" class="box">
                        <img src="images/food-1.png" alt="">
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="images/food-2.png" class="box">
                        <img src="images/food-2.png" alt="">
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="images/food-3.png" class="box">
                        <img src="images/food-3.png" alt="">
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="images/food-4.png" class="box">
                        <img src="images/food-4.png" alt="">
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="images/food-5.png" class="box">
                        <img src="images/food-5.png" alt="">
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="images/food-6.png" class="box">
                        <img src="images/food-6.png" alt="">
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </a>
                </div>
            </div>
            <!-- <a href="images/food-5.png" class="box">
                <img src="images/food-5.png" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/food-6.png" class="box">
                <img src="images/food-6.png" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/food-7.png" class="box">
                <img src="images/food-7.png" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/food-8.png" class="box">
                <img src="images/food-8.png" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/food-9.png" class="box">
                <img src="images/food-9.png" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a>
            <a href="images/food-10.png" class="box">
                <img src="images/food-10.png" alt="">
                <div class="icon"><i class="fas fa-plus"></i></div>
            </a> -->
        </div>
    </section>



    <!-- Section-5 reviews-->
    <section id="reviews">
        <div class="wrapper reviews-section">
            <div class="container text-center">
                <div class="text-center pb-4">
                    <h2>reviews</h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-10 offset-lg-1">
                        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <img src="images/man-1.png">
                                        <p>"This dish is like a journey—simple yet full of layers.
                                            Every bite brings something new, balanced, and harmonious.
                                            It’s comforting, yet thought-provoking."</p>
                                        <h5>Kim Namjoon - Rapper</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <img src="images/man-2.png">
                                        <p>"This dish is amazing! The flavors hit just right—so bold,
                                            yet smooth. It’s super comforting but exciting at the same time.
                                            Definitely love it!"</p>
                                        <h5>Kim Taehyung - Visual</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <img src="images/man-3.png">
                                        <p>"This dish is like a beautiful painting—every bite is a new color,
                                            blending perfectly. It’s elegant, yet so warm and inviting.
                                            Really unforgettable."</p>
                                        <h5>Jeon Jungkook - Main Vocalist</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section-6 faq-->
    <section id="faq">
        <div class="faq-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center pb-4">
                            <h2>frequently asked questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>is khabarwala's bread really baked fresh each day?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                            bibendum in sit amet leo. Mauris feugiat erat tellus. Far far away, behind the word
                            mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            Separated they live in Bookmarksgrove.</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>is khabarwala's bread really baked fresh each day?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                            bibendum in sit amet leo. Mauris feugiat erat tellus. Far far away, behind the word
                            mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            Separated they live in Bookmarksgrove.</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>is khabarwala's bread really baked fresh each day?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                            bibendum in sit amet leo. Mauris feugiat erat tellus. Far far away, behind the word
                            mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            Separated they live in Bookmarksgrove.</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~</span>is khabarwala's bread really baked fresh each day?</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus
                            bibendum in sit amet leo. Mauris feugiat erat tellus. Far far away, behind the word
                            mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            Separated they live in Bookmarksgrove.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- section-7 book-food-->
    <section id="book-food">
        <div class="book-food">
            <div class="container book-food-text">
                <div class="row text-center">
                    <div class="col-lg-9 col-md-12">
                        <h2>Baked fresh daily by bakers with passion.</h2>
                    </div>
                    <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
                        <button class="main-btn">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- section-8 footer basic-1 -->
    <!-- <footer id="footer">
        <div class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" class="footer-link">Register</a>
                        <a href="#" class="footer-link">Forum</a>
                        <a href="#" class="footer-link">Affiliate</a>
                        <a href="#" class="footer-link">FAQ</a>
                        <div class="footer-social pt-4 text-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="footer-copy">
                            <div class="copy-right text-center pt-5">
                                <p class="text-light">Nowshin Tasnia &copy Copyright</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->


    <!-- footer inspired from ewu -->
    <footer class="footer">
        <div class="footer-top">
            <img src="images/logobg.jpg" class="footer-logo-img" />
        </div>
        <div class="footer-container">
            <div class="footer-column contact-info">
                <h3>khabarwala</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Reservation</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
                <!-- <p>8 A/2, Jahurul Islam Avenue<br>
                    Jahurul Islam City, Aftabnagar<br>
                    Dhaka-1212, Bangladesh</p>
                <p>
                    <strong>Phone:</strong> 09666775557, Ext. - 234<br>
                    <strong>Mobile:</strong> +8801755587224, +8801851933094 (Hotline)
                </p>
                <p>
                    <strong>Email:</strong> <a href="mailto:admissions@ewubd.edu">admissions@ewubd.edu</a><br>
                    <a href="mailto:info@ewubd.edu">info@ewubd.edu</a>
                </p> -->
            </div>
            <div class="footer-column student">
                <h3>contact info</h3>
                <ul>
                    <li><i class="fa fa-map-marker-alt me-3"></i>Dhanmondi, Dhaka 1204</li>
                    <li><i class="fa fa-phone-alt me-3"></i>+880 1234 678 910</li>
                    <li><i class="fa fa-envelope me-3"></i>khabarwala@khabar.com</li>
                </ul>
            </div>
            <div class="footer-column university">
                <h3>opening hours</h3>
                <ul>
                    <li style="font-weight: bold;">Sunday - Thursday</li>
                    <li><i class="me-3"></i>10:00 AM - 10:00 PM</li>
                    <li style="font-weight: bold;">Friday - Saturday</li>
                    <li><i class="me-3"></i>10:00 AM - 5:00 PM</li>
                </ul>
            </div>
            <div class="footer-column quick-links">
                <h3>quick links</h3>
                <ul>
                    <li><i class="fab fa-twitter me-3"></i><a
                            href="https://twitter.com/khabarwala">www.twitter.com/Khabarwala</a></li>
                    <li><i class="fab fa-facebook-f me-3"></i><a
                            href="https://facebook.com/khabarwala">www.facebook.com/Khabarwala</a></li>
                    <li><i class="fab fa-youtube me-3"></i><a
                            href="https://youtube.com/khabarwala">www.youtube.com/Khabarwala</a></li>
                    <li><i class="fab fa-linkedin-in me-3"></i><a
                            href="https://linkedin.com/in/khabarwala">www.linkedin.com/in/Khabarwala</a></li>
                    <li><i class="fab fa-telegram me-3"></i><a
                            href="https://telegram.com/khabarwala">www.telegram.com/Khabarwala</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Developed and maintained by ICS, EWU | Copyright &copy; 2022 East West University</p>
            <p>179,394,979 Total view | 17,044,430 Views Today</p>
        </div>
    </footer>



    <!-- another footer style 1 -->
    <!-- <section>
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeInUp">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4>company</h4>
                        <a href="" class="btn btn-link">About</a>
                        <a href="" class="btn btn-link">Connect Us</a>
                        <a href="" class="btn btn-link">Reservation</a>
                        <a href="" class="btn btn-link">Privacy Policy</a>
                        <a href="" class="btn btn-link">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- another footer style 2 -->
    <!-- <section>
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeInUp">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4> <a
                            href="" class="btn btn-link">About Us</a>
                        <a href="" class="btn btn-link">Contact Us</a>
                        <a href="" class="btn btn-link">Resevation</a>
                        <a href="" class="btn btn-link">Privacy Policy</a>
                        <a href="" class="btn btn-link">Teams & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contect</h4>
                        <p class="mb-2'><i class=" fa fa-map-marker-alt"></i>123 Strat, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt"></i>+012 345 654410</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>Info@example.com</p>
                        <div class="d-flex pt-2">
                            <a href="" class="btn btn-outline-light btn-social "><i class="fab fa-twitter"></i></a> <a
                                href="" class="btn btn-outline-light btn-social "><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="btn btn-outline-light btn-social "><i class="fab fa-youtube"></i></a>
                            <a href="" class="btn btn-outline-light btn-social "><i class="fab fa-linkedin-in"></i></a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09M - 09PM</p>
                        <h5 class="text-light fw-normal"> Sunday</h5>
                        <p>10AM
                    </div>
                    08PM</p>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, totam.</p>
                        <div class="position-relative mx-auto ">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text">
                            <button class="btn btn-primary py-2 position-absolute top-0 end-0 me-2">SingUp</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center mb-3 mb-md-6 col-lg-12">
                            &copy; <a class="border-bottom" href="">Your Site Name, All right Reserved </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->




    <!-- ================================================================= -->
    <!-- ===================         J S     ============================= -->
    <!-- ================================================================= -->

    <!-- OWN JS -->
    <script src="js/script.js"></script>

    <!-- Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D"
        crossorigin="anonymous"></script>
    <!-- default js -->
    <!-- <script src="js/bootstrap.min.js"></script> -->

</body>

</html>