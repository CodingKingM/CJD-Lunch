<?php
    session_start();

    if( isset( $_SESSION['voted'] ) ) {
      $_SESSION['voted'] = 1;
   }else {
      $_SESSION['voted'] = 0;}

   /* echo ( 'voted is '. $_SESSION['voted']); */ 

?>


<!DOCTYPE html>
<html>
    <head>
      
      <link rel="stylesheet" href="../css/background_styles.css">
      <link rel="stylesheet" href="../css/styles.css">
      <title>Home </title>
      <script src="../js/script.js" defer></script>
      <meta charset="utf-8">
      <meta name="description" content="This is a website which allows the students to choose their upcoming dishes in school cafeteria">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="voting, school, lunch, CJD, cjd">
      <meta name="author" content="IB student">
      
      
    </head>
    <body>
      <div id="page-container">
        <div id="content-wrap">
          <!-- all other page content -->
      
      <div class="">
        <nav class="navbar">
          <div class="brand-title">CJD Lunch</div>
          <a href="#" class="toggle-button">                       
            <span class="bar"></span>                              
            <span class="bar"></span>
            <span class="bar"></span>
          </a>
          <div class="navbar-links">
            <ul>
              <li><a href="../pages/index.php">Home</a></li>
              <li><a href="../pages/dishes.html">Dishes</a></li>
              <li><a href="../pages/foodbytes.html">Foodbytes</a></li>
              <li><a href="../pages/faq.html">FAQ</a></li>
              <li><a href="../pages/forum.html">Forum</a></li>
              <li><a href="../pages/feedback.html">Feedback</a></li>
              
              
            </ul>
          </div>
          </nav>  
        </div>


        

        <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../img/img1.jpg" style="width:100%">
    <div class="text">Lunch Hall</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../img/img2.jpg" style="width:100%">
    <div class="text">Lunch Hall</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../img/img3.jpg" style="width:100%">
    <div class="text">Lunch Hall</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>


<div class="containerhome">
  <div class="box-1">
    <h1>Welcome to CJD lunch!</h1>
    <p>
        This is the ultimate website that you are going to need as a school member. Through out this webiste, you are able to select your favourite <a href="dishes.html"> Dish</a>, kindly keep in mind that you can only vote for one Dish at a time, multiple votes will not be counted!. Would you like to learn more on healthy diets and how to stay fit and healthy? Then you can will find the best diet for you on our <a href="foodbytes.html"> Foodbytes</a> page. If you have a common question then you will find the answer for it on our <a href="faq.html"> FAQ</a> page. If you would like to leave a <a href="feedback.html"> Feedback</a> then feel free to. The website is still under construction but feel free to roam around!
        <video width=100% height=auto controls>
  <source src="../vid/intro.mp4" type="video/mp4">
  <track src="../vid/intro_en.vtt" kind="subtitles" srclang="en" label="English">
  <track src="../vid/intro_de.vtt" kind="subtitles" srclang="de" label="Deutsch">
</video>
        
</div>
       
    </p>
  </div> 



        </div>


          
        
      <!-- // footer --> 
      <div class="footer">
        <div class="footer-bottom">
          Designed by an IB student | <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a>
        </div>
       
      </div>
    </div>
    </body>
    
</html>