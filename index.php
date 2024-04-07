<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosa Recipes Web</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"</head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<body>
      <!-- BODY HEADER -->
     <header id="nav-head" style="background-color: #F1EAFF">
        <?php 
            include('./shared/nav.php')
        ?>
        <div class="" style="max-width: auto; background-color: #F1EAFF;">
            <div class="hero-container">
                <div class="hero-column">
                        <h2>Experience tasty, aromas, and ambiance intertwine to create unforgettable memories.</h2>
                </div>
                <div class="hero-column">
                    <img src="images/hero.jpg" class="img-fluid rounded-start" alt="..." style="flex-shrink: 0;
                    min-width: 100%;
                    min-height: 100%">
                </div>
            </div>
        </div>
    </header>
     <!-- BODY MAIN SECTION -->
     <main>
        <!-- FREQUENTLY ASKED QUESTIONS -->
        <div id='faq'>
            <h1 style="text-align: center;">Frequently Asked Questions</h1>
            <div class="faq-item">
                <div class="question" onclick="toggleAnswer('faq1')">
                    <h6>How can I find delivery restaurant around me?<span class="dropdown-icon">&#9660;</span></h6>
                    <div class="answer" id="faq1">Answer</div>
                </div>
            </div>
                
            <div class="faq-item">
                <div class="question" onclick="toggleAnswer('faq2')">
                    <h6>Can I order food with app?<span class="dropdown-icon">&#9660;</span></h6>
                    <div class="answer" id="faq2">Answer</div>
                </div>
            </div>
        </div>  
    </main>
    <!-- FOOTER -->
    <footer class="text-center text-white" id="footer" style="background-color: #910A67">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Links -->
            <section class="mt-5">
            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5">
                <!-- Grid column -->
                <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-white">About us</a>
                </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-white">Products</a>
                </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-white">Awards</a>
                </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-white">Help</a>
                </h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <!-- <div class="col-md-2">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-white">Contact</a>
                </h6>
                </div> -->
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3" />

            <!-- Section: Text  -->
            <!-- <section class="mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <p>
                    CONNECTS
                </p>
                </div>
            </div>
            </section> -->
            <!-- Section: Text -->

            <h6 class="text-uppercase font-weight-bold text-white" id="soc-media">CONNECT WITH US</h6>
            <!-- Section: Social -->
            <section class="text-center mb-5">
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </section>
            <!-- Section: Social -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-white" href="#">sweetrecipte.com</a>
        </div>
        <!-- Copyright -->
    </footer>
        <!-- JAVA SCRIPT LINK -->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>