<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title> Webiqs - Digital Agency </title>
   <meta name="name" content="<?php echo $__env->yieldContent('meta-title'); ?>">
   <meta name="description" content="<?php echo $__env->yieldContent('meta-description'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('user/assets/img/logo/favicon.png')); ?>">

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/bootstrap.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/animate.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/custom-animation.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/swiper-bundle.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/slick.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/flaticon.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/meanmenu.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/font-awesome-pro.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/magnific-popup.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/spacing.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/style.css')); ?>">
</head>

<body>
 

   <!-- pre loader area start -->
   <div id="preloader">
      <div class="preloader">
          <span></span>
          <span></span>
      </div>
  </div>
  <!-- pre loader area end -->

   <header class="d-none d-lg-block">
      <div id="header-sticky" class="tp-header-area header-transparent pl-165 pr-165 pt-35">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-xl-3 col-lg-3">
                  <div class="tp-logo">
                     <a href="<?php echo e('/'); ?>"><img src="<?php echo e(asset('user/assets/img/logo/logo.png')); ?>" alt="h"></a>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7">
                  <div class="tp-main-menu">
                     <nav id="mobile-menu">
                        <ul>
                           <li><a href="<?php echo e('/'); ?>">Home</a></li>
                           <li><a href="<?php echo e('/about'); ?>">About</a></li>
                           <li><a href="<?php echo e(route('services.index')); ?>">Service</a></li>
                           
                           <li class=" "><a href="<?php echo e("/portfolio"); ?>">Portfolio</a> 
                              
                           </li>
                           
                           <li class=" "><a href="<?php echo e('/blog'); ?>">Blog</a>
                              
                           </li>
                           <li><a href="<?php echo e('/contect'); ?>">Contact</a></li>
                           <li class="has-dropdown has-menu"><a href="#">More</a>
                              <ul class="submenu text-start">
                                 <li><a href="<?php echo e('/job'); ?>">Job</a></li>
                                 <li><a href="<?php echo e('/faq'); ?>">Faq</a></li>
                                 <li><a href="<?php echo e('/testimonial'); ?>">Testimonial</a></li>
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2">
                  <div class="tp-menu-bar text-end">
                     <button><i class="fal fa-bars"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- tp-header-area-end -->
   <!-- mobile-menu-area -->
   <div id="header-sticky-mobile" class="tp-md-menu header-transparent d-lg-none pt-40 pb-40">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-6">
               <div class="tp-logo">
                  <a href="#"><img src="<?php echo e(asset('user/assets/img/logo/logo.png')); ?>" alt=""></a>
               </div>
            </div>
            <div class="col-6">
               <div class="bar text-end">
                  <button class="tp-menu-bar" type="submit"><i class="fal fa-bars"></i></button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- mobile-menu-area-end -->
   


   <?php echo $__env->yieldContent('data'); ?>



   
   

     <!-- footer-area-start -->
     <footer class="p-relative">
      <button class="scrollTop d-none d-md-block" data-target="html">
         <div class="tp-backto-top">
            <svg width="16" height="58" viewBox="0 0 16 58" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M8.70711 0.292892C8.31659 -0.0976295 7.68342 -0.0976296 7.2929 0.292892L0.928934 6.65685C0.53841 7.04738 0.53841 7.68054 0.928934 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41422L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292892ZM9 58L9 1L7 1L7 58L9 58Z"
                  fill="#292930" />
            </svg>
         </div>
      </button>
      <div class="footer-clip-shape">
         <svg width="1918" height="98" viewBox="0 0 1918 98" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
               d="M435.5 54L0 1V0L1917.5 1L1309 75.5C1263 82 1178.75 88.6471 1176.5 89C1116 98.5 958.667 98.3333 885.5 97C874.167 96.5 856.5 95.5 850.5 95.5C793.5 95.5 554.667 69.3333 435.5 54Z"
               fill="white" />
         </svg>
      </div>
      <div class="tp-clip-height-one"></div>
      <div class="tp-clip-height-two"></div>
      <div class="tp-footer-area tp-footer-space black-bg p-relative fix pt-0">
         <div class="tp-footer-border-shape d-none"></div>
         <div class="tp-footer-border-shape-two"></div>
         <div class="circle-animation footer-animation d-none d-md-block">
            <span class="tp-circle-3"></span>
         </div>
         <div class="container">
            <div class="tp-footer-widget wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".5s">
               <div class="row align-items-center">
                  <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                     <div class="tp-footer-top">
                        <h5 class="tp-footer-title">More than 10 years in the game and we're <br> just getting started.
                           🤝</h5>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                     <div class="tp-footer-button text-start text-md-end">
                        <a class="tp-btn" href="<?php echo e("contact"); ?>">Available for new Project<i class="far fa-arrow-right"></i> </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tp-copyright-area pb-90 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s">
            <div class="container">
               <div class="tp-copyright-box align-items-center">
                  <div class="row align-items-center">
                     <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                        <div class="tp-copyright-text z-index-1">
                           <p class="m-0">© 2022 Creative Agency , All Right Receved.</p>
                        </div>
                     </div>
                     <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                        <div class="tp-copyright-right text-md-end text-start">
                           <a href="#">Support</a>
                           <a href="#">Privacy policy</a>
                           <a href="#">Tterms and conditions</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tp-copyright-logo-box">
                  <div class="row align-items-center">
                     <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <div class="tp-copyright-logo mt-35">
                           <a href="<?php echo e('/'); ?>"><img src="assets/img/copyright/copyright-logo.png" alt=""></a>
                        </div>
                     </div>
                     <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                        <div class="tp-copyright-social text-md-end mt-25">
                           <a href="#"><i class="fab fa-linkedin-in"></i></a>
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer-area-end -->


   <!-- backto-top-area-start -->
   <button class="scroll-top scroll-to-target d-md-none" data-target="html">
      <i class="far fa-angle-double-up"></i>
  </button>
   <!-- backto-top-area-end -->


   <!-- JS here -->
   <script src="<?php echo e(asset('user/assets/js/jquery.js')); ?>  "></script>
   <script src="<?php echo e(asset('user/assets/js/waypoints.js')); ?>  "></script>
   <script src="<?php echo e(asset('user/assets/js/bootstrap.bundle.min.js')); ?>   "></script>
   <script src="<?php echo e(asset('user/assets/js/swiper-bundle.js')); ?> "></script>
   <script src="<?php echo e(asset('user/assets/js/slick.js')); ?>   "></script>
   <script src="<?php echo e(asset('user/assets/js/magnific-popup.js')); ?>   "></script>
   <script src="<?php echo e(asset('user/assets/js/counterup.js')); ?>  "></script>
   <script src="<?php echo e(asset('user/assets/js/wow.js')); ?>  "></script>
   <script src="<?php echo e(asset('user/assets/js/meanmenu.js')); ?>   "></script>
   <script src="<?php echo e(asset('user/assets/js/isotope-pkgd.js')); ?>  "></script>
   <script src="<?php echo e(asset('user/assets/js/imagesloaded-pkgd.js')); ?>   "></script>
   <script src="<?php echo e(asset('user/assets/js/ajax-form.js')); ?>  "></script>
   <script src="<?php echo e(asset('user/assets/js/main.js')); ?>"></script>
</body>

</html><?php /**PATH E:\xampp\htdocs\authapp\resources\views/user/partisls/layout.blade.php ENDPATH**/ ?>