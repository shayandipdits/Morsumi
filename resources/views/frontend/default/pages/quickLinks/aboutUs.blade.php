<!DOCTYPE html>
<html class="no-js" lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="icon" href="{{asset('public/newfrontend')}}/img/favicon/favicon.png">
      <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/newfrontend')}}/img/favicon/favicon.png">
      <meta name="theme-color" content="#000">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,700,700i,900,900i|Dosis:300,400,500,600,700" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="{{asset('public/newfrontend')}}/libs/pagePiling/jquery.pagepiling.min.css">
      <link rel="stylesheet" href="{{asset('public/newfrontend')}}/css/main.min.css">
      <title>Health Matters</title>
      <meta name="description" content>
   </head>
   <body>
      <div class="alx-scroll-wrap">
         <div id="alx-preloader">
            <div class="cssload-thecube">
               <div class="cssload-cube cssload-c1"></div>
               <div class="cssload-cube cssload-c2"></div>
               <div class="cssload-cube cssload-c4"></div>
               <div class="cssload-cube cssload-c3"></div>
            </div>
         </div>
         <header>
            <div class="alx-logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('public/newfrontend')}}/images/morsumi-logo.png" class="siteslgn_design" alt>
                </a>
            </div>
            <div class="alx-right-wrap webmenu_area">
               <div class="alx-social-links">
                  <ul>
                     <li><a href="{{route('customers.wishlist')}}"><i class="fas fa-heart"></i></a></li>
                     <li><a href="{{route('carts.index')}}"><i class="fas fa-shopping-cart"></i></a></li>
                     <li><a href="{{route('customers.dashboard')}}"><i class="fas fa-user"></i></a></li>
                  </ul>
               </div>
               <ul class="social_headerlink">
                     <li>
                        <a href="#">
                           <i class="fa-brands fa-facebook-f"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="fa-brands fa-x-twitter"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                     </li>
               </ul>
               <a class="alx-burger" href="#"><span></span></a>
            </div>
         </header>
         <div id="alx-pagepiling">
            <!-- =======================about us page=================== -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/aboutus-back.jpg"> 
               <div class="abds_bckarea"> 
                  <div class="container">
                        <div class="row">
                           <div class="col-lg-12 trip_aboutsection">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="tripabt_leftoutsection">
                                       <img src="{{asset('public/newfrontend')}}/images/about-11.jpg" class="abtimg_design">
                                       <img src="{{asset('public/newfrontend')}}/images/about-12.jpg" class="abtimg_design1">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="tripright_abtsection">
                                       <h2 class="iabstetx">
                                          THIS IS OUR STORY
                                       </h2>
                                       <h4 class="ugec_text">
                                          WE ALWAYS WANT SAFE AND HEALTHY<br> MENSTRUAL CUP AT A TIME
                                       </h4>
                                       <div class="title-icon-divider">
                                          <img src="{{asset('public/newfrontend')}}/images/menstrual-cup.png" class="kmencup_design">
                                       </div>
                                       <p class="trvel_abtdescrptext">
                                          A menstrual cup is a flexible cup that’s designed for use inside of your vagina during your period to collect blood. The cup doesn’t absorb your menstrual flow as tampons or pads do.While it might seem like menstrual cups popped up overnight, they’ve actually been around in some form since the 1800s. The first patent for a menstrual cup design was awarded in 1867 and the prototype was pretty much a rubber sack that was attached to a ring.
                                       </p>
                                       <h4 class="ugec_text1">
                                          WHY
                                          <span class="hdngaln_bletext">Morsumi</span><br>
                                          MENSTRUAL
                                          <span class="hdngaln_bletext">CUP?</span>
                                       </h4>
                                       <div class="about-service-container">
                                          <div class="about-service">
                                             <div class="about-service-icon">
                                                <img src="{{asset('public/newfrontend')}}/images/herbal-spa-treatment-leaves.png" alt="">
                                             </div>
                                             <div class="about-service-content">
                                                <h4>GOOD FOR THE ENVIRONMENT</h4>
                                                <p>The organic soft menstrual cup for beginners is 100% made in India and it is reusable for up to 10 years, saving the environment from kilos of sanitary waste.</p>
                                             </div>
                                          </div>
                                          <div class="about-service">
                                             <div class="about-service-icon">
                                                <img src="{{asset('public/newfrontend')}}/images/feather.png" alt="">
                                             </div>
                                             <div class="about-service-content">
                                                <h4>EXTREMELY COMFORTABLE</h4>
                                                <p>The Morsumi is neither too soft, nor too hard which makes it one of the best menstrual cup brands in India.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </section>
            <!-- =======================about us page=================== -->
            
         </div>
         <aside class="alx-aside-sidebar alx-aside-sidebar__dark alx-bg-img" id="alx-sidebar" data-image="images/sidebar.jpg">
            <!-- <div class="alx-lang-change">
               <ul>
                  <li><a class="active" href="#">Eng</a></li>
                  <li><a href="#">Fin</a></li>
                  <li><a href="#">Rus</a></li>
               </ul>
            </div> -->
            <a class="alx-burger alx-burger__open" href="#"><span></span></a>
            <div class="alx-sidebar-widget">
               <h5>HELLO THERE!</h5>
               <img class="img-responsive" src="{{asset('public/newfrontend')}}/images/sidebar-image.jpg" alt>
               <p>Alkaline ionized water has a higher pH and negative ORP as a result of ionization. Moreover, it is loaded with molecular hydrogen.</p>
            </div>
            <hr>
            <div class="alx-sidebar-menu">
               <ul>
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{route('home.pages.aboutUs')}}">About Us</a></li>
                  <li><a href="{{route('home.pages.abouth2ion')}}">About H2ion</a></li>
                  <li><a href="{{url('/products')}}">Products</a></li>
                  <li><a href="{{route('home.pages.contactUs')}}">Contact Us</a></li>
               </ul>
            </div>
            <div class="alx-social-links__2">
               <ul>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-github"></i></a></li>
               </ul>
            </div>
            <div class="alx-copyright">© 2023 Copyright Health Matters.<br>Design & Developed by<a href="https://devantitsolutions.com/" target="blanc"> <strong> DITS</strong></a></div>
         </aside>
         <div class="alx-aside-sidebar__overlay"></div>
         <!-- <div class="alx-lang-change">
            <ul>
               <li><a class="active" href="#">Eng</a></li>
               <li><a href="#">Fin</a></li>
               <li><a href="#">Rus</a></li>
            </ul>
         </div> -->
         <div class="alx-copyright">
            <p><span>©</span>2023 Copyright Health Matters</p>
         </div>
      </div>
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('public/newfrontend')}}/libs/pace/pace.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/jquery/dist/jquery.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/pagePiling/jquery.pagepiling.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/waypoints/waypoints.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/match-height/match-height.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/isotope/isotope.pkgd.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/animate/animate-css.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/tilt/tilt.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/jarallax/jarallax.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/jarallax/jarallax-video.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/slick/slick.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/canvas-bg/particles.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/libs/readmore/readmore.min.js"></script>
      <script src="{{asset('public/newfrontend')}}/js/main.min.js"></script>
      <script>
         const items = document.querySelectorAll(".accordion button");
         function toggleAccordion() {
           const itemToggle = this.getAttribute("aria-expanded");

           for (i = 0; i < items.length; i++) {
             items[i].setAttribute("aria-expanded", "false");
           }

           if (itemToggle == "false") {
             this.setAttribute("aria-expanded", "true");
           }
         }
         items.forEach((item) => item.addEventListener("click", toggleAccordion));
      </script>
   </body>
</html>