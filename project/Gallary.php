  


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
        <title>Art Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
      
    <body class="body">
    <section>
    <nav>
    </label>
    <div class="logo">
    <div class="box"></div>
    </div>
         <ul>
           <li><a href="Home.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a class="active" href="#">Gallary</a></li>
          <li><a href="Contact.php">contact</a></li>
          <li><a href="Feedback.php">Feedback</a></li>
      </ul>
    </nav>
    <div class="background"></div>
    
    <h2> Sketch photos </h2>
    <div class="responsive">
    <div class="gallery">
    <a target="_blank" href="arefa1.jpg">    
    <img src="img2/arefa1.jpg" alt="arefa image" width="600" height="400">
    </a>
    <div class="desc">bubble face sketch art</div>
    </div>
    </div>

     <div class="responsive">
     <div class="gallery">
     <a target="_blank" href="img2/ethio1.jpg">
     <img src="img2/ethio1.jpg" alt="ethio sketch" width="600" height="400">
     </a>
     <div class="desc">peace for ethiopia sketch art</div>
     </div>
     </div>

     <div class="responsive">
     <div class="gallery">
     <a target="_blank" href="img2/koreda1.jpg">
     <img src="img2/koreda1.jpg" alt="koreda skecth picture" width="600" height="400">
     </a>
     <div class="desc"> Ethiopian girl sketch art</div>
     </div>
     </div>

     <div class="responsive">
     <div class="gallery">
     <a target="_blank" href="img2/arafa2.jpg">
     <img src="img2/arafa2.jpg" alt="sketch" width="600" height="400">
     </a>
     <div class="desc"> bubble face sketch art </div>
     </div>
     </div>

   <div class="responsive">
   <div class="gallery">
   <a target="_blank" href="img2/africa1.jpg">
   <img src="img2/africa1.jpg" alt="sketch" width="600" height="600">
    </a>
    <div class="desc"> peace for Africa sketch </div>
    </div>
    </div>

   <div class="responsive">
   <div class="gallery">
   <a target="_blank" href="img2/koreda2.jpg">
   <img src="img2/koreda2.jpg" alt="sketch" width="600" height="400">
   </a>
   <div class="desc"> Ethiopian girl sketch art</div>
   </div>
   </div>

    <div class="responsive">
    <div class="gallery">
    <a target="_blank" href="img2/angil1.jpg">
    <img src="img2/angil1.jpg" alt="sketch" width="600" height="400">
    </a>
    <div class="desc"> i cant let you if you dont bless me</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
    <a target="_blank" href="img2/adey1.jpg">
    <img src="img2/adey1.jpg" alt="sketch" width="600" height="400">
    </a>
    <div class="desc"> Adey abeba</div>
    </div>
    </div>


<div class="clearfix"></div>

<div style="padding:6px;">
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
 <li><a href="Gallery.php">Gallery</a></li>
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

 </div>


 </center>
 
 </div>
 </div>
 </div>
       
    </body>
    
</html>