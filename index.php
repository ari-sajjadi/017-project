<?php
require_once "asset/PHP/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="asset/Images/icons/favicon_package_v0.16/apple-touch-icon-180x180.png" type="image"
    sizes="150x150">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Anton|Baloo|Dosis|Libre+Baskerville|Modak|Rasa"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="asset/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="asset/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="asset/css/styles.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gewürz-suiss</title>
</head>

<body>
  
  <header class="main-header">

    <nav>
      <ul>
        <!--nav bar-->

        <ul>
          <li><a id="logoLink" href="index.html"><img class="ml" src="asset/Images/my-logo.jpeg"></a></li>
        </ul>
        <!--colock-->

        <ul id="navBottons">
                    <!--searching bar-->
          <li><input id="searchNavSearch" class="search-text" type="text" name="Search" value="" required="required"
              placeholder="Search"></li>
          <li><input id="searchNavBotton" class="search-bottom" type="submit" name="submit" value="!"></li>

          <!--account basket language icons-->
          <li><a href="index.html"><img class="acc" src="asset/Images/acc.png" alt="Account"></a></li>
          <li><a href="index.html"><img class="acc" src="asset/Images/bask.png" alt="Basket"></a></li>
          <li><a href="index.html"><img class="acc" src="asset/Images/langu.png" alt="language"></a></li>
        </ul>
      </ul>
    </nav>

  </header>

  <main>

    <div class="hero-image">
      <div class="scroll-link-links">
        <div> <a class="scroll-link" href="#Subtitle-link">About Spices</a></div>
        <div> <a class="scroll-link" href="#Shop-link">Shop</a></div>
        <div> <a class="scroll-link" href="#Joks">Have fun !</a></div>
        <div> <a class="scroll-link" href="#History">History</a></div>
        <div> <a class="scroll-link" href="#Subscribe">Subscribe</a></div>
      </div>

    </div>
    
    <div class="change-color-bg" id="Subtitle-link">
      <?php include "asset/PHP/SpiceText.php";?>
      <?php include "asset/PHP/EarlyHistory.php";?>
    </div>

    <div id="mySidepanel" class="sidepanel">
      <?php include "asset/PHP/SlidePanel.php"; ?>
    </div>

    <button class="openbtn" onclick="openNav()"></button>

    <div class="parallax1" id="Shop-link">
      <div class="parallax-nav">
        <a class="scroll-link-bg" href="#Shop-link">Shop</a>
        <a class="scroll-link-bg" href="#secound-link">Second</a>
        <a class="scroll-link-bg" href="#third-link">Third</a>

        <!--Shopping slidshow script-->
        <div class="shopping-slidshow small">
          <?php  echo slidshow_items(); ?>
          <!-- <div class="card"><img class="shoping-images" src="./asset/Images/shopping slidshow/1.jpg"
              alt="shoping-slideshow 1">
            <h1>Spices</h1>
            <p class="price">CHF 9.99</p><button>Add to Cart</button>
          </div>
              -->
        </div>
      </div>


    </div>

    <div class="change-color-bg" id="Joks">

    <?php include "asset/PHP/Attention.php";?>  
    </div>

    <div class="parallax2" id="secound-link">
      <div class="parallax-nav">
        <a class="scroll-link-bg" href="#Shop-link">Shop</a>
        <a class="scroll-link-bg" href="#secound-link">Second</a>
        <a class="scroll-link-bg" href="#third-link">Third</a>
      </div>
    </div>

    <div class="change-color-bg" id="History">
      
    <?php include "asset/PHP/EarlyModernPeriod.php";?>  
    </div>

    <div class="parallax3" id="third-link">
      <div class="parallax-nav">
        <a class="scroll-link-bg" href="#Shop-link">Shop</a>
        <a class="scroll-link-bg" href="#secound-link">Second</a>
        <a class="scroll-link-bg" href="#third-link">Third</a>
      </div>
    </div>
    <footer>
      <div class="change-color-bg" id="Subscribe">
        <h1 class="viewport">
          <span class="scroll-link-bg">Newsletter</span> 
        </h1>
        <p class="pointer-slideshow">
          Subscribe here to our newsletter and get more information on our products, seasonal
          offers, news, special offers, recipes and much more. 
          <input type="email" id="email_address" name="email_address" value=""required="required" placeholder="Email address" class="">
          <input type="submit" class="Subscribe" id="submit"name="submit" value="">
        </p>
        <p class="pointer-slideshow">
          <!--social network fixed panel-->
          <ul class="snt">
            <li><a href="https://www.facebook.com/"><img class="snt-images" src="asset/Images/snfb.png"></a></li>
            <li><a href="https://www.instagram.com/"><img class="snt-images" src="asset/Images/snins.png"></a></li>
            <li><a href="https://www.youtube.com/"><img class="snt-images" src="asset/Images/snyt.png"></a></li>
            <li><a href="https://plus.google.com/"><img class="snt-images" src="asset/Images/sngp.png"></a></li>
            <li><a href="https://twitter.com/"><img class="snt-images" src="asset/Images/sntw.png"></a></li>
          </ul>
        </p>

      </div>

    </footer>
    <!--shopping slidshow script-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="asset/slick/slick.min.js"></script>
    <script src="asset/js/functions.js"></script>
    <script src="asset/js/script.js"></script>
  </main>
</body>

</html>