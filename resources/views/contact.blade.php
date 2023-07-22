<!doctype html>
<html lang="en">
   <head>
      <!-- meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Contact </title>
      <meta name="keywords" content="nb-groom">
      <meta name="description" content="nb-groom">
      <link rel="stylesheet" href="./inc/css/bootstrap.min.css">
      <link rel="stylesheet" href="./inc/css/font-awesome.min.css">
      <link rel="stylesheet" href="./inc/css/hover.css">
      <link rel="stylesheet" href="./inc/css/aos.css">
      <link rel="stylesheet" href="./inc/css/lightbox.min.css" />
      <link rel="stylesheet" href="./inc/css/slider.css">
      <link rel="stylesheet" href="./inc/css/stylesheet.css">
      <link href="./inc/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Open+Sans:wght@300;400;600;700;800&family=Questrial&display=swap" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- end css -->
   </head>
   <body>
      <div class="shink-fix">
      <div class="container-fluid top-wrapper inner-page"  >
      <div class="container">
         <div class="row">
            <div class="col-xs-12 top-div">
                     <ul>
                        <li><a href="/login">SIGN IN</a>
                     </ul>
            </div>
            <div class="col-xs-12 logo ">
               <a href="./" title="Company Name | Home "> <img src="./inc/images/logo.png" class="img-responsive" alt="image"></a>
            </div>
            <div class="col-xs-12 navigation">
               <div id="navbar">
                  <nav class="navbar navbar-inverse " role="navigation">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     </div>
                     <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                                 <li class="active"><a href="/">HOME</a></li>
                                 <li class="active"><a href="/productions">PRODUCTS</a></li>
                                 <li class="active"><a href="/about">ABOUT</a></li>
                                 <li><a href="/contact">CONTACT</a></li>
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </nav>
               </div>
               </div>
               <div class="line-div col-sm-12 inner-div-line hidden-xs">
               </div>
            </div>
         </div>
      </div>
   </div>
      <div id="FullScreenOverlay" class="overlay">
         <span class="closebtn" onclick="closeSearchHero()" title="Close Overlay">×</span>
         <div class="overlay-content">
            <form action="/action_page.php">
               <input type="text" placeholder="Search" name="search">
               <button type="submit"><i class="fa fa-search"></i></button>
            </form>
         </div>
      </div>
      <div class="container-fluid conatct-wrapper" >
         <div class="container">
            <div class="row">
               <div class="col-xs-12 contact-top ">
                  <p>
                     CONTACT US
                  </p>
                  <h2> We’d love to hear from you.</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.192753896705!2d81.05737591522438!3d6.986561694952895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae463a112a561f5%3A0x58a94326a54a81ae!2sRomeo%20Grooms%20Designs!5e0!3m2!1sen!2slk!4v1629518486259!5m2!1sen!2slk" width="100%" class="map" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid line-wrapper" >
         <div class="container">
            <div class="row">
               <div class="line-div col-sm-12 inner-div-bottom">
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid details-wrapper" >
         <div class="container">
            <div class="row">
               <div class="col-sm-12 details">
                  <h3>178, High Level Road,<br>
                     Nugegoda.<br>
                     Sri Lanka<br>
                     +94 112 890 333<br>
                     +94 112 890 444
                  </h3>
               </div>
               <div class="col-sm-12 contact-details ">
                  <h5>GET IN TOUCH</h5>
                  <p>We are always here for you. Don’t hesitate to contact us through our hotlines, social medias or drop us an email.<br class="hidden-xs hidden-sm">  We’ll be right back with you as soon as possible.</p>
                  <p>Send us a quick message, complaints or <br class="hidden-xs hidden-sm"> suggestions.</p>
               </div>
               <div class="col-sm-12 contact-form">
                  <!-- Contact Form  Starts  -->
                  <form method="POST" role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake" action="/send_message">
                    @csrf
                     <div class="col-sm-6 ">
                        <div class="form-group">
                           <div class="controls">
                              <input name="name" type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 ">
                        <div class="form-group">
                           <div class="controls">
                              <input name="email" type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 ">
                        <div class="form-group">
                           <div class="controls">
                              <input name="subject" type="text" id="name" class="form-control" placeholder="Subject" required data-error="Please enter your Subject">
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-12 ">
                        <div class="form-group">
                           <div class="controls">
                              <textarea name="massage" id="message" rows="10" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
                              <div class="help-block with-errors"></div>
                           </div>
                        </div>
                     </div>
                     <button type="submit" id="submit" class="btn btn-success"></i> Send Message</button>
                     <div id="msgSubmit" class="h3 text-center hidden"></div>
                     <div class="clearfix"></div>
                  </form>
                  <br/>
                  <!-- Contact Form Ends -->
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid line-wrapper" >
         <div class="container">
            <div class="row">
               <div class="line-div col-sm-12 inner-div-bottom">
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid footer-wrapper" >
         <div class="container">
            <div class="row">
               <div class=" col-xs-12  col-sm-3 col-md-3 footer1">
                  <h4>PAGES
                  </h4>
                  <ul>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">2016/17 Bridal Collection</a></li>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">2016/17 Grooms Collection</a></li>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">About</a></li>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">Blog</a></li>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">Contact</a></li>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">FAQ</a></li>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">Home</a></li>
                     <li><i class="fas fa-play ico"></i><a class="hvr-forward" href="">Lookbook</a></li>
                  </ul>
               </div>
               <div class=" col-xs-12  col-sm-3 col-md-3 footer2">
                  <h4>ABOUT
                  </h4>
                  <p><em>NB: Namal Balachandra</em> is Sri Lanka's leading bespoke designer label catering high end luxury garments and accessories. <br>With over 13 years of experience in tailoring, <em>NB: Namal Balachandra</em> is the one-stop store for all your wedding grooming needs.</p>
               </div>
               <div class=" col-xs-12  col-sm-3 col-md-3 footer3">
                  <h4> CONTACT
                  </h4>
                  <p>Address: No 156 1 Floor Lower Street,<br> Badulla, Sri Lanka 90000<br>
                     Phone: (+94) 0112 890 333 <br>
                     (+94) 0112 890 444
                  </p>
                  <ul>
                     <li><a  href="" title="Facebook"><i class="fab fa-facebook-square ico"></i></a></li>
                     <li><a  href="" title="Twitter"><i class="fab fa-twitter ico"></i></a></li>
                     <li><a  href="" title="linkedin"><i class="fab fa-linkedin-in ico"></i></a></li>
                     <li><a  href="" title="Youtube"><i class="fab fa-youtube ico"></i></a></li>
                     <li><a  href="" title="Youtube"><i class="fab fa-pinterest ico"></i></a></li>
                  </ul>
               </div>
               <div class=" col-xs-12  col-sm-3 col-md-3 footer4">
                  <h4>SEARCH
                  </h4>
                  <form action="">
                     <input type="email" name="your-email" value="" class="form-control" placeholder="Search">
                     <button type="submit">                <i class="fas fa-envelope icon-ft"></i>
                     </button>
                  </form>
               </div>
            </div>
            <div class="row copyright">
               <div class=" col-xs-12  col-sm-6 col-md-6 payment-left">
                  <p>
                     Copyrights 2021 © <a href="">ROMEO.LK</a> . All rights reserved.
                  </p>
               </div>
               <div class=" col-xs-12 col-sm-6 col-md-6 payment-right">
                  <img src="./inc/images/payments.png" class="img-responsive" alt="image">
               </div>
            </div>
         </div>
      </div>
       <!-- js -->
   <script src="./inc/js/lightbox-plus-jquery.min.js"></script>
   <script src="./inc/js/jquery-3.3.1.min.js "></script>
   <script src="./inc/js/bootstrap.min.js "></script>
   <script src="./inc/js/fontawesome-all.js "></script>
   <script src="./inc/js/aos.js "></script>
   <script src="./inc/js/anime.min.js "></script>
   <script>
      function openSearchHero() {
          document.getElementById("FullScreenOverlay").style.display = "block";
          }

          function closeSearchHero() {
          document.getElementById("FullScreenOverlay").style.display = "none";
          }


   </script>
    <script>
      $(function () {
         var shrinkHeader = 100;
         $(window).scroll(function () {
             var scroll = getCurrentScroll();
             if (scroll >= shrinkHeader) {


                 $('.top-wrapper').addClass('shink-header-full');
                 $('.logo').addClass('shink-logo');
                 $('.navigation').addClass('shink-navigation');
                 $('.top-div').addClass('shink-top-div');
                 $('.top-div ul').addClass('shink-top-div-ul');


             }
             else {

                 $('.top-wrapper').removeClass('shink-header-full');
                 $('.logo').removeClass('shink-logo');
                 $('.navigation').removeClass('shink-navigation');
                 $('.top-div').removeClass('shink-top-div');
                 $('.top-div ul').removeClass('shink-top-div-ul');

             }
         });
         function getCurrentScroll() {
             return window.pageYOffset || document.documentElement.scrollTop;
         }




     });</script>
   </body>

</html>
