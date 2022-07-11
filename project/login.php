<?php include('server.php') ?>
<style> <?php include('style100.css') ?> </style>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style0.css">
</head>
<body>

<center>
<h1>
<p style = "background-color: #3a2b55; color: blue;" >
  Welcome to John ART </p> </h1>
</center>


  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>


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
 </center>
 </div>

 </div>
 </div>
 </div>


 

</body>
</html>