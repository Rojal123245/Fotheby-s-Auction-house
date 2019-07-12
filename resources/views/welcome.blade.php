
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fortheby Auction house</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="lib/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="lib/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="lib/css/flaticon.css"/>
        <link rel="stylesheet" href="lib/css/magnific-popup.css"/>
        <link rel="stylesheet" href="lib/css/owl.carousel.css"/>
        <link rel="stylesheet" href="lib/css/style.css"/>
        <!-- Styles -->

    </head>
    <body>
            <div id="preloder">
                <div class="loader">
                    <img src="lib/img/logo.svg" alt="">
                    <h2><i class="fa fa-gavel"></i>&nbsp;Loading.....</h2>
                </div>
            </div>


            <!-- Header section -->
            <header class="header-section">
                <div class="logo">
                    <img src="lib/img/logo.svg" alt=""><!-- Logo -->
                </div>
                <!-- Navigation -->
                <div class="responsive"><i class="fa fa-bars"></i></div>
                <nav>
                    <ul class="menu-list">
                        <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
                      
                        <li><a href="{{ route('frontgallery')}}">Gallery</a></li>
                        <li><a href="{{ route('userlogin') }}">login</a></li>
                        <li><a href="{{ route('userRegistration')}}">Register</a></li>

                    </ul>
                </nav>
            </header>
     <div class="hero-section">
        
         <!-- slider -->
         <div id="hero-slider" class="owl-carousel">
             <div class="item  hero-item" data-bg="lib/img/01.jpg"></div>
             <div class="item  hero-item" data-bg="lib/img/02.jpg"></div>
            
         </div>
     </div>
     <!-- Intro Section -->


     <!-- About section -->
     <div class="about-section">
         <div class="overlay"></div>

         <!-- card section end-->


         <!-- About contant -->
         <div class="about-contant">
             <div class="container">
                 <div class="section-title">
                     <h2>About US</h2>
                 </div>
                 <div class="row">
                     <div class="col-md-6">
                         <p>Fotheby's Auction house have been on the market who have different items which are expensive adn worthy enough to bid on. Many high profile people come here to bid the items which are very valuable.</p>
                     </div>
                     <div class="col-md-6">
                         <p>Be the part of Fotheby's Auction Join us by sending the registration form.</p>
                     </div>
                 </div>
             
             </div>
         </div>
     </div>

  
            </div>
        </div>
        <footer class="footer-section">
            <h2>2019 Fotheby's All rights reserved.</h2>
        </footer>
        <script src="lib/js/jquery-2.1.4.min.js"></script>
        <script src="lib/js/bootstrap.min.js"></script>
        <script src="lib/js/magnific-popup.min.js"></script>
        <script src="lib/js/owl.carousel.min.js"></script>
        <script src="lib/js/circle-progress.min.js"></script>
        <script src="lib/js/main.js"></script>
