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
                     <h3 class="breadcrumb__title">Collax Job List</h3>
                      <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!-- job-area-start -->
      <div class="job-area pt-130 pb-130">
         <div class="container">
            <div class="row justify-content-center mb-80">
               <div class="col-10 p-0 text-center">
                  <div class="tp-project-tab-button masonary-menu">
                     <button class="active" data-filter="*"><span>All</span></button>
                     <button data-filter=".cat2"><span>London-UK</span></button>
                     <button data-filter=".cat3"><span>NY. USA</span></button>
                     <button data-filter=".cat4"><span>Washington USA</span></button>
                  </div>
               </div>
            </div>
            <div class="row grid">
               <div class="col-xl-3 grid-item cat2">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/brand/brand-15.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">Lead Product Design</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 grid-item cat3">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/job/job-1.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">LCAT Bank Manager</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 grid-item cat3 cat4">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/job/job-2.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">Cashier For Bank Desk</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 grid-item cat3">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/job/job-3.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">Intern UI Designer</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 grid-item cat4 cat2">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/job/job-4.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">Product Designer</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 grid-item cat4">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/job/job-5.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">Motion Designer</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 grid-item cat2 cat4">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/job/job-6.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">IT Consultant</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 grid-item cat2">
                  <div class="jobitem mb-30">
                     <div class="jobitem__brand">
                        <img src="assets/img/job/job-7.png" alt="">
                     </div>
                     <div class="jobitem__title">
                        <h4 class="job-title-sm"><a href="{{'jobdetail'}}">Business Advisor</a></h4> 
                     </div>
                     <div class="jobitem__details">
                        <p class="mb-0"><i class="fal fa-map-marker-alt"></i> San Francisco. CA</p>
                        <p class="mb-0"><i class="fal fa-clock"></i> Full Time</p>
                     </div>
                     <div class="jobitem__button">
                        <button class="tp-btn-border-sm">Apply now</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="container">
                  <div class="col-xl-12">
                     <div class="basic-pagination mt-30 text-center">
                        <nav>
                           <ul>
                              <li>
                                 <a href="{{'blog'}}">
                                    <i class="far fa-angle-left"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="{{'blog'}}">1</a>
                              </li>
                              <li>
                                 <span class="current">2</span>
                              </li>
                              <li>
                                 <a href="{{'blog'}}">3</a>
                              </li>
                              <li>
                                 <a href="{{'blog'}}">
                                    <i class="far fa-angle-right"></i>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- job-area-end -->

      <!-- news-area-start -->
      <div class="tp-news-letter-area tp-news-letter-bg pt-200 pb-150" data-background="assets/img/news/news-bg.jpg">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8 col-lg-8 col-md-12 ">
                  <div class="tp-news-sub-wrapper text-center">
                     <div class="tp-news-letter-section-box">
                        <h2 class="tp-title-sm tp-title-sm tp-white-text pb-30">Launch your product with us</h2>
                        <p class="text-white pb-35">We had the pleasure of being a partner for companies from markets
                           like Fintech, Health, Government, Security, Big Data & many more.</p>
                     </div>
                     <div class="tp-news-button">
                        <a class="tp-btn-lg-yellow" href="{{'contect'}}">Become a Partner</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- news-area-end -->

   </main>

   @endsection