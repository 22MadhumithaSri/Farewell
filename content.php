<?php
session_start();
$var_value =$_SESSION['username'];
if (is_null($var_value))
{
	header ("location: index.php");
}
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
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  font-size: 16px;
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
					<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Warmy greetings to the Adieu!</h2>
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
										<li class="menuItem"><a href="#aboutus">About Us</a></li>
										<li class="menuItem"><a href="#specialties">Specialties</a></li>
										<li class="menuItem"><a href="#gallery">Events Gallery</a></li>
										<li class="menuItem"><a href="#feedback">Hang On</a></li>
										
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
Will last a lifetime...
Letzz take the best,
And forget the rest!
One fine day we find those days as the best times to giggle...</h2>
		</div>			
		<div class="row">
			<div class="col-md-6">
				<div class="papers text-center">
					<img src="http://wowthemes.net/demo/leroy/img/dummies/18.jpg" alt=""><br/>
					
					<h4 class="notopmarg nobotmarg">John Vandeley</h4>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="papers text-center">
					<img src="http://wowthemes.net/demo/leroy/img/dummies/19.jpg" alt=""><br/>
					
					<h4 class="notopmarg nobotmarg">Stephanie Hellen</h4>
					
				</div>
			</div>
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
		</div>
		
	</div>
	</section>
	
	<!--gallery-->
	<section class="gallery" id="gallery">
		<div class="container">
			<div class="heading text-center">
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>Events Gallery</h2>
				<img class="dividerline" src="img/sep.png" alt="">
				<h2>It's all started with a hello!
Met like a stranger, grown as friends...
Days flied as flies!
We all rolled together, fired our views in small fights..
Now it's a time to explore and share your excited moments!!</h2>
			</div>
			
			<div id="grid-gallery" class="grid-gallery">

					<section class="grid-wrap">
						<ul class="grid">
							<li class="grid-sizer"></li><!-- for Masonry column width -->				
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/10.jpg" alt=""/>
									<figcaption><h3>Thundercats next level</h3><p>Portland nulla butcher ea XOXO, consequat Bushwick Pinterest elit twee pickled direct. </p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/11.jpg" alt=""/>
									<figcaption><h3>Bushwick selvage synth</h3><p>Bicycle rights flannel Shoreditch, art party laboris Bushwick sriracha.</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/12.jpg" alt=""/>
									<figcaption><h3>Bottle wayfarers locavore</h3><p>Once there was a little asparagus, he was green and lonely.</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/13.jpg" alt=""/>
									<figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/14.jpg" alt=""/>
									<figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis before they sold out. </p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/15.jpg" alt=""/>
									<figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
								</figure>
							</li>
							
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/16.jpg" alt=""/>
									<figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
								</figure>
							</li>
							
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/17.jpg" alt=""/>
									<figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
								</figure>
							</li>
						
						</ul>
					</section><!-- // end small images -->
					
					<section class="slideshow">
						<ul>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/10.jpg" alt=""/>
									<figcaption><h3>Thundercats next level</h3><p>Portland nulla butcher ea XOXO, consequat Bushwick Pinterest elit twee pickled direct trade vero. </p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/11.jpg" alt=""/>
									<figcaption><h3>Bushwick selvage synth</h3><p>Bicycle rights flannel Shoreditch, art party laboris Bushwick sriracha authentic chambray hella umami sed distillery master cleanse.</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/12.jpg" alt=""/>
									<figcaption><h3>Bottle wayfarers locavore</h3><p>Once there was a little asparagus, he was green and lonely.</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/13.jpg" alt=""/>
									<figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/14.jpg" alt=""/>
									<figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/15.jpg" alt=""/>
									<figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
								</figure>
							</li>
							
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/16.jpg" alt=""/>
									<figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
								</figure>
							</li>
							
							<li>
								<figure>
									<img src="http://wowthemes.net/demo/leroy/img/dummies/17.jpg" alt=""/>
									<figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption>
								</figure>
							</li>
						</ul>
						<nav>
							<span class="icon nav-prev"></span>
							<span class="icon nav-next"></span>
							<span class="icon nav-close"></span>
						</nav>
						<div class="info-keys icon">Navigate with arrow keys</div>
					</section><!-- // end slideshow -->
					
				</div><!-- // grid-gallery -->
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
	
	<!--feedback-->
	<section class="contact" id="contact">
	
	 <div class="container w960">
      <div class="row">
		<br><br><br>
       <center>
       <form method="post" action="message.html" id="contactform">
          <button class="button" id="contactform">Next</button>
        </form>
</center>
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