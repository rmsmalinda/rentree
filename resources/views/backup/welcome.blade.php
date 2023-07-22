<!doctype html>
<html lang="en">
   <head>
      <!-- meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ROMEO.LK</title>
      <meta name="keywords" content="nb-groom">
      <meta name="description" content="nb-groom">
      <link rel="stylesheet" href="./inc/css/bootstrap.min.css">
      <link rel="stylesheet" href="./inc/css/font-awesome.min.css">
      <link rel="stylesheet" href="./inc/css/hover.css">
      <link rel="stylesheet" href="./inc/css/aos.css">
      <link rel="stylesheet" href="./inc/css/slider.css">
      <link rel="stylesheet" href="./inc/css/stylesheet.css">
      <link href="./inc/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Open+Sans:wght@300;400;600;700;800&family=Questrial&display=swap" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- end css -->
   </head>
   <body>
      <div class="shink-fix">
         <div class="container-fluid top-wrapper" >
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 top-div">
                     <ul>
                        <li><a href=""> ACCOUNT</a>
                        </li>
                        <li><a href="">SHOPPING BAG (0) </a> </li>
                        <li> <button class="openBtn" onclick="openSearchHero()"><i class="fas fa-search"></i></button></li>
                     </ul>
                  </div>
                  <div class="col-xs-6  col-md-12  logo ">
                     <a href="./" title="Company Name | Home "> <img src="./inc/images/logo.png" class="img-responsive" alt="image"></a>
                  </div>
                  <div class="col-xs-6 col-md-12  navigation">
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
                                 <li class="active"><a href="./">HOME</a></li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">COLLECTIONS <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                       <li><a href="groom.html">GROOMS COLLECTION</a></li>
                                       <li><a href="#">BRIDAL COLLECTION</a></li>
                                    </ul>
                                 </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">EXPLORE <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                       <li><a href="#">About</a></li>
                                       <li><a href="#">Lookbook</a></li>
                                       <li><a href="#">FAQ</a></li>
                                       <li><a href="#">Blog</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="#">COLLECTIONS</a></li>
                                 <li><a href="#">EXPLORE</a></li>
                                 <li><a href="contact.html">CONTACT</a></li>
                              </ul>
                           </div>
                           <!-- /.navbar-collapse -->
                        </nav>
                     </div>
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
      <div class="container-fluid slider-wrapper hidden-xs">
         <div class="row">
            <div id="carousel-example-generic" class="carousel slide carousel-fade " data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner" role="listbox">
                  <div class="item">
                     <img src="./inc/images/slider.jpg" class="img-responsive" alt="image">
                  </div>
                  <div class="item active">
                     <img src="./inc/images/slider1.jpg" class="img-responsive" alt="image">
                  </div>
                  <div class="item ">
                     <img src="./inc/images/slider3.jpg" class="img-responsive" alt="image">
                  </div>
                  <a class="left carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="prev">
                  <i class="fas fa-angle-left ico"></i>
                  </a>
                  <a class="right carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="next">
                  <i class="fas fa-angle-right ico "></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid main-wrapper" >
         <div class="container">
            <div class="row">
               <div class="col-xs-12 main-top ">
                  <h6>LUXURY TAILORING NOW IN SRI LANKA</h6>
                  <h1>NB: Namal Balachandra is the most prestigious designer<br class="hidden-xs hidden-sm">
                     wear label in Sri Lanka. Experience tailoring quality like <br class="hidden-xs hidden-sm">
                     never before
                  </h1>
                  <div class="line-div">
                  </div>
                  <p>CATEGORIES</p>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-6 main-box "  >
                  <div class="box-img" style="background-image: url(inc/images/Suits-e1478524707905-1.jpg);">
                     <div class="box-wrapper">
                        <h2>Groomswear</h2>
                        <p><a href="">Browse Products</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-6 main-box " >
                  <div class="box-img"  style="background-image: url(inc/images/NB_dress-e1478524616722-1.jpg);">
                     <div class="box-wrapper">
                        <h2>Groomswear</h2>
                        <p><a href="">Browse Products</a></p>
                     </div>
                  </div>
               </div>
               <div class="line-div col-xs-12 ">
               </div>
               <div class="col-xs-12 colletion">
                  <p>CATEGORIES</p>
               </div>
               <div class="sec1-div-left col col-xs-12 col-sm-4 col-md-4 ">
                  <h2>Introducing the<br class="hidden-xs hidden-sm"> GOLD LABEL<br class="hidden-xs hidden-sm">
                     from Namal <br class="hidden-xs hidden-sm">Balachandra
                  </h2>
                  <p>Incorporating fine Italian tailoring with modern design, Namal Balachandra’s Gold label suits are a fusion of quality materials and luxury fashion. The highest quality linens, silks and wools have been used to tailor these fine suits all the way from Milan, Italy.</p>
                  <a href="#" >View Collection</a>
               </div>
               <div class="sec1-div-right col col-xs-12 col-sm-8 col-md-8"
                  style="background-image: url(inc/images/Suit_label-_Model_01-1024x768.jpg);">
               </div>
               <div class="line-div col-xs-12 sec1-bottom ">
               </div>
               <div class="col-xs-12 colletion">
                  <p>IN THE NEWS</p>
               </div>
               <div class="sec2-div-left col col-xs-12 col-sm-4 col-md-4 ">
                  <h2><em>Ciao Italia!</em> NBs debut<br class="hidden-xs hidden-sm"> international wedding<br class="hidden-xs hidden-sm"> in Milan</h2>
                  <p>Incorporating fine Italian tailoring with modern design, Namal Balachandra’s Gold label suits are a fusion of quality materials and luxury fashion. The highest quality linens, silks and wools have been used to tailor these fine suits all the way from Milan, Italy.</p>
                  <a href="#" >View Collection</a>
               </div>
               <div class="sec2-div-right col col-xs-12 col-sm-8 col-md-8"
                  style="background-image: url(inc/images/NEWS_banner.jpg);">
               </div>
               <div class="line-div col-xs-12 sec1-bottom ">
               </div>
               <div class="col-xs-12 colletion">
                  <p>OUR BRANDS</p>
               </div>
               <div class="sec3-div-left col col-xs-12 col-sm-6 col-md-6"
                  style="background-image: url(inc/images/DUL_4710.jpg);">
                  <h2>Finest Quality:<br class="hidden-xs hidden-sm">
                     Above the line
                  </h2>
                  <div class="div-sec-3">
                     <p>      Namal Balachandra is the hallmark of bespoke suiting in Sri Lanka. Joined closely are our high quality brands that can be found in all Will Designs outlets and other leading retail stores around Sri Lanka. Stay updated for news on our international expansion campaigns</p>
                     <a href="#" >Read More</a>
                  </div>
               </div>
               <div class="sec3-div-right col col-xs-12 col-sm-6 col-md-6 ">
                  <h3>Proudly Representing</h3>
                  <img src="./inc/images/Brnads.jpg" class="img-responsive" alt="image">
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid paralex-wrapper" >
         <div class="container">
            <div class="row">
               <div class=" col-xs-12 ">
                  <img src="./inc/images/romeo-white.png" class="img-responsive" alt="image">
                  <p> NB: Namal Balachandra specialises in catering both the <br class="hidden-xs hidden-sm">bride and groom for a hassle free wedding experience <br class="hidden-xs hidden-sm"> delivering only the best tailored suits and dresses. </p>
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
                  <p>Address: 178, High Level Road,<br> Nugegoda, Sri Lanka 10250<br>
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
                     Copyrights 2021 © <a href="">Namal Balachandra</a> . All rights reserved.
                  </p>
               </div>
               <div class=" col-xs-12 col-sm-6 col-md-6 payment-right">
                  <img src="./inc/images/payments.png" class="img-responsive" alt="image">
               </div>
            </div>
         </div>
      </div>
       <!-- js -->
   <script src="./inc/js/jquery-3.3.1.min.js "></script>
   <script src="./inc/js/bootstrap.min.js "></script>
   <script src="./inc/js/fontawesome-all.js "></script>
   <script src="./inc/js/aos.js "></script>
   <script src='./inc/js/owl.carousel.min.js'></script>
   <script src="./inc/js/slick.min.js "></script>
   <script src="./inc/js/swiper.min.js"></script>
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

      });
   </script>
   </body>

</html>
