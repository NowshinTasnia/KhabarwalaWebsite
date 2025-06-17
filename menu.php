<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <title>Khabarwala</title>

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
    <!-- header section Starts -->
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

    <?php include('search.php'); ?>

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.png" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Pizza</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.png" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Smoky Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-ffry.png" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>French Fry</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-sand.png" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Sandwich</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-hotdog.png" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Hot Dog</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-momo.png" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Chicken Steam Momo</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-nood.png" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Chicken Noodles</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-biriani.png" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Kacchi Biriani</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-samosa.png" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Tasty Spicy Samosa</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-luchi.png" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Luchi Alur Dom</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- fOOD Menu Section Ends Here -->


    <!-- footer Section Starts Here -->
    <!-- footer inspired from ewu -->
    
    <?php include('footer.php'); ?>

    <!-- footer Section Ends Here -->




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