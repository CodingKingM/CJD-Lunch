<?php
    session_start();
    $TextValue = "";
    $TotalVote = 0;
?>
    <?php
   
   // echo ( 'voted is '. $_SESSION['voted']);  to test if code works 
   $filename = 'pizzacounter.txt'; // counter file
   $fp = fopen( $filename,"r"); // open counter file for READING ("r")
   $counter = fread($fp, filesize($filename) ); // read in value
   fclose( $fp ); // close it whilst we work

   if($_SESSION['voted'] == 0){
     ++$counter; // increase the counter by one
     $_SESSION['voted'] = 1;
     $TextValue = "Thank you for your vote!";
   }
   else{
     $TextValue = "You have already voted!";
   }
 
   $TotalVote = $counter;

   $fp = fopen( $filename,"w"); // open it for WRITING ("w")
   fwrite( $fp, $counter); // write in the new value
   fclose( $fp ); // close it ?>

   <?php $temp = fopen("pizzacounter.txt", "r"); 
   if(!$temp){ echo "could not open the file" ; } 
   else { $counter = ( int ) fread ($temp,20) ; fclose ($temp) ; 
   
    $temp = fopen("pizzacounter.txt", "w" ) ; 
   fwrite($temp,$counter) ; fclose ($temp) ; } ?> 

<!DOCTYPE html>
<html>
    <head>
      
      <link rel="stylesheet" href="../css/background_styles.css">
      <link rel="stylesheet" href="../css/styles.css">
      <title>Dishes</title>
      <script src="../js/script.js" defer></script>
      <meta charset="utf-8">
      <meta name="description" content="This is a website which allows the students to choose their upcoming dishes in school cafeteria">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="voting, school, lunch, CJD, cjd, Spaghetti">
      <meta name="author" content="IB student">
     <style>
     .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}

</style> 
      
    </head>
  
    <body>
      <div id="page-container">
        <div id="content-wrap">
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
          <h1  class=topic><?php echo $TextValue; ?></h1>
          
          </div>
          
          <div class="holdingcontainer">
        
            
             
              
        
               <div class="internalcontainerpizza"><img src="../img/pizza.jpg" alt="pizza" width="100%"></a><h4>Whole Wheat Pizza Dough, Classic red sauce, fresh mozzarella, basil and olive oil.</h4><h2>266 Calories</h2><h2>Vegetarian</h2>
               <h2> Total votes = <?php echo $counter; ?></h2> 
              


<div class="textquestion"><h2>Are you a pizza lover for sure ? </h2> 
    <input type=button id="tryagainbutton" onClick="location.href='quizpizza.html'" value='Test me !'>
    
        </div>
        

    
    
    

  </div>
 
              
          </div>   
    </div>
    
        

        
      <!-- // footer --> 
      
    </body>
    <div class="footer">
    <div class="footer-bottom">
          Designed by an IB student | <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a>
     </div>
    
</html>







      
            





    


