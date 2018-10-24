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
  <meta name="description" content="SouthHacks Team Members">
  <meta name="author" content="SouthHacks">

  <title><?php echo $name; ?> Team - Hackathon by High Schoolers for High Schoolers!</title>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Titillium+Web'>
  <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link rel="stylesheet" type='text/css' href="css/custom-m.css">
  <link rel="stylesheet" type='text/css'
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type='text/css' href="css/southhacks.css">
  <link rel="stylesheet" type='text/css' href="css/southhacksteam.css">
  <script src="js/jquery.js"></script>
  <script src="js/southhacksteam.js"></script>
</head>

<body>
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
          <a class="active page-scroll" href="organizers.php">About Us</a>
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


<h2 class="main-header">Meet The Team!</h2>


<div class="cardsContainer">
  <div class="card flip-container top" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/rahul.png" alt="Profile Picture">
        <span class="name">Rahul Shah</span>
        <span class="title">Executive Director</span>

      </div>
      <div class="back">
             <span class="biography">
               <p class="answer">I am currently a Junior at WW-P High School South. I am on the FRC robotics team 1923 and am involved with many clubs and organizations such as STEP For a Better World, Project Pride and Relay for Life; even founding a non-profit, Genesis Code, to help kids learn to code.</p>
             </span>
        <div class="icons">
          <a href="https://www.linkedin.com/in/rshah2020"><img class="icon" src="img/icons/linkedin.png" alt="icon"></a>
          <a href="https://github.com/rshah2020"><img class="icon" src="img/icons/github.png" alt="icon"></a>
          <a href="mailto:20rs0586@wwprsd.org"><img class="icon" src="img/icons/mail.png" alt="icon"></a>

        </div>
      </div>
    </div>
  </div>
</div>

  <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/aditya.png" alt="Profile Picture">
        <span class="name">Aditya Patil</span>
        <span class="title">Executive Director</span>

      </div>
      <div class="back">
                    <span class="biography">
                        <p class="answer">I am a high school junior at WW-P HSS. I have programmed and pitched the main applications of 3 award winning hacks in MLH organized hackathons. I am currently interested in Computer Vision, Natural Language Processing, Robotics, Blockchain and the idea of Quantum Cryptography.</p>
                </span>
        <div class="icons">
          <a href="https://www.linkedin.com/in/aditya-patil1/"><img class="icon" src="img/icons/linkedin.png"
                                                                    alt="icon"></a>
          <a href="https://github.com/AdityaFRC"><img class="icon" src="img/icons/github.png" alt="icon"></a>
          <a href="mailto:aditya@southhacks.com"><img class="icon" src="img/icons/mail.png" alt="icon"></a>
        </div>
      </div>
    </div>
  </div>

<div class="cardsContainer">
  <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/krishnan.png" alt="Profile Picture">
        <span class="name">Krishnan Ram</span>
        <span class="title">Director of Technology</span>

      </div>
      <div class="back">
                    <span class="biography">
                    <p class="answer">I am a high school Junior curious about all things Deep Learning and Application Development. I have programmed and pitched the main applications of 5 award winning hacks in MLH organized hackathons. I am currently interested in Computer Vision, Neural Networks, and the idea of an ASI-level neural network web hosted on a quantum computer.</p>
                </span>
        <div class="icons">
          <a href="https://www.linkedin.com/in/krishnan-ram/"><img class="icon" src="img/icons/linkedin.png" alt="icon"></a>
          <a href="mailto:krishnan@southhacks.com"><img class="icon" src="img/icons/mail.png" alt="icon"></a>
          <a href="https://github.com/KHRAMS"><img class="icon" src="img/icons/github.png" alt="icon"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/temp.png" alt="Profile Picture">
        <span class="name">Pasha Hakim</span>
        <span class="title">Public Relations Liaison</span>

      </div>
      <div class="back">
                    <span class="biography">
                <p class="answer">I am a Junior at WW-P High School South in the state of New Jersey. I have been to hackathons and they have changed my coding experience and my life as a result. In my free time I like to improve my coding skills specifically with Android Development and Arduino UNO's along with speaking French.</p>
            </span>
        <div class="icons">
          <!--<a href="https://www.linkedin.com/in/pasha"><img class="icon" src="img/icons/linkedin.png" alt="icon"></a>-->
          <a href="mailto:pasha@southhacks.com"><img class="icon" src="img/icons/mail.png" alt="icon"></a>
          <a href="https://github.com/PashaHakim"><img class="icon" src="img/icons/github.png" alt="icon"></a>
        </div>
      </div>
    </div>
  </div>

</div>


<div class="cardsContainer">
  <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/temp.png" alt="Profile Picture">
        <span class="name">Nalin Dwivedi</span>
        <span class="title">Workshop Coordinator</span>
      </div>
      <div class="back">
                    <span class="biography">
                    <p class="answer">I am a Senior at South. I am an officer in both my school's Computer Science Innovator and MIT App Inventor clubs along with being an active member of the swim team. I have attended many Hackathons including HackRPI, HackDartmouth, and HackRU. Data Science is my passion and I wish to explore it even more in the future!</p>
                    </span>
        <div class="icons">
          <!--<a href="https://www.linkedin.com/in/nalin"><img class="icon" src="img/icons/linkedin.png" alt="icon"></a>-->
          <a href="https://github.com/NalinDwivedi"><img class="icon" src="img/icons/github.png" alt="icon"></a>
          <a href="mailto:19nd####@wwprsd.org"><img class="icon" src="img/icons/mail.png" alt="icon"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/temp.png" alt="Profile Picture">
        <span class="name">Ishaan Ivaturi</span>
        <span class="title">Website Developer</span>

      </div>
      <div class="back">
                    <span class="biography">
                    <p class="answer">Insert Bio here.</p>
                </span>
        <div class="icons">
          <!--<a href="https://www.linkedin.com/in/ishaan"><img class="icon" src="img/icons/linkedin.png" alt="icon"></a>-->
          <a href="https://github.com/IshaanIvaturi"><img class="icon" src="img/icons/github.png" alt="icon"></a>
          <a href="mailto:20ii####@wwprsd.org"><img class="icon" src="img/icons/mail.png" alt="icon"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="cardsContainer">
  <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/temp.png" alt="Profile Picture">
        <span class="name">Deepansha Singh</span>
        <span class="title">Organizer</span>

      </div>
      <div class="back">
                    <span class="biography">
                    <p class="answer">Insert Bio here.</p>
                </span>
        <div class="icons">
          <!--<a href="https://www.linkedin.com/in/deepansha"><img class="icon" src="img/icons/linkedin.png" alt="icon"></a>-->
          <a href="mailto:deepanshasingh@gmail.com"><img class="icon" src="img/icons/mail.png" alt="icon"></a>
          <a href="https://github.com/MaTh-PhYsIcS-GiRl"><img class="icon" src="img/icons/github.png" alt="icon"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="card flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
      <div class="front">
        <img class="profilePic" src="img/teamPics/temp.png" alt="Profile Picture">
        <span class="name">Kai Campbell</span>
        <span class="title">Graphic Designer</span>

      </div>
      <div class="back">
                    <span class="biography">
                    <p class="answer">Insert Bio here.</p>
                </span>
        <div class="icons">
          <!--<a href="https://www.linkedin.com/in/kai/"><img class="icon" src="img/icons/linkedin.png" alt="icon"></a>-->
          <a href="https://github.com/KaiCampbell117"><img class="icon" src="img/icons/github.png" alt="icon"></a>
          <a href="mailto:kai@gmail.com"><img class="icon" src="img/icons/mail.png" alt="icon"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="cardsContainer">
  </div>
  <br/>
</div>

<footer class="m-footer page-footer yellow">
  <div class="footer-copyright">
    <div class="container">
      <details>
        <summary class="green-text text-darken-4"><?php echo $name; ?> &copy; 2017-2018</summary>
        <p class="grey-text"> - by
          <a class="link" href="https://github.com/IshaanIvaturi"><?php echo $webDesigner; ?></a>. All Rights Reserved.</p>
      </details>
    </div>
  </div>
</footer>


<script src="js/southhacksteam.js"></script>
<script src="js/foodsplash.js"></script>

</body>
</html>
