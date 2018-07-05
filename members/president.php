<?php

  $prez = "Jessica Shah";
  $grade = "senior";
  $gender = "She"; # either 'She' or 'He' only
  $vorg1 = "STEP";
  $vorg2 = "Relay For Life";

  $club = "the West Windsor-Plainsboro Soccer Association";
  $positioninclub = "big sister";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>President - <?php echo $prez; ?></title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css" type="text/css"
        rel="stylesheet"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>new WOW().init();</script>
</head>
<body class="green">
<nav class="yellow darken-2" role="navigation">
  <div class="nav-wrapper container">
    <a id="logo-container" href="../index.html" class="brand-logo pulse animated">
      <small>Project&nbsp;Pride</small>
    </a>
    <ul class="right hide-on-med-and-down bounce animated">
      <li><a href="../members.html">Members</a></li>
      <li><a href="../years.html#2015">2015</a></li>
      <li><a href="../years.html#2016">2016</a></li>
      <li><a href="../years.html#2017">2017</a></li>
      <li><a href="../years.html#2018">2018</a></li>
      <li><a href="../contact.php">Contact</a></li>
    </ul>

    <ul id="nav-mobile" class="sidenav">
      <li><a href="members.html">Members</a></li>
      <li><a href="years.html#2015">2015</a></li>
      <li><a href="years.html#2016">2016</a></li>
      <li><a href="years.html#2017">2017</a></li>
      <li><a href="years.html#2018">2018</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </div>
</nav>
<div class="container">
  <div class="valign-wrapper">
    <div class="mobileHide left"><img class="genphoto" src="../images/Jessica_Shah.png"></div>&nbsp;
    <div class="mobileHide animated fadeInUp right"><span class="animated pulse"><strong><?php echo $prez; ?> – President</strong> is currently a <?php echo $grade; ?>
        at High School South. <?php echo $gender; ?>
        enjoys volunteering with various organizations such as <?php echo $vorg1; ?>, <?php echo $vorg2; ?>, Project Pride etc. <?php echo $gender; ?>
        is a <?php echo $positioninclub; ?> for <?php echo $club; ?>. She loves shopping, concerts, meeting new people-socializing, traveling & being with her friends and family. She loves volunteering with <?php echo $vorg1; ?>
        because you physically see the direct impact that one person has (yourself) and how much a difference you can make in a persons life.</span>
    </div>
  </div>
  <div class="center container valign-wrapper">
    <div class="mobileShow center"><img class="center genimg" src="../images/Jessica_Shah.png"></div>&nbsp;
  </div>
  <div class="valign-wrapper">
    <div class="mobileShow animated fadeInUp container"><h1><strong><?php echo $prez; ?> – President: </strong></h1>
      <h3>is currently a <?php echo $grade; ?> at High School South. <?php echo $gender; ?> enjoys volunteering with
        various organizations such as <?php echo $vorg1; ?>, <?php echo $vorg2; ?>, Project Pride
        etc. <?php echo $gender; ?> is a <?php echo $positioninclub; ?> for <?php echo $club; ?>. She loves shopping,
        concerts, meeting new people-socializing, traveling & being with her friends and family. She loves volunteering
        with <?php echo $vorg1; ?> because you physically see the direct impact that one person has (yourself) and how
        much a difference you can make in a persons life.</h3></div>
  </div>
</div>
</body>
</html>