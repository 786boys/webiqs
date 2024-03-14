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
                  <a href="{{'/'}}"><img src="{{asset('user/assets/img/logo/logo-blue.png')}}" alt=""></a>
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
               <img src="{{asset('user/assets/img/logo/logo-white.png')}}" alt="">
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
               <div class="col-3 col-sm-3"><a href="#"><img src="{{asset('user/assets/img/offcanvas/insta-1.jpg')}}" alt=""></a></div>
               <div class="col-3 col-sm-3"><a href="#"><img src="{{asset('user/assets/img/offcanvas/insta-2.jpg')}}" alt=""></a></div>
               <div class="col-3 col-sm-3"><a href="#"><img src="{{asset('user/assets/img/offcanvas/insta-4.jpg')}}" alt=""></a></div>
               <div class="col-3 col-sm-3"><a href="#"><img src="{{asset('user/assets/img/offcanvas/insta-4.jpg')}}" alt=""></a></div>
            </div>
           </div>
         </div>
      </div>
   </div>

   <div class="body-overlay"></div>

   <main>

      <!-- breadcrumb area start -->
      <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative"
         data-background="{{asset('user/assets/img/404/ab-1.1.jpg')}}">
         <div class="ac-about-shape-img z-index-1">
            <img src="{{asset('user/assets/img/breadcrum/ab-shape-1.1.jpg')}}" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">About Collax</h3>
                      <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!--contact-area-start -->
      <div class="tp-contact-area pt-135 pb-130">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 ">
                 <div class="tp-contct-wrapper contact-space-40">
                  <div class="tp-contact-thumb mb-60">
                     <img src="{{asset('user/assets/img/contact/contact-1.jpg')}}" alt="">
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Mail Address</h4>
                     <span><a href="mailto:(webmail@gmail.com)">(webmail@gmail.com)</a></span>
                     <span><a href="mailto:(infoweb@gmail.com)">(infoweb@gmail.com)</a></span>
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Phone Number</h4>
                     <span><a href="tel:(+1255-568-6523)">(+1255 - 568 - 6523)</a></span>
                     <span><a href="tel:(+1255-568-6523)">(+1255 - 568 - 6523)</a></span>
                  </div>
                  <div class="tp-contact-info">
                     <h4 class="contact-title">Address line</h4>
                     <span><a href="https://www.google.com/maps" target="blank">Bowery St, New York, NY 10013,USA. Bowery Steae</a></span>
                  </div>
                 </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="tpcontact">
                     <h4 class="tp-contact-big-title">Let’s Talk...</h4>
                     <div class="tpcontact__form tpcontact__form-3">
                        <form id="contact-form" action="assets/mail.php">
                           <input name="name" type="text" placeholder="Enter your Name">
                           <input name="email" type="email" placeholder="Enter your Mail">
                           <textarea name="message" placeholder="Enter your Massage"></textarea>
                        </form>
                        <button type="submit" class="tp-btn-yellow">Send Massage</button>
                     </div>
                     <p class="ajax-response"></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact-area-end -->

   </main>
   @endsection