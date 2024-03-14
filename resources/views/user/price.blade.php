@extends('user.partisls.layout')

@section('meta-title')
- webiqs
@endsection
@section('meta-description')
- webiqs
@endsection
@section('data')

   <!-- tp-header-area-end -->

   <div id="header-sticky-mobile" class="tp-md-header-area d-md-block d-lg-none pt-30 pb-30">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-md-6 col-6">
               <div class="tp-logo">
                  <a href="{{'/'}}"><img src="assets/img/logo/logo-blue.png" alt=""></a>
               </div>
            </div>
            <div class="col-md-6 col-6">
               <div class="tp-header-right z-index-1 d-flex align-items-center justify-content-end">
                  <a class="tp-btn-yellow d-none d-md-block" href="#">How it Works</a>
                  <button class="tp-menu-bar"><i class="fal fa-bars"></i></button>
               </div>
            </div>
         </div>
      </div>
   </div>



   <div class="tp-offcanvas-area">
      <div class="tpoffcanvas">
         <div class="tpoffcanvas__logo">
            <a href="{{'/'}}">
               <img src="assets/img/logo/logo-white.png" alt="">
            </a>
         </div>
         <div class="tpoffcanvas__close-btn">
            <a class="close-btn" href="javascript:void(0)"><i class="fal fa-times-hexagon"></i></a>
         </div>
         <div class="tpoffcanvas__content d-none d-sm-block">
            <p>We deploy world-class Creative <br> on demand.</p>
         </div>
         <div class="mobile-menu">

         </div>
         <div class="tpoffcanvas__contact">
            <span>Contact us</span>
            <ul>
               <li><i class="fas fa-star"></i> <a href="https://goo.gl/maps/abHegV4AoiJA6Syd8" target="_blank">Melbone
                     st, Australia, Ny 12099</a></li>
               <li><i class="fas fa-star"></i> <a href="tel:8180012345678">+81 800 123 456 78</a></li>
               <li><i class="fas fa-star"></i> <a href="mailto:Collaxmail@gmail.com">Collaxmail@gmail.com</a></li>
            </ul>
         </div>
         <div class="tpoffcanvas__input d-none d-sm-block">
            <p>Get UPdate</p>
            <form class="p-relative" action="#">
               <input type="text" placeholder="Enter mail">
               <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </form>
         </div>
         <div class="tpoffcanvas__instagram d-none d-sm-block">
            <p>Check Instagram POst</p>
           <div class="tp-insta">
            <div class="row">
               <div class="col-3 col-sm-3"><a href="#"><img src="assets/img/offcanvas/insta-1.jpg" alt=""></a></div>
               <div class="col-3 col-sm-3"><a href="#"><img src="assets/img/offcanvas/insta-2.jpg" alt=""></a></div>
               <div class="col-3 col-sm-3"><a href="#"><img src="assets/img/offcanvas/insta-4.jpg" alt=""></a></div>
               <div class="col-3 col-sm-3"><a href="#"><img src="assets/img/offcanvas/insta-4.jpg" alt=""></a></div>
            </div>
           </div>
         </div>
      </div>
   </div>

   <div class="body-overlay"></div>

   <main>

      <!-- breadcrumb area start -->
      <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative"
         data-background="assets/img/404/ab-1.1.jpg">
         <div class="ac-about-shape-img z-index-1">
            <img src="assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">Pricing Plan</h3>
                      <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!--price-area-start -->
      <div class="cp-price-area pt-130 pb-130">
         <div class="container">
            <div class="row tp-gx-15">
               <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <div class="cpprice text-center mb-20">
                     <div class="cpprice__title">
                        <h3 class="cp-price-title">Professional</h3>
                     </div>
                     <div class="cpprice__meta">
                        <span><b>$29</b>/ months</span>
                     </div>
                     <div class="cpprice__title-sm">
                        <h4 class="cp-price-sm-title">You can choose to pay monthly annually. Don’t worry! You can.</h4>
                     </div>
                     <div class="cpprice__list">
                        <ul>
                           <li>09 page responsive website</li>
                           <li>5 PPC Campaigns</li>
                           <li>10 SEO Keywords</li>
                           <li>5 Facebook Camplaigns</li>
                        </ul>
                     </div>
                     <div class="cpprice__button">
                        <button class="tp-btn-yellow">Get Started Today <i class="fal fa-long-arrow-right"></i></button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <div class="cpprice active text-center mb-20">
                     <div class="cpprice__title">
                        <h3 class="cp-price-title">Standard</h3>
                     </div>
                     <div class="cpprice__meta">
                        <span><b>$49</b>/ months</span>
                     </div>
                     <div class="cpprice__title-sm">
                        <h4 class="cp-price-sm-title">You can choose to pay monthly annually. Don’t worry! You can.</h4>
                     </div>
                     <div class="cpprice__list">
                        <ul>
                           <li>09 page responsive website</li>
                           <li>5 PPC Campaigns</li>
                           <li>10 SEO Keywords</li>
                           <li>5 Facebook Camplaigns</li>
                        </ul>
                     </div>
                     <div class="cpprice__button">
                        <button class="tp-btn-yellow">Get Started Today <i class="fal fa-long-arrow-right"></i></button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <div class="cpprice text-center mb-20">
                     <div class="cpprice__title">
                        <h3 class="cp-price-title">Ultimate</h3>
                     </div>
                     <div class="cpprice__meta">
                        <span><b>$99</b>/ months</span>
                     </div>
                     <div class="cpprice__title-sm">
                        <h4 class="cp-price-sm-title">You can choose to pay monthly annually. Don’t worry! You can.</h4>
                     </div>
                     <div class="cpprice__list">
                        <ul>
                           <li>09 page responsive website</li>
                           <li>5 PPC Campaigns</li>
                           <li>10 SEO Keywords</li>
                           <li>5 Facebook Camplaigns</li>
                        </ul>
                     </div>
                     <div class="cpprice__button">
                        <button class="tp-btn-yellow">Get Started Today <i class="fal fa-long-arrow-right"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- price-area-end -->

   </main>
   @endsection