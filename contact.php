<?php

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Html5xcss3 - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Html5xcss3 dot com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>

    
	<meta charset="utf-8">
	<title>CryptoFlowerTurbo Lim</title>
	<meta name="description" content="CryptoFlowerTurbo Lim">
	<meta name="author" content="CryptoFlowerTurbo Lim">
	
    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    
  	<link rel="stylesheet" href="zerogrid.css">
	<link rel="stylesheet" href="style.css">
	
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="menu.css">
	<script src="jquery1111.min.js" type="text/javascript"></script>
	<script src="script.js"></script>
	
    <link href="owl.carousel.css" rel="stylesheet">
	
	
	
</head>

<body>
	<div class="wrap-body">
		<div id='cssmenu' class="align-center">
			<ul>
			   <li><a href='index.html'><span>Home</span></a></li>
			   <li class=' has-sub'><a href='#'><span>Blog</span></a>
				  <ul >
					 <li class='has-sub'><a href='#'><span>Item 1</span></a>
						<ul>
						   <li><a href='#'><span>Sub Item</span></a></li>
						   <li class='last'><a href='#'><span>Sub Item</span></a></li>
						</ul>
					 </li>
					 <li class='has-sub'><a href='#'><span>Item 2</span></a>
						<ul>
						   <li><a href='#'><span>Sub Item</span></a></li>
						   <li class='last'><a href='#'><span>Sub Item</span></a></li>
						</ul>
					 </li>
				  </ul>
			   </li>
			   <li><a href='single.html'><span>About</span></a></li>
			   <li class='active last'><a href='contact.html'><span>Contacts</span></a></li>
			</ul>
		</div>
		<header class="">
			<div class="logo">
				<hr class="line-1">
				<a href="#">Vintauge</a>
				<span>Lorem ipsum dolor sit amet</span>
				<hr class="line-1">
			</div>
		</header>
		<section id="container">
			<div class="wrap-container">
				<section class="content-box zerogrid">
					<div class="row wrap-box">
						<h3 class="t-center">Contact Form</h3>
						<center><?php echo $text;?></center>
						<div id="contact_form">
							<form name="form1" id="ff" method="post" action="contact.php">
								<label class="row">
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
										</div>
									</div>
									<div class="col-1-3">
										<div class="wrap-col">
											<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
										</div>
									</div>
								</label>
								<label class="row">
									<div class="wrap-col">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>
								</label>
								<center><input class="sendButton" type="submit" name="submitcontact" value="Submit"></center>
							</form>
						</div>
					</div>
				</section>
				
			</div>
		</section>
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="bottom-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-vimeo"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="copyright">
					2021 Copyright @ - Designed by CryptoFlowerTurbo Lim. All rights reserved. 
				</div>
			</div>
		</footer>
		<script src="owl.carousel.js"></script>
		<script>
		$(document).ready(function() {
		  $("#owl-slide").owlCarousel({
			autoPlay: 3000,
			items : 2,
			itemsDesktop : [1199,2],
			itemsDesktopSmall : [979,1],
			itemsTablet : [768, 1],
			itemsMobile : [479, 1],
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
			pagination: false
		  });
		});
		</script>
	</div>
</body>
</html>