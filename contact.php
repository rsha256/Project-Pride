<?php
  
  if (isset($_POST['submit'])) {
    $to = "rahuldshah3@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#ffd700">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#ffd700">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Project&nbsp;Pride</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="js/emailcheck.js"></script>
</head>
<body>
<nav class="yellow darken-2">
  <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">Project&nbsp;Pride</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="members.html">Members</a></li>
      <li><a href="years.html#2015">2015</a></li>
      <li><a href="years.html#2016">2016</a></li>
      <li><a href="years.html#2017">2017</a></li>
      <li><a href="years.html#2018">2018</a></li>
      <li><a href="calendar.html">Calendar</a></li>
      <li><a class="z-depth-1-half green" href="contact.php">Contact</a></li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
      <li><a href="members.html">Members</a></li>
      <li><a href="years.html#2015">2015</a></li>
      <li><a href="years.html#2016">2016</a></li>
      <li><a href="years.html#2017">2017</a></li>
      <li><a href="years.html#2018">2018</a></li>
      <li>
        <a href="https://calendar.google.com/calendar/embed?src=fgu42cddsutnkvodadjmj94uik%40group.calendar.google.com&ctz=America%2FNew_York" target="_blank">Calendar</a>
      </li>
      <li><a class="z-depth-1-half green" href="contact.php">Contact</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>
<div class="darken-1 green section no-pad-bot">
  <div class="container">
    <h2 class="header center yellow-text">Project&nbsp;Pride</h2>
    <div class="row center">
      <h5 class="header col s12 light">Fill out this form to join!</h5>
    </div>
    <div class="row">
      <form name="frm" method="post" class="col s12" action="contact.php">
        <div class="row">
          <div class="input-field col s6">
            <input name="first_name" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input name="last_name" id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate" required>
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <input placeholder=" For Example: I would like to join Project Pride!" id="subject" name="message" type="text" required>
            <label for="subject">Message</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light" onclick="check()"
                type="submit"
                name="submit" value="Submit">Submit
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>

    <br>
    <br>
    <br>

  </div>
</div>

<footer class="page-footer yellow darken-1">
  <h3 class="center black-text">Our locations:</h3>
  <br>
  <br>
  <div class="center row">
    <div class="left">
      <h4 class="black-text">High School South</h4>
      <iframe width="100%" height="150%" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCXS5Mib6FZvLrvlkspkY69ro4ug6_tdyA&amp;q=346+Clarksville+road,West+Windsor+NJ"></iframe>
    </div>
    <img class="center transp-background" src="images/logo.png">
    <div class="right">
      <h4 class="black-text">Grover Middle School</h4>
      <iframe width="100%" height="150%" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCXS5Mib6FZvLrvlkspkY69ro4ug6_tdyA&amp;q=10+Southfield+road,West+Windsor+NJ"></iframe>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <span class="black-text">Made by <a class="" href="https://github.com/rshah2020">Rahul Shah</a></span>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
