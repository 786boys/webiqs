

<?php $__env->startSection('meta-title'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-description'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('data'); ?>

   <!-- tp-header-area-end -->

   <div id="header-sticky-mobile" class="tp-md-header-area d-md-block d-lg-none pt-30 pb-30">
      <div class="container-fluid">
         <div class="row align-items-center">
            <div class="col-md-6 col-6">
               <div class="tp-logo">
                  <a href="<?php echo e('/'); ?>"><img src="assets/img/logo/logo-blue.png" alt=""></a>
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
            <a href="<?php echo e('/'); ?>">
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
                     <h3 class="breadcrumb__title">Services</h3>
                     <a href="<?php echo e('contect'); ?>" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- service-area-start -->
      <div class="tp-service-area-two p-relative black-bg pt-125 pb-145 z-index-1">
         <div class="container">
            <div class="row gx-12">
               <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="col-xl-4  col-lg-4 col-md-6 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
                  <div class="tp-sv-item-two tp-sv-blue-color">
                     <div class="tp-sv-img mb-40">
                        <img src="assets/img/service/service-3.png" alt="">
                     </div>

                     <div class="tp-sv-content-tow">
                        
                        <h3 class="tp-sv-product-design"> <?php echo e($item->servises); ?></h3>
                        <p>At Collax we specialize in designing, building, shipping and scaling beautiful, usable
                           products
                           with blazing-fast</p>
                     </div>
                     <div class="tp-sv-icon-two">
                        <a href="<?php echo e(route('services.show',$item->id )); ?>"><i class="fas fa-long-arrow-up"></i></a>
                     </div>

                     
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
         </div>
      </div>
      <!--service-area-end -->

      <!--case-area-start -->
      <div class="sv-case-area pt-130 pb-130">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="project-section-box-two text-center pb-60">
                     <h2 class="tp-title-sm">Our recent completed case studies</h2>
                  </div>
               </div>
            </div>
            <div class="row gx-6">
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
                  <div class="svcase text-center mb-50">
                     <div class="svcase__img fix">
                        <img src="assets/img/service/service-9.1.jpg" alt="">
                     </div>
                     <div class="svcase__content">
                        <h4 class="sv-case-sm-title"><a href="<?php echo e("portfolioDetail"); ?>">Godaddy user flow solution</a></h4>
                        <p>At Collax we specialize in designing, building, <br> shipping and scaling beautifu</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".8s">
                  <div class="svcase text-center mb-50">
                     <div class="svcase__img fix">
                        <img src="assets/img/service/service-9.2.jpg" alt="">
                     </div>
                     <div class="svcase__content">
                        <h4 class="sv-case-sm-title"><a href="<?php echo e("portfolioDetail"); ?>">Godaddy user flow solution</a></h4>
                        <p>At Collax we specialize in designing, building, <br> shipping and scaling beautifu</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow tpfadeUp" data-wow-duration=".7s" data-wow-delay="1s">
                  <div class="svcase text-center mb-50">
                     <div class="svcase__img fix">
                        <img src="assets/img/service/service-9.3.jpg" alt="">
                     </div>
                     <div class="svcase__content">
                        <h4 class="sv-case-sm-title"><a href="<?php echo e("portfolioDetail"); ?>">Godaddy user flow solution</a></h4>
                        <p>At Collax we specialize in designing, building, <br> shipping and scaling beautifu</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="case-button text-center pt-30">
                     <button class="tp-btn-sky">View all Casestdies</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--case-area-end -->

      <!--testimonial-area-start -->
      <div class="tp-testimonial-area pb-130 p-relative">
         <div class="bs-testi-shape-1 d-none d-lg-block">
            <img src="assets/img/testimonial/testimonial-shape-5.3.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-testi-wrapper d-flex pb-50 justify-content-between align-items-end">
                     <div class="tp-testimonial-title-box ">
                        <h5 class="tp-subtitle">Testimonial</h5>
                        <h2 class="tp-title-sm">Check what client say</h2>
                     </div>
                     <div class="tp-testi-button-right-side">
                        <a class="tp-btn-yellow" href="<?php echo e('testimonial'); ?>">More Testimonial</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-testimonial-slider-section-four">
               <div class="swiper-container testi-slider-active-five ">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="tp-testimonial-item-four">
                           <div
                              class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                              <div class="tp-testimonial-item-four__logo">
                                 <a href=""><img src="assets/img/testimonial/testi-brands-1.png" alt=""></a>
                              </div>
                              <div class="tp-testimonial-item-four__rating">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                              </div>
                           </div>
                           <div class="tp-testi-paragraph pb-40">
                              <p>Wow. What a great experience with this copywriter. Muhammad Noman is a very talented
                                 copywriter. yesterday I got his first Email that was amazing...
                                 experience with him</p>
                           </div>
                           <div class="tp-testimonial-item-four__client d-flex align-items-center">
                              <div class="mr-20">
                                 <img src="assets/img/testimonial/testi-4.2.png" alt="">
                              </div>
                              <div class="tp-testimonial-item-four__position">
                                 <h4 class="m-0">Leslie Alexander</h4>
                                 <span>P. Desiger of (Amazon)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-testimonial-item-four">
                           <div
                              class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                              <div class="tp-testimonial-item-four__logo">
                                 <a href=""><img src="assets/img/testimonial/testi-brands-2.png" alt=""></a>
                              </div>
                              <div class="tp-testimonial-item-four__rating">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                              </div>
                           </div>
                           <div class="tp-testi-paragraph pb-40">
                              <p>Excellent UI/Ux Design. She literally transformed my App into a wonderful piece of art.
                                 She's got awesome Ui design skills. - Hardworking Dedicated Great Communication Skills
                              </p>
                           </div>
                           <div class="tp-testimonial-item-four__client d-flex align-items-center">
                              <div class="mr-20">
                                 <img src="assets/img/testimonial/testi-4.5.png" alt="">
                              </div>
                              <div class="tp-testimonial-item-four__position">
                                 <h4 class="m-0">Guy Hawkins</h4>
                                 <span>Ux Designer of (Godaddy)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="tp-testimonial-item-four">
                           <div
                              class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                              <div class="tp-testimonial-item-four__logo">
                                 <a href=""><img src="assets/img/testimonial/testi-brands-3.png" alt=""></a>
                              </div>
                              <div class="tp-testimonial-item-four__rating">
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                                 <span><i class="fas fa-star"></i></span>
                              </div>
                           </div>
                           <div class="tp-testi-paragraph pb-40">
                              <p>Absolutely amazing. we can't believe how incredible this turned out. Yetta Thomas is a
                                 true professional. he is such a honest, decent and reliable.
                                 and he have greate experience.</p>
                           </div>
                           <div class="tp-testimonial-item-four__client d-flex align-items-center">
                              <div class="mr-20">
                                 <img src="assets/img/testimonial/testi-4.1.png" alt="">
                              </div>
                              <div class="tp-testimonial-item-four__position">
                                 <h4 class="m-0">Kristin Watson</h4>
                                 <span>CEO of (Zlitemes)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial-area-end -->

      <!-- news-area-start -->
      <div class="tp-news-letter-area tp-news-letter-bg pt-65 pb-60" data-background="assets/img/news/news-bg.jpg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-7 col-md-12 wow tpfadeLeft" data-wow-duration=".3s" data-wow-delay=".6s">
                  <div class="tp-news-sub-wrapper pr-50">
                     <div class="tp-news-letter-section-box">
                        <h5 class="tp-subtitle subtitle-secondary-color">Get every update</h5>
                        <h2 class="tp-title-sm tp-title-sm tp-white-text pb-25">A recognizable & awarded partner..
                           become our partner
                        </h2>
                     </div>
                     <div class="tp-news-button">
                        <a class="tp-btn-lg-yellow mr-20" href="<?php echo e('contect'); ?>">Become a Partner</a>
                        <a class="tp-btn-sky" href="<?php echo e('about'); ?>">Press Office</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 wow tpfadeRight" data-wow-duration=".5s" data-wow-delay=".8s">
                  <div class="tp-news-letter-img text-md-start text-lg-end pr-45">
                     <img src="assets/img/404/news-7.1.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- news-area-end -->


   </main>

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.partisls.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/user/service-3.blade.php ENDPATH**/ ?>