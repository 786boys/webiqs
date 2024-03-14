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
                     <h3 class="breadcrumb__title">Portfolio Full Width</h3>
                     <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

   <!-- project-area-start -->
   <div class="tp-project-area pt-120 pb-120 p-relative">
      <div class="container-fluid p-0">
         <div class="row g-0 justify-content-center">
            <div class="col-10 text-center">
               <div class="tp-project-tab-button masonary-menu mb-80">
                  <button class="active" data-filter="*"><span>Website</span></button>
                  <button data-filter=".cat2"><span>Landing Page</span></button>
                  <button data-filter=".cat3"><span>ios App</span></button>
                  <button data-filter=".cat4"><span>Landing Page</span></button>
                  <button data-filter=".cat5"><span>Branding Design</span></button>
               </div>
            </div>
         </div>
         <div class="row grid gx-0 port-space">
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat2 cat3">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-10.jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-10.jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat5">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-11.jpg.jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-11.jpg.jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat3">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-12 (1).jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-12 (1).jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat5">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-13 (1).jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-13 (1).jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat2 cat5cat3">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-14 (1).jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-14 (1).jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat3 cat4">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-15 (1).jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-15 (1).jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat3">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-16 (1).jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-16 (1).jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat5">
              <div class="bp-project-item p-relative">
                  <div class="bp-project-img w-img fix">
                     <img src="{{asset('user/assets/img/portfolio/port-17 (1).jpg')}}" alt="">
                  </div>
                  <div class="bp-project-item-link">
                     <span>
                         <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-17 (1).jpg')}}">
                           <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                           </svg>
                         </a>
                     </span>
                  </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat3 cat4">
               <div class="bp-project-item p-relative">
                   <div class="bp-project-img w-img fix">
                      <img src="{{asset('user/assets/img/portfolio/project-6.1.jpg')}}" alt="">
                   </div>
                   <div class="bp-project-item-link">
                      <span>
                          <a class="popup-image" href="{{asset('user/assets/img/portfolio/project-6.1.jpg')}}">
                            <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                            </svg>
                          </a>
                      </span>
                   </div>
               </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 grid-item cat2">
               <div class="bp-project-item p-relative">
                   <div class="bp-project-img w-img fix">
                      <img src="{{asset('user/assets/img/portfolio/port-18 (1).jpg')}}" alt="">
                   </div>
                   <div class="bp-project-item-link">
                      <span>
                          <a class="popup-image" href="{{asset('user/assets/img/portfolio/port-18 (1).jpg')}}">
                            <svg width="107" height="107" viewBox="0 0 107 107" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M0.224823 95.4633L11.3577 106.62C11.8638 107.127 14.9002 107.127 15.406 106.62L80.1796 43.2308C81.1916 42.2165 82.2038 41.7093 83.7219 41.7093C84.228 41.7093 85.2402 41.7093 85.746 42.2165C87.7702 42.7236 88.7822 44.7521 88.7822 46.7805V78.7286V79.2358H104.976C105.988 79.2358 106.494 79.2358 107 79.2358V1.64818C107 1.64818 107 1.64819 105.988 0.633841C104.976 -0.380504 105.482 0.126918 104.47 0.126918H28.5633C28.5633 0.633841 28.5633 1.14101 28.5633 2.66253V18.3826C28.5633 19.3967 28.5633 20.4111 28.5633 20.4111H60.9501C62.9743 20.4111 64.9984 21.4252 65.5043 23.4536C66.5163 25.482 66.0104 27.5105 64.4923 29.032L1.23705 91.9136C0.730947 92.4208 0.224823 92.928 0.224823 93.9421C-0.281034 94.9561 0.224823 94.9562 0.224823 95.4633Z" fill="currentColor"/>
                            </svg>
                          </a>
                      </span>
                   </div>
               </div>
             </div>
         </div>
         <div class="row g-0">
            <div class="col-12">
               <div class="tp-project-button text-center">
                  <a class="tp-btn-yellow" href="{{"portfolioDetail"}}">Load More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- project-area-end -->


   </main>

   @endsection