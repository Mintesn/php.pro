
<?php 
  
  session_start(); 

  if (!isset($_SESSION['username'])) {

  	header('location: login.php'); 
  }
 
?>

<style> <?php include 'style100.css'; ?> </style>


<!DOCTYPE html>
   <html>
    <head>
        <META charest="utf-8">
        <title>john Art</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  </head>
    <body class="body">
    <nav>
      <div class="logo">
        <div class="box"></div>
      </div>
      <ul>
          <li><a href="Home.php">Home</a></li>
          <li><a class="active" href="#">About</a></li>
          <li><a href="Gallary.php">Gallary</a></li>
          <li><a href="Contact.php">contact</a></li>
          <li><a href="Feedback.php">Feedback</a></li>
      </ul>
    </nav>
    <div class="background"></div>
    <div class="section2">
    <div class="container">
    <div class="container-section">
    <div class="title">
    
            </div>
             
      <div class="content">
      <div class="color1">
<center> <h1>About</h1> </center> 
      <p> Yohannis Girma is an architecture, sketcher and photographer who is <br> 
          studiying in University of Gonder. He will graguate on 2022Gc. <br>
          From an early age he loved painting. Gragually he developed <br>
          his drawing skills. He is currently painting some very interesting pictures. <br>
          He is also presenting his works at various exhibitions. <br>
          His work proves that he will be one of the most talented artists <br> 
          in Ethiopia in the future. <span><a href="Gallary.php">See his works...</a></span></p> 
</div>

          <div class="button">
                </div>
            </div>
        </div>
        <div class="image-section">
            <img src="img2/johnn.jpg">
        </div>
    </div>


<center>
  <div id="footer">
  <div class="container">
  <div class="footer_sub">
 

  <h2>About</h2>
 <p> Yohannis Girma is an architecture, sketcher and photographer who is studiying in University of Gonder,
 <span><a href="About.php">Read more...</a></span>
 </p> 
 </div>

 <div class="footer_sub_2">

 <h2>IMPORTANT LINKS</h2>
 <ul>
 <li><a href="Home.php">HOME</a></li>
 <li><a href="About.php">ABOUT</a></li>
 <li><a href="Gallery.php">Gallary</a></li>
 <li><a href="contact.php">contact</a></li>
 <li><a href="feedback.php">feedback</a></li>
 </ul>

 </div>

  <div class="footer_sub_2">
 
  <h2>SOCIAL LINKS</h2>
  <ul>
    <li><a href="https://www.facebook.com/822744764497279/posts/?app=fbl">FACEBOOK</a></li>
    <li><a href="https://instagram.com/yohannes_ll?utm_medium=copy_link">INSTAGRAM</a></li>
    <li><a href="https://t.me/Johnnwork">TELEGRAM</a></li>
    <li><a href="https://vm.tiktok.com/ZMLdpoJQJ/">TIKTALK</a></li>
 </ul>
 </center>
 </div>

 </div>
 </div>
 </div>
 </div>
    </body>
    
</html>