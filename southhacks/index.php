<?php

  $name = "SouthHacks";
  $webDesigner = "Ishaan Ivaturi";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
        content="SouthHacks is the official 24 hour high school hackathon hosted by the West Windsor-Plainsboro Regional School District, a district composed of two schools spanning a variety of subjects from engineering and computer science to health and performing arts. Located in West Windsor, New Jersey, we welcome all high schoolers!">
  <meta name="author" content="southhacks">
  <meta property="og:url" content="http://southhacks.com"/>
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="SouthHacks - WW-P HSS 24 Hour Hackathon for High School Students"/>
  <meta property="og:description"
        content="SouthHacks is the official 24 hour high school hackathon hosted by the West Windsor-Plainsboro Regional School District, a district composed of two schools spanning a variety of subjects from engineering and computer science to health and performing arts. Located in West Windsor, New Jersey, we welcome all high schoolers!"
  />
  <meta property="og:image" content="img/logo.png"/>
  <title>SouthHacks - Hackathon @ WW-P High School South</title>

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" type='text/css' href='https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700'>
  <link rel="stylesheet" type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type='text/css' href="css/custom-m.css">
  <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type='text/css'
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type='text/css'
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" type='text/css' href="css/southhacks.css">

  <!-- JS -->
  <noscript>
    <meta http-equiv="refresh" content="0;URL='death.php?error=javascript_disabled'"/>
  </noscript>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>new WOW().init();</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top">
        <span class="black-text"><span class="light">South</span>Hacks</span>
      </a>
    </div>

    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="hidden">
          <a href="index.php#page-top"></a>
        </li>
        <li>
          <a class="page-scroll" href="info.php">Info</a>
        </li>
        <li>
          <a class="page-scroll" href="schedule.html">Schedule</a>
        </li>
        <li>
          <a class="page-scroll" href="sponsors.html">Sponsors</a>
        </li>
        <li>
          <a class="page-scroll" href="organizers.php">About Us</a>
        </li>
        <li>
          <a class="page-scroll" href="index.php#register">Register</a>
        </li>
        <li>
          <a class="page-scroll" href="index.php#contact">Contact</a>
        </li>
      </ul>
    </div>

  </div>

</nav>

<div class="intro poly-section">
  <div class="intro-body animated fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-md-6">

          <br/>
          <img itemprop="image" class="img-responsive text-center logoimg" alt="southhacks Logo" src="img/logo.png"/>
          <p itemprop="description" class="fancy intro-text">Innovate to change!!</p>

        </div>
        <div class="col-md-6">
          <img class="img-resonsive text-center tinylogoimg" alt="WWPRSD Logo" src="img/sponsors/WWP.png"/>
          <img class="img-resonsive text-center tinylogoimg" alt="CSI Logo" src="img/sponsors/CSI.png"/>

          <div class="infoContainer">
            <a class="btn btn-warning info"
               href="https://www.google.com/maps/place/346+Clarksville+Rd,+Princeton+Junction,+NJ+08550/@40.305586,-74.6209027,17z/data=!3m1!4b1!4m5!3m4!1s0x89c3e0eaee4864a5:0x6d8c985027a83486!8m2!3d40.305586!4d-74.618714"
               target="_blank">
              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span> &nbsp;Princeton Junction, NJ
            </a>

            <!--The href is going to link to the facebook event when we make it.-->
            <a class="btn btn-success info" href="schedule.html">
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"> </span> &nbsp;November 24 - 25
            </a>

            <a class="btn btn-info info page-scroll" href="schedule.html">
              <span class="glyphicon glyphicon-time" aria-hidden="true"> </span>&nbsp;8:00 AM - 10:30 PM
            </a>
          </div>
        </div>
        <div class="animated infinite bounce delay-10s col-md-8 col-md-offset-2 down" id="down-arrow">
          <a href="#register" class="btn btn-circle center-align page-scroll">
            <i class="fa fa-angle-double-down animated"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="register" class="content-section text-center">
  <div class="container">
    <div class="row">
      <div class="row subtitle-row">
        <h2 class="col-md-12 col-xs-12 col-sm-12 font-semibold">Registration</h2>
        <p>Registration will be opening soon. Keep checking in to secure your spot at the event!</p>
      </div>
    </div>

    <br>

  </div>

</section>
<section id="contact" class="content-section text-center poly-section">
  <div class="container">
    <div class="row">
      <div class="row subtitle-row">
        <h2 class="col-md-12 col-xs-12 col-sm-12 font-semibold">Contact us</h2>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 text-center">
        <p>Any other questions? Contact us at
          <a class="with-hover-text" target="_blank" href="mailto:contact@southhacks.com">contact@southhacks.com</a>
        </p>
      </div>
    </div>
    <br>
    <br>
    <br>
    <!-- Just FYI none of these are created yet -->
    <div class="row contact-images">
      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 image">
        <a href="https://www.instagram.com/southhacks/">
          <img class="img-responsive contactimg" alt="instagram" src="img/icons/insta.png"/>
        </a>
      </div>
      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 image">
        <a href="https://www.twitter.com/southhacks">
          <img class="img-responsive contactimg" alt="twitter" src="img/icons/twitter.png"/>
        </a>
      </div>
      <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4 image">
        <a href="https://www.facebook.com/southhacks">
          <img class="img-responsive contactimg" alt="facebook" src="img/icons/fb.png"/>
        </a>
      </div>
    </div>
  </div>
</section>
<section id="footer" class="text-center">
  <div class="footclass">
    <a class="foot" href="southhackswaiver.pdf">Waiver</a>
    <a class="foot" href="organizers.php">Team</a>
  </div>
</section>

<footer class="m-footer page-footer yellow">
  <div class="footer-copyright">
    <div class="container">
      <details>
        <summary class="green-text text-darken-4">SouthHacks &copy; 2017-2018</summary><br>
        <p class="grey-text"> - by
          <a class="link" href="https://github.com/IshaanIvaturi">Ishaan Ivaturi</a>. All Rights Reserved.</p>
      </details>
    </div>
  </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/southhacks.js"></script>

</body>

</html>
