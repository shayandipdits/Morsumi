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
                    <img src="{{asset('public/newfrontend')}}/images/site-logo-white.png" class="siteslgn_design" alt>
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
               <a class="alx-burger" href="#"><span></span></a>
            </div>
         </header>
         <div id="alx-pagepiling">
            <!-- =======================about us page=================== -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img jarallax">   
               <div class="slide-image">
                  <video class="responsive_videobackground" loop="true" autoplay="autoplay" muted>
                     <source src="{{asset('public/newfrontend')}}/images/video-9.mp4" type="video/mp4">
                  </video>
               </div> 
               <div class="container">
                     <div class="row">
                        <div class="col-lg-12 trip_aboutsection">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="tripabt_leftoutsection">
                                    <img src="{{asset('public/newfrontend')}}/images/abouth2.png" class="abtimg_design2">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="tripright_abtsection">
                                    <h2 class="iabstetx">
                                       INTRODUCTION H2ION WATER
                                    </h2>
                                    <h4 class="ugec_text">
                                       WE ALWAYS WANT SAFE AND HEALTHY<br> WATER FOR HEALTHY LIFE
                                    </h4>
                                    <div class="title-icon-divider"><i class="fas fa-tint"></i></div>
                                    <p class="trvel_abtdescrptext">
                                       Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt odio voluptates etiam, omnis.
                                    </p>
                                    <h4 class="ugec_text1">
                                       WHY
                                       <span class="hdngaln_bletext">H2ion</span><br>
                                       AlKALINE IONIC
                                       <span class="hdngaln_bletext">WATER?</span>
                                    </h4>
                                    <div class="about-service-container">
                                       <div class="about-service">
                                          <div class="about-service-icon">
                                             <img src="{{asset('public/newfrontend')}}/images/drop-silhouette.png" alt="">
                                          </div>
                                          <div class="about-service-content">
                                             <h4>BEST PRICE GUARANTEED</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
                                          </div>
                                       </div>
                                       <div class="about-service">
                                          <div class="about-service-icon">
                                             <img src="{{asset('public/newfrontend')}}/images/drop-silhouette.png" alt="">
                                          </div>
                                          <div class="about-service-content">
                                             <h4>AMAZING DESTINATION</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
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

            <!-- =======================testimonial page================ -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="images/testimonial-back.jpg">
               <div class="alx-vertical-heading">
                  <i class="fa fa-commenting-o"></i>
                  Clients say about us
               </div>
               <div class="container dgap_carea1">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="alx-heading">
                           <h2 class="alx-heading__title">Testimonials</h2>
                           <div class="alx-heading__zigzag">
                              <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                                 <g>
                                    <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7                       40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                                 </g>
                              </svg>
                           </div>
                        </div>
                     </div>
                     <div class="alx-testimonials">
                        <div class="alx-testimonials__slides">
                           <div class="alx-testimonials__item">
                              <img src="{{asset('public/newfrontend')}}/images/man.png" alt>
                              <div class="alx-testimonials__content">
                                 <div class="alx-testimonials__item__review"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                 <div class="alx-testimonials__item__name">User 1</div>
                                 <div class="alx-testimonials__item__text">The developer of this theme is flexible. There were some bugs that needed to be fixed. He fixed it fast and efficiently. I even had some extra suggestions (request) about the theme</div>
                              </div>
                           </div>
                           <div class="alx-testimonials__item">
                              <img src="{{asset('public/newfrontend')}}/images/woman.png" alt>
                              <div class="alx-testimonials__content">
                                 <div class="alx-testimonials__item__review"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                 <div class="alx-testimonials__item__name">User 2</div>
                                 <div class="alx-testimonials__item__text">Fell in love with the design at first sight. Amazing work. I also want to express my great gratitude for the support and help in setting up. I also helped add more features! Thank you so much!</div>
                              </div>
                           </div>
                           <div class="alx-testimonials__item">
                              <img src="{{asset('public/newfrontend')}}/images/man.png" alt>
                              <div class="alx-testimonials__content">
                                 <div class="alx-testimonials__item__review"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                                 <div class="alx-testimonials__item__name">User 3</div>
                                 <div class="alx-testimonials__item__text">Great customer support. Had a minor issue and it was resolved by the support team within 24 hours. Highly recommend purchasing this theme.</div>
                              </div>
                           </div>
                        </div>
                        <div class="alx-slider__nav">
                           <div class="alx-slider__nav__prev">
                              <div class="alx-slider__nav__next__icon"><i class="fa fa-angle-double-left"></i></div>
                           </div>
                           <div class="alx-slider__nav__dots"></div>
                           <div class="alx-slider__nav__next">
                              <div class="alx-slider__nav__next__icon"><i class="fa fa-angle-double-right"></i></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- =======================testimonial page================ -->
            
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