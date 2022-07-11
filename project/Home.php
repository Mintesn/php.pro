
<?php

$cookie_name = "users";
$cookie_value = "user1";
setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // 86400 = 1 day
// setcookie($cookie_name, $cookie_value, time() - 3600);

?>
<html>
<body>

<?php 
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "";
}
?>


<?php 
  
  session_start(); 

  if (!isset($_SESSION['username'])) {

  	header('location: login.php'); 
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);

  	header("location: login.php");
  }
?>

<style> <?php include 'style100.css'; ?> </style>


      <html>
   
    <head>
        <META charest="utf-8">
        <title>Art Gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <?php
  
  ?>
    </head>
    <body class="body">
    <nav>
    <div class="logo">
          <div class="box"></div>
      </div>

           <ul>
          <li><a class="active" href="#">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href ="Gallary.php">Gallery</a></li>
          <li><a href="Contact.php">contact</a></li>
          <li><a href="Feedback.php">Feedback</a></li>
      </ul>
      </nav>

      <h3>
<p style = "background-color: #3a2b55; color: blue;" >
<center>
    <?php  if (isset($_SESSION['username'])) : ?>
    	Welcome <strong><?php echo $_SESSION['username'];  ?></strong> to The Art Club  
        <a href="login.php?logout='1'" > <br> click to logout</a>  
    	
    <?php endif ?>
    </center>
 </p> </h3>

    <div class="background"></div>
   
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    </style>

<h1> Art is a Secrete Friend and Part of Nature</h1> </div>
 
<br> <br>
<div class="responsive">
     <div class="video">
  <video width="1000" height="500" controls>
  <source src="img2/video1.mp4" type="video/mp4">
  </video>
<h3> video About concept of abscence of fear fear slavery. </h3>
     </div>
     </div>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br><br> <br><br> <br><br> <br><br> <br> <br> <br><br> <br><br> <br><br> <br><br> <br>

<div class="slider">
			<div class="img-box">
				<img src="img/13.jpg" class="slider-img">
			</div>

			<button class="btn" onclick="prev()">Prev</button>
			<button class="btn" onclick="next()">Next</button>
		</div>

		<script src="main.js"></script>


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
 <li><a href="Gallary.php">Gallary</a></li>
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
  
 <a href="login.php?logout='1'" style="color: red;"> <br> click to logout</a> 
 </center>

 
 </div>

 
 </div>
 
 </div>
 
 </div>
   </body>
   </html>