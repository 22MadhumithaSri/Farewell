<?php
session_start();
if(!isset($_SESSION['roll']))
{
header("location: index.php");
}
$var_value=$_SESSION['username'];
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<style>
.button {
  background-color: #eb6200;

  border-radius: 10px;
  color: white;
  padding: 10px 20px;
  text-align: center;
  font-size: 15px;
  cursor: pointer;
}

.button:hover {
  background-color: orange;
}
</style>

<meta charset="UTF-8"/>

<title>Index</title>

<meta name="description" content="Onepage Multipurpose Bootstrap HTML Template">

<meta name="author" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/theme.css">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

</head>
<body>
<!--wrapper start-->
<div class="wrapper" id="wrapper">
	
	<!--header-->
	<header>
	<div class="banner row" id="banner">		
		<div class="parallax text-center" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummy1.jpg);">
			<div class="parallax-pattern-overlay">
				<div class="container text-center" style="height:600px;padding-top:170px;">
					<a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="img/logo.png" alt="logo"/></a>
					<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Warmy greetings to our Elder Wands!</h2>
				</div>
			</div>
		</div>
	</div>	
	<div class="menu">
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navwrapper">
					<div class="navbar navbar-inverse navbar-static-top">
						<div class="container">
							<div class="navArea">
								<div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li class="menuItem active"><a href="#wrapper">Home</a></li>
										<li class="menuItem"><a href="#aboutus">Upload Memories</a></li>
										<li class="menuItem"><a href="#specialties">Anonymous Messaging</a></li>
										<li class="menuItem"><a href="#gallery">Events Gallery</a></li>
										<li class="menuItem"><a href="#feedback">Hang On</a></li>
									     <li class="menuItem"><a href="signout.php">Sign Out</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</header>
		
	<!--about us-->
	<section class="aboutus" id="aboutus">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
		   <p class="b"></p>
		   <h2><?php echo $var_value ; ?></h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Hey orangies!!
Our memories of yesterday,
Will last lifetime...<br>
Letzz take the best,
And forget the rest!
One fine day <br>we find those days as the best times to admire...</h2>
		</div>			
		<div class="wrapper">
  <center><div class="container">
    <h2>Upload a file</h2>
    <div class="upload-container">
      <div class="border-container">
        <div class="icons fa-4x">
          <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
          <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
          <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
        </div>
        <!--<input type="file" id="file-upload">-->
        <p class="playball" >Browse your Files</p>
        <br>
          <form method="post" enctype="multipart/form-data" action="upload1.php" >
        <button class="button"><input type="file" name="file" multiple></button>
        <br><br>
        <button class="button" id="login" value="Upload File" name="submit">Upload</button><br>
        </form></center>
        </form>


       <script src="upload.js"></script>
      </div>
    </div>
  </div>
</div>
</center>
		</div>
	</div>
	</section>
	
	<!--specialties-->
	<section class="specialties" id="specialties">
	<div class="container">
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Anxious Anonymous</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Hey anonymous!
We are bang on with some interesting tricky sites.
The only thing must be done, is to tag your fellow buddies and just reveal the secretzz!!</h2>
		</div><center>
		 <form method="post" action="message.php" id="signupform">
                    <label for="account">Lets switch to incogonito mode</label><br>
                    <button class="button" id="login">Anonymous Message</button></center>
		
	</div>
	</section>
	
	<!--gallery-->
	<section class="gallery" id="gallery">
		<div class="container">
			<div class="heading text-center">
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>Special Occasions</h2>
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>It's all started with a hello!<br>
Met like a stranger, yet grown as friends...<br>
Days flied as flies!
We all rolled together, fired views  fights..<br>
Now it's a time to explore and share your excited moments!!</h2>
			</div>
			
			
			</div>
	</section>
	
	<!--feedback-->
	<section class="feedback" id="feedback">
	<div class="container w960">
		<div class="heading">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>Hang On</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>I'm floating! I'm flowing!
I'm loving! I'm crying!
Hey orangies! No more worries!
Just smash it off!
Keen your actions to cherish the upcoming days!</h2>
		</div>
		<div class="row">
		<blockquote>I thought of you today but that is nothing new. I thought about you yesterday and days before that too. I think of you in silence, I often speak your name. All I have are memories and your picture in a frame. Your memory is a keepsake from which I'll never part. God has you in his arms, I have you in my heart.</blockquote>
		<blockquote>They know me in a way no one else ever has!
They open me to things, I never knew existed.
They drive me to instantly push me to my depths.
They are the beat of my heart pulse in my veins and the energy in my souls.
Behind us all our memories!
Before us all our dreams!
Around us all who love us!
Within us all we need! </blockquote>
		</div>
	</div>
	</section>
	
	<section class="developers" id="#developers">
	</secton>
	<!--feedback-->
	<section class="contact" id="contact">
	
	 <div class="container w960">
      <div class="row">
		<br><br><br>
      </div>
    </div>
	</section>
  
	<!--footer-->
	<section class="footer" id="footer">
	<p class="text-center">
		<a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
	</p>
	<div class="container">
		

	</div>
	</section>
	
</div><!--wrapper end-->

<!--Javascripts-->
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/menustick.js"></script>
<script src="js/parallax.js"></script>
<script src="js/easing.js"></script>
<script src="js/wow.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/masonry.js"></script>
<script src="js/imgloaded.js"></script>
<script src="js/classie.js"></script>
<script src="js/colorfinder.js"></script>
<script src="js/gridscroll.js"></script>
<script src="js/contact.js"></script>
<script src="js/common.js"></script>

<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'aboutus',
		  2: 'specialties',
		  3: 'gallery',
		  4: 'feedback',
		  5: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	});
});
</script>
</body>
</html>