

<?php $__env->startSection('meta-title'); ?>
<?php echo e($service->meta_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta-description'); ?>
<?php echo e($service->mete_description); ?>

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
               <img src="assets/img/logo/logo-white.png')}}" alt="">
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
                     <h3 class="breadcrumb__title"><?php echo e($service->servises); ?></h3>
                     <a href="<?php echo e('about'); ?>" class="tp-btn-white-border">Lets work together <i
                           class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!-- service-details- area- start -->

   
      <tr>
        
      <div class="service-details-area">
         <div class="container">
            <div class="row service-pt-pb">
               <div class="col-xl-6 col-lg-6">
                  <div class="sd-service-details">
                     <h3 class="tp-title-sm service-details-space">
                        
                        <?php echo e($service->title_fst); ?></h3>
                     
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="sd-service-details-paragraph">
                     <p class="pb-15">
                        
                        <?php echo e($service->description_fst); ?>

                     </p>
                     
                  </div>
               </div>
            </div>
           
            <div class="row">
               <div class="col-12">
                  <div class="sd-big-img">
                     <img src="<?php echo e(asset('user/assets/img/service/service-icon-10.1.png')); ?>" alt="">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="sd-service-details">
                     <h3 class="tp-title-sm service-details-space">
                        
                        <?php echo e($service->title_sec); ?>

                     </h3>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="sd-service-details-paragraph">
                     <p class="pb-15">
                        
                     <?php echo e($service->description_sec); ?>

                  </p> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service-details-area- end -->

      <!-- accordion-area-start -->
      <div class="sd-accordio-area grey-bg pt-130 pb-130">
         <div class="container">
            <div class="row">
               <div class="col-xl-7">
                  <h3 class="tp-title-sm mb-90">Solutions: all your questions answered</h3>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-custom-accordio">
                     <div class="accordion" id="accordionExample">
                        <div class="accordion-items faq-accordio-border">
                           <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Is my data safe?
                              </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 A dedicated product design team can help you achieve your business goals. Whether you
                                 need to craft an idea for a completely new product or elevate the quality of an
                                 existing solution, we’ll help you to create a product that is laser targeted to your
                                 users’ needs and delivers business results.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-items">
                           <h2 class="accordion-header" id="headingTwo">
                              <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 How does the 30-day free software trial work?
                              </button>
                           </h2>
                           <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 A dedicated product design team can help you achieve your business goals. Whether you
                                 need to craft an idea for a completely new product or elevate the quality of an
                                 existing solution, we’ll help you to create a product that is laser targeted to your
                                 users’ needs and delivers business results.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-items">
                           <h2 class="accordion-header" id="headingThree">
                              <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 What happens after my free trial?
                              </button>
                           </h2>
                           <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 A dedicated product design team can help you achieve your business goals. Whether you
                                 need to craft an idea for a completely new product or elevate the quality of an
                                 existing solution, we’ll help you to create a product that is laser targeted to your
                                 users’ needs and delivers business results.
                              </div>
                           </div>
                        </div>
                        <div class="accordion-items">
                           <h2 class="accordion-header" id="headingfour">
                              <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                 What makes LessAccounting better than the rest?
                              </button>
                           </h2>
                           <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                 A dedicated product design team can help you achieve your business goals. Whether you
                                 need to craft an idea for a completely new product or elevate the quality of an
                                 existing solution, we’ll help you to create a product that is laser targeted to your
                                 users’ needs and delivers business results.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- accordion-area-end -->

   </main>

   <?php $__env->stopSection(); ?>
   <!-- footer-area-start -->

   
<?php echo $__env->make('user.partisls.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/user/service-details.blade.php ENDPATH**/ ?>