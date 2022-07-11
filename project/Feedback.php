



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
          <li><a href="Contact.php">contact</a></li>
          <li><a class="active"href="#">Feedback</a></li>
      </ul>
      </nav>
      <div class="background"></div>

   <BOdy bgcolor="lightgrey" >
   <head>
   <!-- <title> Feedback </title>
    </head>
    <fieldset >
    <h2>User Information</h2>
 <br>
    <form >   
    Firstname <input  type="textfield" name="text" value="">
    <br> <br>
    Lastname <input  type="textfield" name="text" value="">
    <br> <br>
    Email <input type="email" name="text" value="">
   <br> <br>
    
     <h3>Gender</h3>
     <br>
        Male <input type="radio" name="gender" value="male"> <br>
        Female <input type="radio" name="gender" value="female"> <br>
        other <input type="radio" name="gender" value="other">
        <br> <br>
           <h3>Nationality</h3>
           <select name="list" >
             <option value="Ethiopian">Ethiopian</option>
             <option value="Egyptian">Egyptian</option>
             <option value="American">American</option>
             <option value="Keneyan">Kenyan</option>
             <option value="somalian">Somalian</option>
             <option value="other">Other countries</option>
             </select> <br> <br> 
   
    comment <input type="textarea" name="comment" value="" cols="20" rows="3"hi</textarea> <br>
    <input type="submit" value="Submit" >
    </fieldset>
    
    </form> 
    <br>  -->
	<style>  
	.error {color: #FF0001;}  
	</style> 

   	<?php  	// define variables to empty values  
		$fnameErr =  $lnameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
		$name = $email = $mobileno = $gender = $website = $agree = "";  
	//Input fields validation  
	if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	      
	//String Validation  
	    if (empty($_POST["firstname"])) {  
       $fnameErr = "First Name is required";  
	    } else {  
        $name = input_data($_POST["firstname"]); 	            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $fnameErr = "Only alphabets and white space are allowed";  	            }  
	    } 
//String Validation  
if (empty($_POST["lastname"])) {  
	$lnameErr = "Last Name is required";  
	 } else {  
	 $name = input_data($_POST["lastname"]); 	            // check if name only contains letters and whitespace  
		 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
			 $lnameErr = "Only alphabets and white space are allowed";  	            }  
	 }  
   
 //Email Validation   
 if (empty($_POST["email"])) {  
			 $emailErr = "Email is required";  
	 } else {  
			 $email = input_data($_POST["email"]);  
			 // check that the e-mail address is well-formed  
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
				 $emailErr = "Invalid email format";  
			 }  
	  }  

	   //Number Validation  
	   if (empty($_POST["mobilenumber"])) {  
		$mobilenoErr = "Mobile no is required";  
} else {  
		$mobileno = input_data($_POST["mobilenumber"]);  
		// check if mobile no is well-formed  
		if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
		$mobilenoErr = "Only numeric value is allowed.";  
		}  
	//check mobile no length should not be less and greator than 10  
	if (strlen ($mobileno) != 10) {  
		$mobilenoErr = "Mobile no must contain 10 digits.";  
		}  
}  


	}
	function input_data($data) {  
		$data = trim($data);  
		$data = stripslashes($data);  
		$data = htmlspecialchars($data);  
		return $data;  
	  }
?>

 
 
<br>  
<form action="insert.php" method="post"> 
    <center>
<h2>Give A Feedback</h2>  </center>
 First Name: <br>
<input type="text" name="firstname">
    <span class="error">* <?php echo $fnameErr; ?> </span> <br>
        <label for = "lastname"> Last Name:  </label><br>
        <input type ="text" name="lastname">
		<span class="error">* <?php echo $lnameErr; ?> </span> <br>
        <label for = "email">Email:   </label><br>
        <input type ="text" name="email">
		<span class="error">* <?php echo $emailErr; ?> </span> <br>

        <label for = "mobilenumber">Mobile Number: </label><br>
        <input type ="text" name="mobilenumber">
		<span class="error">* <?php echo $mobilenoErr; ?> </span> <br>
		<label for = "comment">Comment: </label><br><br>
    	<textarea name="comment" id="comment" style="font-family:sans-serif;font-size:1.2em;">
</textarea>
<input type ="submit" value = "submit" name="submit"><br>
</fieldset>
</form>

<?php  
	    if(isset($_POST['submit'])) {  
	    if($lnameErr == "" && $fnameErr == "" && $emailErr == "" && $mobilenoErr == "") {  
	        echo "<h3 color = #FF0001> <b>Thank you For your feedback.</b> </h3>";  
         
	    } else {  
	        echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
	    }  
	    }  
?>

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
 
 <a href="login.php?logout='1'" style="color: red;" > <br> click to logout</a> 
 </div>


 </center>

 </div>
 </div>
 </div>
 
    </body>
    
</html>
