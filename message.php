<?php
session_start();
if(!isset($_SESSION['roll']))
{
header("location: index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>FAREWELL WEBSITE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="afonts/icomoon/style.css">

    <link rel="stylesheet" href="acss/bootstrap.min.css">
    <link rel="stylesheet" href="acss/jquery-ui.css">
    <link rel="stylesheet" href="acss/owl.carousel.min.css">
    <link rel="stylesheet" href="acss/owl.theme.default.min.css">
    <link rel="stylesheet" href="acss/owl.theme.default.min.css">

    <link rel="stylesheet" href="acss/jquery.fancybox.min.css">

    <link rel="stylesheet" href="acss/bootstrap-datepicker.css">

    <link rel="stylesheet" href="afonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="acss/aos.css">

    <link rel="stylesheet" href="acss/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
   <div class="site-blocks-cover overlay" style="background-image: url(aimages/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
            <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">This is an anonymous webpage.Your details won't be displayed</p>
          </div>
            
        </div>
      </div>

      
    </div>  
   

    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        
        
        <div class="row">
          <div class="col-md-12 mb-5">

            

            
            <form name="message" action="message0.php" class="p-5 bg-white" method="POST">
              
              <h2 class="h4 text-black mb-5">MESSAGE</h2> 

              

              
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="name">Recipient's  Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Mandatory</label>
                  <input type="text"  name="name" id="name" class="form-control" placeholder="enter recipient's name">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email"> Recipient Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note: If entered, your message will be mailed to the reciptant anonymously.</label> 
                  <input type="email" name="email" id="email" class="form-control" placeholder="enter recipient's mail">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Text</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>
              </form>

           <form name="questions" action="message1.php" class="p-5 bg-white" method="POST">
      <div class="container">
  <div class="row site-section" id="faq-section">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title">Ask Questions to whoever you like !</h2>
          </div>
        </div>
        
        <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="name">Recipient's  Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*Mandatory</label>
                  <input type="text"  name="name" id="name" class="form-control" placeholder="enter recipient's name">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email"> Recipient Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note: If entered, your message will be mailed to the reciptant anonymously.</label> 
                  <input type="email" name="email" id="email" class="form-control" placeholder="enter recipient's mail">
                </div>
              </div>
 


          

            
              <label class="text-black" for="question1">Ask any question</label>
              <div class="col-md-12">
                  <textarea name="question1" id="question1" cols="30" rows="2" class="form-control" placeholder="Write your answer"></textarea>
                </div>
            
            
            
              <label class="text-black" for="question2">Ask any question</label>
              <div class="col-md-12">
                  <textarea name="question2" id="question2" cols="30" rows="2" class="form-control" placeholder="Write your answer"></textarea>
                </div>
            

            
            
        </div>
             
              
              <div class="row form-group">
                <div class="col-md-12">
                    <br>
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>
              </form>    
          </div>
          
        </div>
      </div>
    </section>

    

    


   <script src="ajs/jquery-3.3.1.min.js"></script>
  <script src="ajs/jquery-ui.js"></script>
  <script src="ajs/popper.min.js"></script>
  <script src="ajs/bootstrap.min.js"></script>
  <script src="ajs/owl.carousel.min.js"></script>
  <script src="ajs/jquery.countdown.min.js"></script>
  <script src="ajs/jquery.easing.1.3.js"></script>
  <script src="ajs/aos.js"></script>
  <script src="ajs/jquery.fancybox.min.js"></script>
  <script src="ajs/jquery.sticky.js"></script>
  <script src="ajs/isotope.pkgd.min.js"></script>

  
  <script src="ajs/main.js"></script>
    
  </body>
</html>