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

    <!-- header includes -->
    <?php include 'header.php'; ?>

    <!-- section-1 top-banner -->
    <section id="home">
        <div class="container-fluid px-8 top-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <h1>Good food choices are good investments.</h1>
                        <p>Choosing nutritious food fuels your body, sharpens your mind, and boosts your mood—laying the
                            foundation for a healthier, happier, and more energetic life. Invest in yourself with every
                            meal! </p>
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
                        <p>Our meals are crafted with care, using fresh, locally sourced ingredients that nourish your
                            body and delight your taste buds—because you deserve only the best!</p>
                        <button class="main-btn mt-4">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="container food-type">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
                        <h2>We make everything by hand with the best possible ingredients.</h2>
                        <p>We’re passionate about quality, ensuring that every bite is packed with flavor, care, and
                            the dedication to providing you with an unforgettable experience.</p>
                        <ul class="list-unstyled py-3">
                            <li>Handcrafted with care for a truly authentic taste. </li>
                            <li>Dishes made with love, from our kitchen to you. </li>
                            <li>Every bite carefully crafted for maximum enjoyment.</li>
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
                            <h2>When a man's stomach is full it makes no difference whether he is rich or poor.</h2>
                            <p>True happiness comes from within—it's not about wealth, but finding contentment in the
                                simple joys of life, like a satisfying meal shared with loved ones.</p>
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
                        <h4><span>~ </span>What types of cuisines does your website offer recipes for?</h4>
                        <p>We offer a wide range of recipes from various global cuisines, including Italian, Mexican,
                            Asian, Mediterranean, and more. Our goal is to provide something for every taste and dietary
                            preference, whether you're a beginner or an experienced cook.</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~ </span>How can I filter recipes based on my dietary restrictions?</h4>
                        <p>You can use our advanced search filters to find recipes that suit your dietary needs. Whether
                            you're gluten-free, vegan, keto, or have other preferences, we make it easy to discover
                            recipes that fit your lifestyle and tastes.</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~ </span>Can I submit my own recipes to your website?</h4>
                        <p>Yes! We encourage food enthusiasts to share their recipes with our community. Simply visit
                            the "Submit Recipe" section, fill out the form, and provide the necessary details. Our team
                            will review and publish it for others to enjoy.</p>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h4><span>~ </span>Do you offer nutritional information for your recipes?</h4>
                        <p>Yes, we include detailed nutritional information for most recipes. Each recipe comes with
                            calorie counts, macronutrient breakdowns, and serving sizes to help you make informed
                            choices and meet your health goals.</p>
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

    <!-- footer includes -->
    <?php include 'footer.php'; ?>



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