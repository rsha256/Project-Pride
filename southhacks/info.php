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
  <title><?php echo $name; ?> - Hackathon @ WW-P High School South</title>

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" type='text/css' href='https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700'>
  <link rel="stylesheet" type='text/css' href='https://fonts.googleapis.com/css?family=PT+Sans'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type='text/css' href="css/custom-m.css">
  <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type='text/css'
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type='text/css' href="css/info.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="index.php#page-top">
        <!-- <span style="background-color:#FFF;"> -->
        <span class="black-text"><span class="light">South</span>Hacks</span>
        <!-- </span> -->
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

<section id="faq" class="content-section text-center poly-section">
  <div class="container">
    <div class="row">
      <div class="row subtitle-row">
        <h2 class="col-md-12 font-semibold">Information</h2>
        <div class="clearfix"></div>
        <div class="faq-card">
          <div class="card-header">What is <?php echo $name; ?>?</div>
          <div class="card-body">
            <article>
              <i class="material-icons large left">help_outline</i><?php echo $name; ?> is the first Hackathon to ever be hosted
              by the High School South in West Windsor,
              NJ. The Computer Science Club and the School have worked in unison and created the event from the ground
              up.
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">How much does <?php echo $name; ?> Cost to Attend?</div>
          <div class="card-body">
            <article>
              <i class="material-icons large left">money_off</i>A grand total of
              <strong>$0.00</strong>! Just bring your creative spirit and we'll provide the food, eexpertise, and space!
              Please
              note that as of now, we'll be unable to provide any travel reimbursements for this year's <?php echo $name; ?>.
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">Am I eligible to attend this hackathon?</div>
          <div class="card-body">
            <article>
              <i class="material-icons large left">person_pin</i>Any high school student may attend. There is no
              application process, just sign up! If you're
              out of high school, feel free to come and mentor!
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">What If I Can't Code?</div>
          <div class="card-body">
            <article>
              <i class="material-icons large left">new_releases</i><?php echo $name; ?> is the perfect place for you to learn!
              Hackathons are the among the best places
              to learn a new programming language. <?php echo $name; ?> is open to all levels of programmers, and there's no
              better
              way to learn than by doing a project!
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">What should I bring?</div>
          <div class="card-body">
            <article>
              <i class="material-icons small left up">card_travel</i>You should bring your:
              <br>
              <ul>
                <li>Laptop</li>
                <li>Cell Phone</li>
                <li>Chargers for your Devices (laptop, phone, any hardware chargers, etc.)</li>
                <li>Any hardware/electronics you might need</li>
                <li>School ID</li>
                <li>Release Waiver</li>
              </ul>
              Other recommended items include:
              <ul>
                <li>Power strips && Battery Packs</li>
                <li>Pillow (you probably won't use it though)</li>
                <li>Attitude to Learn ;)</li>
              </ul>
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">Where is <?php echo $name; ?>?</div>
          <div class="card-body">
            <article>
              <i class="material-icons large left">directions_car</i><?php echo $name; ?> is located at High School South in the
              state of New Jersey. You can plug this
              address into your GPS:
              <br>
              <code>346 Clarksville Road, Princeton Junction, New Jersey 08550</code>.
            </article>
          </div>
        </div>

        <div class="faq-card">
          <div class="card-header">What do I get?</div>
          <div class="card-body">
            <article>
              <i class="material-icons large left">local_play</i><?php echo $name; ?> offers everyone a lifetime supply of happy
              memories and friends made during this
              weekend. In addition to this amazing prize, a panel of judges will select the best three prizes to win a
              trophy and fantastic prizes. Other awards are given to those using specific technologies and APIs.
              Participants
              will also get tons of free swag and food from sponsoring companies!
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">I know someone who may be willing to sponsor southhacks.</div>
          <div class="card-body">
            <article><i class="material-icons large left">account_balance</i>That's awesome - we always need more
              sponsors for the event. Please let us know their email so that
              we can
              get in touch with them. You can contact us at
              <a class="with-hover-text" target="_blank" href="mailto:contact@southhacks.com">contact@southhacks.com</a>
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">I am an adult who would like to help out with southhacks.</div>
          <div class="card-body">
            <article><i class="material-icons large left">accessibility</i>Perfect! southhacks always needs more mentors
              and adults in the event. If you are able to help us,
              please contact
              us below and we will get in touch as soon as possible. No matter who you are, you can help out!
            </article>
          </div>
        </div>
        <div class="faq-card">
          <div class="card-header">I have other requests and/or questions about southhacks.</div>
          <div class="card-body">
            <article><i class="material-icons large left">announcement</i>We would be glad to hear anything you have to
              say. Let us know your concerns at <a href="index.php#contact">Our Contact Page</a>.
            </article>
          </div>
        </div>
      </div>
    </div>
    <br>

  </div>

</section>

<footer class="m-footer page-footer yellow">
  <div class="footer-copyright">
    <div class="container">
      <details>
        <summary class="green-text text-darken-4"><?php echo $name; ?> &copy; 2017-2018</summary><br>
        <p class="grey-text"> - by
          <a class="link" href="https://github.com/IshaanIvaturi"><?php echo $webDesigner; ?></a>. All Rights Reserved.</p>
      </details>
    </div>
  </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/foodsplash.js"></script>

</body>
</html>
