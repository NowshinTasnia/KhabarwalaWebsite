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
    <?php include'header.php'; ?>

    <!-- fOOD category Section -->
    <section class="food-category">
        <div class="container">
            <h2 class="text-center">category of foods</h2>
            <div class="box-container">
                <a href="#" class="box">
                    <img src="images/cat-1.png" alt="">
                    <h4>appetizer</h4>
                </a>
                <a href="#" class="box">
                    <img src="images/cat-2.png" alt="">
                    <h4>main dish</h4>
                </a>
                <a href="#" class="box">
                    <img src="images/cat-3.png" alt="">
                    <h4>dessert</h4>
                </a>
                <a href="#" class="box">
                    <img src="images/cat-4.png" alt="">
                    <h4>snacks</h4>
                </a>
                <a href="#" class="box">
                    <img src="images/cat-5.png" alt="">
                    <h4>drinks</h4>
                </a>
            </div>
        </div>
    </section>
    
    <?php include'footer.php'; ?>



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