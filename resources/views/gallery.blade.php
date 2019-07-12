
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fortheby Auction house Gallery</title>

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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
     
            <img src="images/new/<?php echo $img[0]['image']?>" alt="image" style="width:100%; height: 734px;">
            <div class="carousel-caption">
            <h3><?php echo $img[0]['title'];?></h3>
            <p><?php echo $img[0]['description'];?></p>
            </div>
  
        </div>

     <div class="item">
            <img src="images/new/<?php echo $img[1]['image']?>" alt="image" style="width:100%; height: 734px;">
            <div class="carousel-caption">
                <h3><?php echo $img[1]['title'];?></h3>
                <p><?php echo $img[1]['description'];?></p>
            </div>
        </div>

        <div class="item">
            <img src="images/new/<?php echo $img[2]['image']?>" alt="image" style="width:100%; height: 734px;">
            <div class="carousel-caption">
                 <h3><?php echo $img[2]['title'];?></h3>
                <p><?php echo $img[2]['description'];?></p>
            </div>
        </div>

        <div class="item">
            <img src="images/new/<?php echo $img[3]['image']?>" alt="image" style="width:100%; height: 734px;">
            <div class="carousel-caption">
                 <h3><?php echo $img[3]['title'];?></h3>
                <p><?php echo $img[3]['description'];?></p>
            </div>
        </div>

        <div class="item">
            <img src="images/new/<?php echo $img[4]['image']?>" alt="image" style="width:100%; height: 734px;">
            <div class="carousel-caption">
                 <h3><?php echo $img[4]['title'];?></h3>
                <p><?php echo $img[4]['description'];?></p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="fa fa-arrow-left"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="fa fa-arrow-right"></span>
      <span class="sr-only">Next</span>
  </a>
</div>

</body>
<footer class="footer-section">
    <h2>2019 Fotheby's All rights reserved.</h2>
</footer>
<script src="lib/js/jquery-2.1.4.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/magnific-popup.min.js"></script>
<script src="lib/js/owl.carousel.min.js"></script>
<script src="lib/js/circle-progress.min.js"></script>
<script src="lib/js/main.js"></script>