<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact/style.css">
</head>
<body>
<?php include 'header2.php';?>
<section class="contact">
    <div class="content">
		<h2>Contact Us </h2>
		<p></p>
	</div>
	<div class="container">
		<div class="contactInfo">
			<div class="box">
			<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
	    <div class="text">
			<h3>Address </h3>
			<p>Pampaimadu,<br>
				Vavuniya.<br>
				Sri Lanka.
			</p>
		</div>
	</div>
	
	<div class="box">
			<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
	    <div class="text">
			<h3>Telephone</h3>
			<p>Tel : +94 24 222 2265<br>
			Fax : +94 24 222 2265</p>
		</div>
	</div>
	
	<div class="box">
			<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
	    <div class="text">
			<h3>Email</h3>
			<p>Email : info@vau.ac.lk</p>
		</div>
	</div>
	</div>
	
	<div class="contactForm">
	<form>
          <h2>Send Message</h2>  
		  <div class="inputBox">
            <input type="text" name=""  required>
			<span>Full Name</span>
		  </div>
		  
		  <div class="inputBox">
            <input type="text" name=""  required>
			<span>Email</span>
		  </div>
		  
		  <div class="inputBox">
		  <textarea required="required"></textarea>
			<span>Type your Message...</span>
		  </div>
		  
		  <div class="inputBox">
		  <input type="submit" name="" value="send">
		  </div>
		  
	</form>
	</div>
	</div>
</section>
<?php include 'footer.php';?>     
</body>
</html>