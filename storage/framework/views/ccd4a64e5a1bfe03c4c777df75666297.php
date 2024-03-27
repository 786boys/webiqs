

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
                     <a href="<?php echo e('/'); ?>"><img src="<?php echo e(asset('user/assets/img/logo/logo-blue.png')); ?>" alt=""></a>
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
                  <img src="<?php echo e(asset('user/assets/img/logo/logo-white.png')); ?>" alt="">
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
                  <div class="col-3 col-sm-3"><a href="#"><img src="<?php echo e(asset('user/assets/img/offcanvas/insta-1.jpg')); ?>" alt=""></a></div>
                  <div class="col-3 col-sm-3"><a href="#"><img src="<?php echo e(asset('user/assets/img/offcanvas/insta-2.jpg')); ?>" alt=""></a></div>
                  <div class="col-3 col-sm-3"><a href="#"><img src="<?php echo e(asset('user/assets/img/offcanvas/insta-4.jpg')); ?>" alt=""></a></div>
                  <div class="col-3 col-sm-3"><a href="#"><img src="<?php echo e(asset('user/assets/img/offcanvas/insta-4.jpg')); ?>" alt=""></a></div>
               </div>
              </div>
            </div>
         </div>
      </div>
   
      <div class="body-overlay"></div>

   <main>

      <!-- breadcrumb area start -->
      <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative"
         data-background="<?php echo e(asset('user/assets/img/404/ab-1.1.jpg')); ?>">
         <div class="ac-about-shape-img z-index-1">
            <img src="<?php echo e(asset('user/assets/img/breadcrum/ab-shape-1.1.jpg')); ?>" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">Our Review</h3>
                      <a href="<?php echo e('contect'); ?>" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!--testimonial-area-start -->
      <div class="tp-testimonial-area pt-130 pb-130 p-relative">
         <div class="container">
            <div class="row">

               <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
               
               <div class="col-xl-12 wow tpfadeUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <div class="swiper-slide">
                     <div class="tp-testimonial-item-four testimonial-html-space mb-30">
                        <div
                           class="tp-testimonial-item-four__meta d-flex justify-content-between align-items-center mb-60">
                           <div class="h3 text-dark">
                              
                             
                              <strong><em> <?php echo e($item->name); ?></em></strong>
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
                           <p><?php echo e($item->about); ?></p>
                        </div>
                        <div class="tp-testimonial-item-four__client d-flex align-items-center">
                           <div class="mr-20">
                               <img src="<?php echo e(asset('storage/'. $item->image)); ?>" width="100px" class="img-fluid" />

                           </div>
                           <div class="tp-testimonial-item-four__position">
                              <h4 class="m-0"><?php echo e($item->name); ?></h4>
                              <span><?php echo e($item->companyName); ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            
         </div>
      </div>
      <!-- testimonial-area-end -->

      <!-- news-area-start -->
      <div class="tp-news-letter-area tp-news-letter-bg pt-200 pb-150" data-background="<?php echo e(asset('user/assets/img/news/news-bg.jpg')); ?>">
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
                        <a class="tp-btn-lg-yellow" href="<?php echo e('contect'); ?>">Become a Partner</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- news-area-end -->

   </main>


   <!-- footer-area-start -->

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.partisls.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/user/testimonial.blade.php ENDPATH**/ ?>