<?php session_start();

if (!isset($_SESSION['username'])) {
  //header('locaion:../instrusment/');
  header('locaion:../myinstrusment/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Guitar-chapter2-lesson4</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->

  <link href="css/bootstrap-social.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/small-business.css" rel="stylesheet">
  <link href="css/sidenavuser.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
     <a class="navbar-brand" href="../myinstrusment/" title="home"><img src="img/my instrucment 4.jpg" class = "menupicture" ></a>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon" ></span>
    </button>
    <form action="" accept-charset="UTF-8" class="thanh-tim-kiem">

      <input autocomplete = "off"type="text" name="thanhtimkiem" placeholder=" search..." class="thanhtimkiem">
      <button tabindex="-1" type="submit" class="skill-search-button"></button>
    </form>
    <label for="toggle2" class="search" ><img src="css/css.jpg" style="width: 100%;"></label>
    <input type="checkbox" id="toggle2"/>
    <div class="list-group menu2  " style=" min-width: 100%;" >
      <form action="" accept-charset="UTF-8" class="thanh-tim-kiem2"  >
        <input autocomplete = "off"type="text" name="thanhtimkiem" placeholder=" search..." class="thanhtimkiem1" style="width:100%;">
      </form>
    </div>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../myinstrusment/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="openNav()" > 
            <?php if(isset($_SESSION['username'])) {
              echo $_SESSION['username']; 
            } else {
              header('location:../myinstrusment/login.php');
            }

            ?> 
          </a>
        </li>
        <li class="nav-item  active">
          <div class="dropdown">
            <button type="button" class="btn btn-danger nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Learning</button>
            <div class="dropdown-menu">
              <a class="dropdown-item musictheory-title" href="music-theory.php">Music theory</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item guitar-title" href="guitar.php">Guitar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item piano-title" href="#">Piano</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item violin-title" href="#">Violin</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item flute-title" href="#">Flute</a>
            </div>
          </div>
        </li>
        <li class="nav-item ">
          <div class="dropdown">
            <button type="button" class="btn btn-danger nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="word-spacing: 0.002em">Chord Library</button>
            <div class="dropdown-menu">
              <a class="dropdown-item guitar-title" href="#">Guitar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item piano-title" href="#">Piano</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item violin-title" href="#">Violin</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="user.php">Hồ sơ</a>
  <div class="row">
    <button class="col-md-5 col-lg-5 col-sm-12 col-10"><a href="../myinstrusment/logout.php?action=logout">Sign Out</a></button>
    <button class="col-md-5 col-lg-5 col-sm-12 col-10"><a href="../myinstrusment/login.php">Sign In</a></button>
  </div>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="user.php">Hồ sơ</a>
  <div class="row">
    <button class="col-md-5 col-lg-5 col-sm-12 col-10"><a href="../myinstrusment/logout.php?action=logout">Sign Out</a></button>
    <button class="col-md-5 col-lg-5 col-sm-12 col-10"><a href="../myinstrusment/login.php">Sign In</a></button>
  </div>
</div>
<!-- Page Content -->
<div class="container">

  <div class="row">

   <div class="col-lg-3">
     <label for="toggle"><h1 class="my-4 guitar-title" >guitar</h1></label>
     <input type="checkbox" id="toggle"/>
     <div class="list-group menu1">
      <a href="music-theory.php" class="list-group-item guitar-chapter1-title">Chapter 1: Music theory</a>
      <a href="guitar-chapter2.php" class="list-group-item guitar-chapter2-title">Chapter 2: Guitar overview </a>
      <a href="#" class="list-group-item guitar-chapter3-title">Chapter 3: Chord</a>
      <a href="#" class="list-group-item guitar-chapter4-title">Chapter 4: How to read TAB</a>
      <a href="#" class="list-group-item guitar-chapter5-title">Chapter 5: Fingerstyle's skills</a>
    </div>
    
    
  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row row1">
     <h2 class="guitar-chapter2-lesson4-title" style="padding-left: 10px;">Lesson 4: Guitar notes</h2>
     <h5 class="title-row">A good hand positioning is here also really important to learn to play effectively and properly. Every detail makes all the difference in the world.</h5>
     <div class="col-lg-4 col-md-6 mb-4 box-border">
      <div class="card h-100 title-border">
        <div class="card-body">
          <h4 class="card-title">
            <a href="#" class="title-color">Guitar String Notes (Standard Tuning)</a>
          </h4>
          <h5 class="card-text">In standard tuning these are the open string guitar notes:</h5>
          <img src="img/six-string-guitar-names-2.jpg" class="guitar-chapter2-lesson4-picture">
          <h5 class="card-text">This is the way most guitars are tuned. There are other ways to a tune a guitar that change the guitar notes, but it’s best to avoid alternate tunings while you’re a beginner.</h5>
          <h3 style="color: red;">There are six strings on a guitar. Each string has a name AND a number.</h2>
            <ul style="font-size: 20px;">
              <li >The thickest string is called the <span style="color: red;"><strong>6<sup>th</sup> string</strong></span>. In standard guitar tuning, this is tuned to  <span style="color: red;"><strong>E</strong></span>. We often refer to this as the ‘ <span style="color: red;"><strong>low E string</strong></span>‘. This is the deepest/lowest guitar note you can play.</li>
              <li>The<span style="color: red;"><strong> 5th string</strong></span> is tuned to A, so it’s usually referred to as <span style="color: red;"><strong>the A string</strong></span>.</li>
              <li>The <span style="color: red;"><strong>4th string</strong></span> is tuned to D, so it’s usually referred to as <span style="color: red;"><strong>the D string</strong></span>.</li>
              <li>The  <span style="color: red;"><strong>3rd string</strong></span> is tuned to G, so it’s usually referred to as <span style="color: red;"><strong>the G string</strong></span>.</li>
              <li>The  <span style="color: red;"><strong>2nd string</strong></span> is tuned to B, so it’s usually referred to as <span style="color: red;"><strong> the B string</strong></span>.</li>
              <li>The  <span style="color: red;"><strong>1st string</strong></span> is tuned to  <span style="color: red;"><strong>E</strong></span>. This is the thinnest of all the strings. We often refer to this as  <span style="color: red;"><strong>the ‘high E string’</strong></span>.</li>
            </ul>
            <h5 class="card-text">when you play that notes , you don't have to press any fret, it is called 'open string'.</h5>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4 box-border">
        <div class="card h-100 title-border">
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="title-color">Other notes</a>
            </h4>
            <h5 class="card-text"><span style="color: red;"><strong>remember</strong></span>: in guitar, Half steps are the equivalent of one fret between the starting note and destination note. </h5> <h5>Whole steps are the equivalent of two frets between the starting note and destination note.</h5><h5>So if we were to move from the 3rd fret up a whole step we would end up at the 5th fret. If we were to move from the 5th fret down a half step we would end up on the 4th fret.</h5>
            <img src="img/can-dan-guitar-classic.jpg" style="width: 100%;">
            <h4 style="color: red;">So, you just need to remember open string, you will know all other notes</h4>
            <img src="img/Notes on the guitar.png" style="width: 100%;margin-top: 10px">
            <img src="img/guitar-notes.jpg" style="width: 100%;margin-top: 10px">
            <h3 style="color: red; padding-top: 15px">Half/Whole Steps Across More Than One String: </h3>
            <h5>Whole and half step intervals are the building blocks of scales and movements between chords, so being able to see these relationships across all six strings is hugely beneficial, even if it doesn't seem that big a deal right now. These are the kind of visual references that will help you navigate the fretboard musically and without hesitation.</h5>
            <img src="img/9bb6cdbf2e87034f1819a30dc7fb465f--guitar-notes-guitar-tabs.jpg" style="width: 100%">
          </div>
        </div>
      </div>
      <div class="card-footer card-footer-border">
        <a href ="guitar-chapter2-lesson3.php" class="btn btn-primary btn-lesson-previous">PREIOUS: Notes </a>
        <a href ="guitar-chapter2-lesson5.php" class="btn btn-primary btn-lesson-next">NEXT: How to tune the guitar</a>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">© 2018 My instrument
    320 studio.inc  All rights reserved. </p>
  </div>
  <!-- /.container -->
</footer>
<!--  Nav side -->
<script src="js/sidenav.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
 function openCity1(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  document.getElementById("defaultOpen").click();
</script>
</body>

</html>
