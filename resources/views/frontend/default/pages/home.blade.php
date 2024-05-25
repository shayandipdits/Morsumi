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
            <!-- ========================home page===================== -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img">
                <div class="slide-image">
                      <!-- <img src="assets/img/slider/p-s-4.jpg" alt="html template"> -->
                    <video class="responsive_videobackground" loop="true" autoplay="autoplay" muted>
                        <source src="{{asset('public/newfrontend')}}/images/firstvideo.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-10">
                        <div class="alx-heading alx-text-center fstbanner_section">
                           <div class="alx-heading__pretitle welfnt_text">
                              <!-- <i class="fas fa-tint"></i> -->
                              <img src="{{asset('public/newfrontend')}}/images/menstrual-cup.png" class="mcupsize_design">
                              MORSUMI
                            </div>
                           <h1 class="alx-heading__title welfnt_text1">India's Best<br>Menstrual Cup</h1>
                           <!-- <div class="alx-heading__zigzag">
                              <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                                 <g>
                                    <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7                                40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 "></polygon>
                                 </g>
                              </svg>
                           </div> -->
                        </div>
                        <!-- <div class="alx-btns-section alx-text-center">
                            <a class="alx-btn" href="#page9">Start a project</a>
                            <a class="alx-btn alx-btn-primary" href="#page6">See my works</a>
                        </div> -->
                        <p class="wunmtext">
                           With unmatched quality and customer support, let’s redefine your period care. We are all in this together.
                        </p>
                        <button class="learn-more">
                                 <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                 </span>
                                 <span class="button-text">
                              <a href="#page3" class="vwbtn_textdesign">
                                 View Product
                              </a>
                            </span>
                        </button>
                     </div>
                     <div class="col-lg-6 offset-lg-1"></div>
                  </div>
               </div>
               <div class="alx-canvas" id="alx-particles"></div>
            </section>
            <!-- ========================home page====================== -->

            <!-- ========================problem section================ -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/secondproblem-back.jpg"> 
               <div class="msback_area">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 secondprblm_outsection">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="secondinner_section">
                                      <h2 class="mhgc_text">
                                         Morsumi: Morsumi Hygiene Made Simple
                                      </h2>  
                                      <p class="ytp_dsctextdesign">
                                         The feminine hygiene industry has seen significant development and innovations in the last couple of years. In India, menstruation education combined with increased awareness of women’s health issues has positively changed mindset towards menstruation and other feminine talks. As a result, there has been an increase in demand for safe and hygienic products that answer the problems associated with feminine hygiene. Here at Sirona, we believe that every woman has the right to live life on her terms, free from obstacles and challenges. This led us to create an innovative range of products that will not just address your menstrual and personal hygiene issues but take them to the next level. The feminine hygiene industry has seen significant development and innovations in the last couple of years. In India, menstruation education combined with increased awareness of women’s health issues has positively changed mindset towards menstruation and other feminine talks.
                                      </p>      
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="secondinner_section1">
                                      <h2 class="mhgc_text">
                                         Female Problem
                                      </h2>  
                                      <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                                          <ul class="pblmlist_design">
                                            <li>
                                               <img src="{{asset('public/newfrontend')}}/images/chevron.png">
                                               <span>Painful Periods</span>
                                            </li>
                                            <li>
                                               <img src="{{asset('public/newfrontend')}}/images/chevron.png">
                                               <span>Heavy Periods</span>
                                            </li>
                                            <li>
                                               <img src="{{asset('public/newfrontend')}}/images/chevron.png">
                                               <span>Absent or Irregular Periods</span>
                                            </li>
                                            <li>
                                               <img src="{{asset('public/newfrontend')}}/images/chevron.png">
                                               <span>PMS</span>
                                            </li>
                                            <li>
                                               <img src="{{asset('public/newfrontend')}}/images/chevron.png">
                                               <span>Irregular Periods</span>
                                            </li>
                                          </ul>
                                      </marquee>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- ========================problem section================ -->

            <!-- ========================exsiting problem=============== -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/thirdproblem-back1.jpg"> 
               <div class="msback_area1">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 exsiting_problemoutsection">
                              <h2 class="eplem_textdesign">Existing Problem</h2> 
                              <div class="row">
                                   <div class="col-lg-4">
                                       <div class="innerexsiting_problemsection">
                                            <div class="innerexsiting_problemsection1">
                                                 <img src="{{asset('public/newfrontend')}}/images/problem-1.jpg" class="jprblm_design">
                                                 <h3 class="exptext_design">Painful periods</h3>
                                                 <p class="expptext_design">
                                                    The feminine hygiene industry has seen significant development and innovations in the last couple of years. In India, menstruation education combined with increased awareness of women’s health issues has positively changed mindset towards menstruation and other feminine talks.
                                                 </p>
                                            </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-4">
                                       <div class="innerexsiting_problemsection">
                                            <div class="innerexsiting_problemsection1">
                                                 <img src="{{asset('public/newfrontend')}}/images/problem-2.jpg" class="jprblm_design">
                                                 <h3 class="exptext_design">PMS</h3>
                                                 <p class="expptext_design">
                                                    The feminine hygiene industry has seen significant development and innovations in the last couple of years. In India, menstruation education combined with increased awareness of women’s health issues has positively changed mindset towards menstruation and other feminine talks.
                                                 </p>
                                            </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-4">
                                       <div class="innerexsiting_problemsection">
                                            <div class="innerexsiting_problemsection1">
                                                 <img src="{{asset('public/newfrontend')}}/images/problem-3.jpg" class="jprblm_design">
                                                 <h3 class="exptext_design">Heavy Periods</h3>
                                                 <p class="expptext_design">
                                                    The feminine hygiene industry has seen significant development and innovations in the last couple of years. In India, menstruation education combined with increased awareness of women’s health issues has positively changed mindset towards menstruation and other feminine talks.
                                                 </p>
                                            </div>
                                       </div>
                                   </div>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- ========================exsiting problem=============== -->

            <!-- ========================solution section=============== -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img hfrthimg_design" data-image="{{asset('public/newfrontend')}}/images/fourth-back1.jpg"> 
               <div class="msback_area2">
                   <div class="container-fluid">
                        <div class="row">
                             <div class="col-lg-7 fbackone_outsection">
                                 <h2 class="tfrst_xtextdesign">
                                    India's First Menstrual Cup
                                    Say hello to a more comfortable period.
                                 </h2>
                                 <div class="row">
                                     <div class="col-lg-12">
                                         <div class="mnhdng_textdesign">
                                            <h1 class="shdng_hgtextdesign">Safe and Hygienic</h1>
                                            <p class="bogntext_design">
                                               Morsumi is the best organic menstrual cup brand in India as it is made of health grade non-toxic non-allergic silicone, hence there is no risk of infections.
                                            </p>
                                         </div>
                                     </div>
                                     <div class="col-lg-12">
                                         <div class="mnhdng_textdesign">
                                            <h1 class="shdng_hgtextdesign">Eco-friendly</h1>
                                            <p class="bogntext_design">
                                               Morsumi is a reusable and recyclable period menstrual cup. Being a completely sustainable product, the silicone menstrual cup can reduce consumption and waste. 
                                            </p>
                                         </div>
                                     </div>
                                     <div class="col-lg-12">
                                         <div class="mnhdng_textdesign">
                                            <h1 class="shdng_hgtextdesign">Convenient</h1>
                                            <p class="bogntext_design">
                                               The organic menstrual cup for teenagers can be worn for up to 12 hours and used for up to 10 years. Still stocking up on pads?
                                            </p>
                                         </div>
                                     </div>
                                     <div class="col-lg-12">
                                         <div class="mnhdng_textdesign">
                                            <h1 class="shdng_hgtextdesign">Economical</h1>
                                            <p class="bogntext_design">
                                               Heres to the freedom from spending thousands of rupees on one-time use sanitary pads and tampons. Just imagine what you could do with that money.
                                            </p>
                                         </div>
                                     </div>
                                     <img src="{{asset('public/newfrontend')}}/images/7066645.png" class="crtnimg_design">
                                 </div>
                             </div>
                        </div>
                   </div>
               </div>
            </section>
            <!-- ========================solution section=============== -->

            <!-- =========================facilities section============= -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/fifth-background.jpg"> 
               <div class="msback_area3">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-10 faclity_outsection">
                           <h2 class="mmcf_textdesign">Morsumi Menstrual Cup Facilities</h2>
                           <div class="row">
                                 <div class="col-lg-4">
                                    <div class="singlefacility_outsection">
                                        <img src="{{asset('public/newfrontend')}}/images/facility1.png" class="facimg_design">
                                        <h2 class="fitn_textdesign">Fold & insert</h2>
                                        <p class="ftnp_textdesign">
                                           The Ruby Cup is soft enough that you won’t even feel it inside.
                                        </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="singlefacility_outsection">
                                        <img src="{{asset('public/newfrontend')}}/images/facility2.png" class="facimg_design">
                                        <h2 class="fitn_textdesign">Live your life</h2>
                                        <p class="ftnp_textdesign">
                                           Work, swim, workout, run, jump, or sleep. Enjoy a fuss-free period!
                                        </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="singlefacility_outsection">
                                        <img src="{{asset('public/newfrontend')}}/images/facility3.png" class="facimg_design">
                                        <h2 class="fitn_textdesign">Remove & clean</h2>
                                        <p class="ftnp_textdesign">
                                           Remove it, rinse it with water, and use it again. It’s that simple!
                                        </p>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- =========================facilities section============= -->
            <!-- =========================Product section============= -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/product-backgrounds.jpg"> 
               <div class="msback_area4">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="product_outsection">
                              <h2 class="mmcf_textdesign">Our Product</h2>
                              <div class="row">
                                 <div class="col-lg-4">
                                    <div class="productstructure_section">
                                         <img src="{{asset('public/newfrontend')}}/images/product1.png" class="jprdctimg_design"> 
                                         <h2 class="maxcp_textdesign">Menstrual cup</h2>
                                         <p class="prdct_fdscrptntextdesign">
                                            Morsumi is the best organic menstrual cup brand in India as it is made of health grade non-toxic non-allergic silicone.
                                         </p> 
                                         <button class="atrcbtn_design">
                                             <div class="artcimg_bckarea">
                                              <img src="{{asset('public/newfrontend')}}/images/shopping-cart.png" class="artcimg_design">
                                             </div>
                                             <span class="atcrt_textdesign">
                                               ADD TO CART
                                             </span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="productstructure_section">
                                         <img src="{{asset('public/newfrontend')}}/images/product2.png" class="jprdctimg_design"> 
                                         <h2 class="maxcp_textdesign">Menstrual cup</h2>
                                         <p class="prdct_fdscrptntextdesign">
                                            Morsumi is the best organic menstrual cup brand in India as it is made of health grade non-toxic non-allergic silicone.
                                         </p> 
                                         <button class="atrcbtn_design">
                                             <div class="artcimg_bckarea">
                                              <img src="{{asset('public/newfrontend')}}/images/shopping-cart.png" class="artcimg_design">
                                             </div>
                                             <span class="atcrt_textdesign">
                                               ADD TO CART
                                             </span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="productstructure_section">
                                         <img src="{{asset('public/newfrontend')}}/images/product3.png" class="jprdctimg_design"> 
                                         <h2 class="maxcp_textdesign">Menstrual cup</h2>
                                         <p class="prdct_fdscrptntextdesign">
                                            Morsumi is the best organic menstrual cup brand in India as it is made of health grade non-toxic non-allergic silicone.
                                         </p> 
                                         <button class="atrcbtn_design">
                                             <div class="artcimg_bckarea">
                                              <img src="{{asset('public/newfrontend')}}/images/shopping-cart.png" class="artcimg_design">
                                             </div>
                                             <span class="atcrt_textdesign">
                                               ADD TO CART
                                             </span>
                                         </button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- =========================Product section============= -->
             <!-- =========================faq section================= -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/product-backs.jpg"> 
               <div class="msback_area5">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-12 faq_outsection">
                                <h2 class="mmcf_textdesign">FAQ</h2>
                                  <div class="container mblgap_container1"> 
                                    <div class="row">
                                       <div class="accordion">
                                          <div class="accordion-item">
                                             <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How do menstrual cups work?</span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                   <p>They collect your period blood inside your vagina and can be worn for up to 8 hours at a time, giving you unparalleled freedom compared with traditional period products. Ruby Cups are made of medical-grade silicone, making them soft and easy to use.</p>
                                                </div>
                                          </div>
                                          <div class="accordion-item">
                                             <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">How long does a Ruby Cup last?</span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                   <p>Medical Grade Silicone has an almost indefinite lifespan. If you treat your Ruby Cup well, it can last you up to 10 years.</p>
                                                </div>
                                          </div>
                                          <div class="accordion-item">
                                             <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Is the Ruby Cup healthy and hygienic?</span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                   <p>Ruby Cups are made from 100% medical-grade premium silicone and are blissfully free from plastics, latex, toxins and bleaches. You can care for your body, all while knowing that the product you’re using is completely harmless. Ruby Cups collect menstrual blood instead of absorbing it like a tampon. This means that they do not disrupt your vagina’s natural bacteria balance. The vagina is a wonderful mechanism that is self-cleansing and continually produces natural lubricants that “flush” the vagina. Tampons absorb this protective fluid and can disrupt the natural balance. Many tampons and pads also contain chemicals, perfumes and bleaches, so they can appear white and hygienic – but these additives are not healthy for your body.</p>
                                                </div>
                                          </div>
                                          <div class="accordion-item">
                                             <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How can I clean my cup in public bathrooms?</span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                   <p>You can take a small bottle of water with you to rinse the cup over the toilet. If the sink is out of reach, simply wipe the Ruby Cup clean with dry or damp tissue, and reinsert.</p>
                                                </div>
                                          </div>
                                          <div class="accordion-item">
                                             <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Can I use a cup with an IUD?</span><span class="icon" aria-hidden="true"></span></button>
                                                <div class="accordion-content">
                                                   <p>Yes, it is possible to combine a menstrual cup with an IUD. Just make sure you regularly check on your IUD strings and take care to pinch the walls of your cup together to release the suction, before removing it.</p>
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
            <!-- =========================faq section================= -->

            <!-- =======================testimonial page================ -->
             <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/testimonial-back.jpg"> 
               <div class="msback_area7">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 faq_outsection">
                           <h2 class="mmcf_textdesign">Testimonials</h2>
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
                  </div>
               </div>
            </section>
            <!-- =======================testimonial page================ -->

            <!-- =========================feedback section================= -->
            <section class="alx-vertical-middle alx-white-section pp-scrollable alx-bg-img" data-image="{{asset('public/newfrontend')}}/images/product-backs.jpg"> 
               <div class="msback_area6">
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-12 feedbacks_outsection">
                                <div class="row hgapcx_area">
                                    <div class="col-lg-4 xdck_adrssection">
                                          <div class="alx-icon">
                                             <div class="alx-icon__icon"><span><i class="fa fa-phone"></i></span></div>
                                             <div class="alx-icon__text">
                                             <h5>Call Us</h5>
                                             <p>+91 000 000 0000</p>
                                             </div>
                                          </div>
                                          <div class="alx-icon">
                                             <div class="alx-icon__icon"><span><i class="fa fa-envelope"></i></span></div>
                                             <div class="alx-icon__text">
                                             <h5>Email Us</h5><a href="mailto:morsumi@gmail.com">morsumi@gmail.com</a>
                                             </div>
                                          </div>
                                          <div class="alx-icon">
                                             <div class="alx-icon__icon"><span><i class="fa fa-home"></i></span></div>
                                             <div class="alx-icon__text">
                                             <h5>Address</h5>
                                             <p>Kolkata</p>
                                             </div>
                                          </div>
                                    </div>
                                    <div class="col-lg-8">
                                       <h2 class="fedbck_textdesign">Feedback</h2>
                                       <form class="alx-contact-form" action="#">
                                          <div class="row">
                                             <div class="col-lg-6">
                                                <div class="alx-input-group">
                                                <input name="name" type="text" required="" placeholder="Your Name *" class="trqrd_flddesign"><i class="fas fa-user frmicon_gdesign"></i>
                                                </div>
                                             </div>
                                             <div class="col-lg-6">
                                                <div class="alx-input-group">
                                                <input name="name" type="email" required="" placeholder="Your Email *" class="trqrd_flddesign"><i class="fas fa-envelope frmicon_gdesign"></i>
                                                </div>
                                             </div>
                                             <div class="col-lg-6">
                                                <div class="alx-input-group">
                                                <input name="name" type="text" required="" placeholder="Your Phone Number *" class="trqrd_flddesign"><i class="fas fa-phone-alt frmicon_gdesign"></i>
                                                </div>
                                             </div>
                                             <div class="col-lg-6">
                                                <div class="alx-input-group">
                                                <input name="name" type="file" required="" placeholder="Upload Your Photo/Video *" class="trqrd_flddesign1"><i class="fas fa-file frmicon_gdesign"></i>
                                                </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <div class="alx-input-group">
                                                <textarea name="name" rows="6" required="" placeholder="Message *" class="trqrd_flddesign2"></textarea>
                                                <i class="fas fa-comments frmicon_gdesign"></i>
                                                </div>
                                                <div class="alx-success-msg hide">
                                                <p>Message has been send successfully</p>
                                                </div>
                                                <input class="alx-btn" type="submit" value="Send a Massage">
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div>
            </section>
            <!-- =========================feedback section================= -->
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
            <p><span>©</span>2024 Copyright Morsumi</p>
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