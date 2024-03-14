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
                     <h3 class="breadcrumb__title">Job Details</h3>
                      <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!--job-details-area-start -->
      <div class="job-details-info pt-120 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-6  col-lg-6">
                  <div class="jobdetails">
                     <div class="jobdetails__subtitle">
                        <h5 class="jb-subtitle">Ongoing</h5>
                     </div>
                     <div class="jobdetails__title">
                        <h4 class="job-title pb-10">Product Manager (Fintech) </h4>
                        <span>Product Management</span>
                     </div>
                     <div class="jobdetails__paragraph">
                        <p class="pb-20">We're looking for a new Product Manager to join our 14-people Product
                           Management team. Check out our Team's expert blog here. :)
                        </p>
                        <p class="pb-30">Since last year, we've been building a new team of <b>Product Managers.</b> Our
                           goal is to build world-class products, elevate the product strategy and execution support we
                           deliver to our clients.
                        </p>
                     </div>
                     <div class="jobdetails__feature">
                        <ul>
                           <li> <i class="fal fa-check"></i> <span>Salary :</span> base salary + salary review every 6
                              months</li>
                           <li> <i class="fal fa-check"></i> <span>Perks : </span> + 1 000 PLN home office bonus,
                              Multisport card, private health insurance, discounts on Apple products, development
                              budget, and more!</li>
                           <li> <i class="fal fa-check"></i> <span>B2B : </span> +16 paid days off</li>
                           <li> <i class="fal fa-check"></i> <span>Required skills :</span> 2-year experience in
                              managing complex digital products; C1+ English; experience in Agile</li>
                           <li> <i class="fal fa-check"></i> <span>B2B :</span> +16 paid days off</li>
                           <li> <i class="fal fa-check"></i> <span>Location : </span> Poznań, remotely in Poland,
                              remotely in the EU </li>
                        </ul>
                     </div>
                     <div class="jobdetails__img">
                        <img src="assets/img/404/job-1.jpg" alt="">
                     </div>
                     <div class="jobdetails__title">
                        <h4 class="job-title pb-20">Your responsibilities :</h4>
                     </div>
                     <div class="jobdetails__paragraph">
                        <p class="mb-30">Our mission at Nerox is to help entrepreneurs and innovators shape the world
                           through beautiful software. We care about trust, taking ownership, and transparency. As a
                           Certified B Corporation®, we offer a safe, inclusive and productive environment for all team
                           members, and we’re always open to feedback.</p>
                     </div>
                     <div class="jobdetails__feature jobdetails__feature-2">
                        <ul>
                           <li> <i class="fal fa-check"></i> <span>Supporting Nerox’s clients in developing a viable
                                 vision, strategy, and roadmap for their products.</span> Working on product discovery
                              and development in order to increase the client's business value.</li>
                           <li> <i class="fal fa-check"></i> <span>Gaining a deep understanding of our customers’ needs,
                                 requirements, and objectives</span> through taking part in market research,
                              experimentation, user testing, implementing continuous feedback systems, and performing
                              data analysis.</li>
                           <li> <i class="fal fa-check"></i> <span>Supporting Nerox’s clients in developing a viable
                                 vision, strategy, and roadmap for their products.</span> Working on product discovery
                              and development in order to increase the client's business value.</li>
                           <li> <i class="fal fa-check"></i> <span>Required skills :</span> 2-year experience in
                              managing complex digital products; C1+ English; experience in Agile</li>
                           <li> <i class="fal fa-check"></i> <span>Gaining a deep understanding of our customers’ needs,
                                 requirements, and objectives</span> through taking part in market research,
                              experimentation, user testing, implementing continuous feedback systems, and performing
                              data analysis.</li>
                           <li> <i class="fal fa-check"></i> <span>Location : </span> Poznań, remotely in Poland,
                              remotely in the EU </li>
                        </ul>
                     </div>
                     <div class="jobdetails__title">
                        <h4 class="job-title pb-15">All About Collax </h4>
                     </div>
                     <div class="jobdetails__paragraph">
                        <p>Our mission at Netguru is to help entrepreneurs and innovators shape the world through
                           beautiful software. We care about trust, taking ownership, and transparency. As a Certified B
                           Corporation®, we offer a safe, inclusive and productive environment for all team members, and
                           we’re always open to feedback.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="tpcontact">
                     <div class="tpcontact__form tpcontact__form-2">
                        <form action="#">
                           <input type="text" placeholder="Enter your Name">
                           <input type="email" placeholder="Enter your Mail">
                           <textarea placeholder="Enter your Massage*"></textarea>
                        </form>
                        <button class="tp-btn-yellow w-100">Apply Now</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--job-details-area-end -->

   </main>
   @endsection