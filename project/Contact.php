
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
    
    </head>
    <body class="body">
    <nav>
    <div class="logo">
    <div class="box"></div>
      </div>
      <ul>
          <li><a href="Home.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="Gallary.php">Gallary</a></li>
          <li><a class="active" href="#">contact</a></li>
          <li><a href="Feedback.php">Feedback</a></li>

      </ul>
      </nav>

<style type = "text/css">

h1 { font-family: "comic sans Ms"; 
}
</style>
<h1>
<p style = "background-color: #3a2b55; color: blue;" >
   Join Me On Social Medias </p> </h1>
    
<br>
       <ul>
    <h3>          
    <li><a href="https://www.facebook.com/822744764497279/posts/?app=fbl">FACEBOOK</a></li>
    <li><a href="https://instagram.com/yohannes_ll?utm_medium=copy_link">INSTAGRAM</a></li>
    <li><a href="https://t.me/Johnnwork">TELEGRAM</a></li>
    <li><a href="https://vm.tiktok.com/ZMLdpoJQJ/">TIKTALK</a></li>
</h3>
    </ul>
<br> <br><br><br><br><br><br><br><br><br><br><br><br><br>
    

  <center>
  <div id="footer">
  <div class="container">
  <div class="footer_sub">
  <h2>About</h2>
 <p> Yohannis Girma is an architecture, sketcher and photographer who is studiying in University of Gonder,
 <span><a href="About.html">Read more...</a></span>
 </p>
 </div>

 <div class="footer_sub_2">

 <h2>IMPORTANT LINKS</h2>
 <ul>
 <li><a href="Home.html">HOME</a></li>
 <li><a href="About.html">ABOUT</a></li>
 <li><a href="Gallary.html">Gallery</a></li>
 <li><a href="contact.html">contact</a></li>
 <li><a href="feedback.html">feedback</a></li>
 </ul>
 </div>

  <div class="footer_sub_2">
  <center>
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
        
        
   
    </body>
    
</html>