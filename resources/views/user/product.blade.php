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
                     <h3 class="breadcrumb__title">Collax Product</h3>
                      <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- product-area-start -->
      <div class="tp-product-area pt-130 pb-130">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-2.jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="#"><i class="fal fa-shopping-basket"></i></a>
                           <a href="#"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">Jeff Gothelf learn UX</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-1 (1).jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="#"><i class="fal fa-shopping-basket"></i></a>
                           <a href="#"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">Pride and Prejudice</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay=".9s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-3 (1).jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="#"><i class="fal fa-shopping-basket"></i></a>
                           <a href="#"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">Hard Luck learn UX</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-4 (1).jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="{{'productdetail'}}"><i class="fal fa-shopping-basket"></i></a>
                           <a href="{{'productdetail'}}"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">The Little Prince</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.1s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-5 (1).jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="{{'productdetail'}}"><i class="fal fa-shopping-basket"></i></a>
                           <a href="{{'productdetail'}}"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">The Selfish Giant UX</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.2s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-6 (1).jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="{{'productdetail'}}"><i class="fal fa-shopping-basket"></i></a>
                           <a href="{{'productdetail'}}"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">Little Women UX</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.3s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-7 (1).jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="{{'productdetail'}}"><i class="fal fa-shopping-basket"></i></a>
                           <a href="{{'productdetail'}}"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">JFar From the Madding Crowd</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.4s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="w-100" src="assets/img/product/product-8 (1).jpg" alt="">
                        <div class="tp-product-icon">
                           <a href="{{'productdetail'}}"><i class="fal fa-shopping-basket"></i></a>
                           <a href="{{'productdetail'}}"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="{{'productdetail'}}">A Horseman in the Sky</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
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
      <!-- product-area-end -->

   </main>

   @endsection