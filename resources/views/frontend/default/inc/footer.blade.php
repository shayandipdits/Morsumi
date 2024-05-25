<!-- <div class="footer-curve position-relative overflow-hidden">
    <span class="position-absolute section-curve-wrapper top-0 h-100"
        data-background="{{ staticAsset('frontend/default/assets/img/shapes/section-curve.png') }}"></span>
</div> 

<footer class="gshop-footer position-relative pt-8 bg-dark z-1 overflow-hidden">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/tomato.svg') }}" alt="tomato"
        class="position-absolute z--1 tomato vector-shape">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/pata-lg.svg') }}" alt="pata"
        class="position-absolute z--1 pata-lg vector-shape">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/pata-xs.svg') }}" alt="pata"
        class="position-absolute z--1 pata-xs vector-shape">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/frame-circle.svg') }}" alt="frame"
        class="position-absolute z--1 frame-circle vector-shape">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/leaf.svg') }}" alt="leaf"
        class="position-absolute z--1 leaf vector-shape">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/leaf.svg') }}" alt="pata"
        class="position-absolute leaf-2 z--1 vector-shape">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/pata-xs.svg') }}" alt="pata"
        class="position-absolute pata-xs-2 z--1 vector-shape">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/tomato-slice.svg') }}" alt="tomato slice"
        class="position-absolute tomato-slice vector-shape z--1">
    <img src="{{ staticAsset('frontend/default/assets/img/shapes/tomato-half.svg') }}" alt="tomato"
        class="position-absolute tomato-half z--1 vector-shape">
    <div class="main-footer__bg"
        style="background-image: url('{{ asset('public/frontend/default') }}/assets/img/shapes/footer-bg-1.png');">
    </div>
    <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="gshop_subscribe_form text-center">
                    <h4 class="text-white gshop-title">{{ localize('Subscribe to the us') }}<mark
                            class="p-0 position-relative text-secondary bg-transparent"> {{ localize('New Arrivals') }}
                            <img src="{{ staticAsset('frontend/default/assets/img/shapes/border-line.svg') }}"
                                alt="border line" class="position-absolute border-line"></mark><br
                            class="d-none d-sm-block">{{ localize('& Other Information.') }}</h4>
                    <form class="mt-5 d-flex align-items-center bg-white rounded subscribe_form"
                        action="{{ route('subscribe.store') }}" method="POST">
                        @csrf
                        <input type="email" class="form-control" placeholder="{{ localize('Enter Email Address') }}"
                            type="email" name="email" required>
                        <button type="submit"
                            class="btn btn-primary flex-shrink-0">{{ localize('Subscribe Now') }}</button>
                    </form>
                </div>
            </div>
        </div>  
        <span class="gradient-spacer my-8 d-block"></span> 
        <div class="row g-5">
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-4">{{ localize('Category') }}</h5>
                    @php
                        $footer_categories = getSetting('footer_categories') != null ? json_decode(getSetting('footer_categories')) : [];
                        $categories = \App\Models\Category::whereIn('id', $footer_categories)->get();
                    @endphp
                    <ul class="footer-nav">
                        @foreach ($categories as $category)
                            <li><a
                                    href="{{ route('products.index') }}?&category_id={{ $category->id }}">{{ $category->collectLocalization('name') }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-4">{{ localize('Quick Links') }}</h5>
                    @php
                        $quick_links = getSetting('quick_links') != null ? json_decode(getSetting('quick_links')) : [];
                        $pages = \App\Models\Page::whereIn('id', $quick_links)->get();
                    @endphp
                    <ul class="footer-nav">
                        @foreach ($pages as $page)
                            <li><a
                                    href="{{ route('home.pages.show', $page->slug) }}">{{ $page->collectLocalization('title') }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-4">{{ localize('Customer Pages') }}</h5>
                    <ul class="footer-nav">
                        <li><a href="{{ route('customers.dashboard') }}">{{ localize('Your Account') }}</a></li>
                        <li><a href="{{ route('customers.orderHistory') }}">{{ localize('Your Orders') }}</a></li>
                        <li><a href="{{ route('customers.wishlist') }}">{{ localize('Your Wishlist') }}</a></li>
                        <li><a href="{{ route('customers.address') }}">{{ localize('Address Book') }}</a></li>
                        <li><a href="{{ route('customers.profile') }}">{{ localize('Update Profile') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-4">{{ localize('Contact Info') }}</h5>
                    <ul class="footer-nav">
                        <li class="text-white pb-2 fs-xs">398/12A, M C Garden Road, Dum Dum, Kolkata, West Bengal 700030
                        </li>
                        <li class="text-white pb-2 fs-xs">(033) 3544 1899</li>
                        <li class="text-white pb-2 fs-xs">support@healthmatters.org.in</li>
                    </ul>
                    <div class="gshop_subscribe_form text-center">

                        <form class="mt-5 d-flex align-items-center bg-white rounded subscribe_form"
                            action="{{ route('subscribe.store') }}" method="POST">
                            @csrf
                            <input type="email" class="form-control"
                                placeholder="{{ localize('Enter Email Address') }}" type="email" name="email"
                                required>
                            <button type="submit"
                                class="btn btn-primary flex-shrink-0">{{ localize('Subscribe Now') }}</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="footer-copyright pt-80 pb-3">
        <span class="gradient-spacer d-block mb-3"></span>
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-lg-4">
                    <div class="copyright-text text-light">
                        © All Right Reserved and 💕 by <b>
                            <font color="#ff9c00">Health Matters</font>
                        </b>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="logo-wrapper text-center">
                        <a href="{{ route('home') }}" class="logo"><img
                                src="{{ staticAsset('uploads/media/aMqP5xW8nVbihzuHFxRSbfcyUaTRg9kuLgU3Dkgj.png') }}"
                                alt="footer logo" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-payments-info d-flex align-items-center justify-content-lg-end gap-2">
                        <div
                            class="rounded-1 d-inline-flex align-items-center justify-content-center p-2 flex-shrink-0">
                            <img src="{{ uploadedAsset(getSetting('accepted_payment_banner')) }}"
                                alt="accepted_payment" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> -->


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 footer_mainoutsection">
             <div class="container">
                <div class="row">
                    <div class="col-lg-12 tgtv_section">
                        <div class="row">
                            <div class="col-lg-4">
                                 <div class="lbox_outsection">
                                      <img src="public/newfrontend/images/morsumi-logo.png" class="footer_logodesign">
                                      <p class="ftrfst_textdesign">
                                        A menstrual cup is a menstrual hygiene device which is inserted into the vagina during menstruation. Its purpose is to collect menstrual fluid (blood from the uterine lining mixed with other fluids).Menstrual cups come in two types. The older type is bell-shaped, often with a stem, and has walls more than 2mm thick.
                                      </p>
                                      <ul class="kfbuser_area">
                                          <li>
                                            <a href="#">
                                              <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                              <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                          </li>
                                          <li>
                                            <a href="#">
                                              <i class="fa-brands fa-youtube"></i>
                                            </a>
                                          </li>
                                      </ul>
                                 </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="lbox_outsection1">
                                    <h2 class="ulinkstext_design1">
                                        Usefull Links
                                    </h2>
                                    <ul class="ufrst_area">
                                        <li>
                                            <a href="#">
                                               <i class="fa-solid fa-right-long"></i>
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-right-long"></i>
                                                Products
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-right-long"></i>
                                                Contact Us
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="lbox_outsection1">
                                    <h2 class="ulinkstext_design1">
                                        Our Products
                                    </h2>
                                    <ul class="ufrst_area">
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-right-long"></i>
                                                MonthlyCup Mini
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-right-long"></i>
                                                MonthlyCup Normal
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-solid fa-right-long"></i>
                                                MonthlyCup Plus
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="lbox_outsection2">
                                    <h2 class="ulinkstext_design">
                                        Contact Details
                                    </h2>
                                    <div class="row">
                                        <h2 class="ftrpner_textdesign">PHONE NUMBER</h2>
                                        <div class="row jgap_fgarea">
                                            <div class="col-1 social_leftsection">
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                            <div class="col-11 social_rghttextsection">
                                                <a href="tel:+91 0000000000" class="jnmbr_textdesign">
                                                    0000000000
                                                </a>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <h2 class="ftrpner_textdesign">EMAIL ADDRESS</h2>
                                        <div class="row jgap_fgarea">
                                            <div class="col-1 social_leftsection">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="col-11 social_rghttextsection">
                                                <a href="mailto:morsumi@gmail.com" class="jnmbr_textdesign">
                                                    morsumi@gmail.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h2 class="ftrpner_textdesign">OFFICE LOCATION</h2>
                                        <div class="row jgap_fgarea">
                                            <div class="col-1 social_leftsection">
                                                <i class="fa-solid fa-map-pin"></i>
                                            </div>
                                            <div class="col-11 social_rghttextsection">
                                                <p class="adrstext_design">
                                                   Kolkata
                                                </p>
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
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 cpyrgt_poutarea">
            <h2 class="fgtr_text">
                 © Copyright MORSUMI 2024. Designed And Developed By 
                <a href="https://devantitsolutions.com/" target="_blank" class="kcmpnynme_text">
                 DITS
                </a>
            </h2>
        </div>
    </div>
 </div>