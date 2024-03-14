@extends('user.partisls.layout')

@section('meta-title')
- webiqs
@endsection
@section('meta-description')
- webiqs
@endsection
@section('data')


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
         <div class="ac-about-shape-img">
            <img src="assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">Ritarexa Diramen</h3>
                      <a href="{{'contact'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!-- tp-abou-me-area-start -->
      <div class="am-about-me-area pt-110 pb-100">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-5 col-lg-5 col-12">
                  <div class="ac-ab-img fix">
                     <img src="assets/img/about/about-8.1 (1).jpg" alt="">
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-12">
                  <div class="row">
                     <div class="col-xl-7 col-lg-8 col-md-6">
                        <div class="amaboutinfo">
                           <div class="amaboutinfo__client-info">
                              <h4>Ritarexa Ditarmen</h4>
                              <span>UI/UX Designer</span>
                              <p>Phasellus in libero et nunc malesuada tincidu Morbi auctor tristique semper. Nunc
                                 condimentum dapibus felis</p>
                           </div>
                           <div class="amaboutinfo__experience">
                              <p><b>Expertise:</b> Genetic Specialist</p>
                              <p><b>Experience:</b> 5 Years</p>
                              <p><a href="mailto:webmail.info@gmail.com"><b>E-mail:</b> webmail.info@gmail.com</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-5 col-lg-4 col-md-6">
                        <div class="amaboutsocial text-start text-md-end">
                           <div class="amaboutsocial__icon mb-30">
                              <a href="" class="si-btn-link">
                                 <div class="tp-si-wrapper d-flex justify-content-end">
                                    <div class="tp-si__text"><span>Facebook</span></div>
                                    <div class="tp-si__icon"><i class="fab fa-facebook-f"></i></div>
                                 </div>
                              </a>
                           </div>
                           <div class="amaboutsocial__icon mb-30">
                              <a href="" class="si-btn-link">
                                 <div class="tp-si-wrapper d-flex justify-content-end">
                                    <div class="tp-si__text tp-si-color-1"><span>Pintarest</span></div>
                                    <div class="tp-si__icon tp-si-color-1"><i
                                             class="fab fa-pinterest-p"></i></div>
                                 </div>
                              </a>
                           </div>
                           <div class="amaboutsocial__icon mb-30">
                              <a href="" class="si-btn-link">
                                 <div class="tp-si-wrapper d-flex justify-content-end">
                                    <div class="tp-si__text  tp-si-color-2"><span>Behance</span></div>
                                    <div class="tp-si__icon  tp-si-color-2"><i class="fab fa-behance"></i></div>
                                 </div>
                              </a>
                           </div>
                           <div class="amaboutsocial__icon mb-30">
                              <a href="" class="si-btn-link">
                                 <div class="tp-si-wrapper d-flex justify-content-end">
                                    <div class="tp-si__text  tp-si-color-3"><span>Twitter</span></div>
                                    <div class="tp-si__icon  tp-si-color-3"><i class="fab fa-twitter"></i>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           <div class="amaboutsocial__icon mb-30">
                              <a href="" class="si-btn-link">
                                 <div class="tp-si-wrapper d-flex justify-content-end">
                                    <div class="tp-si__text  tp-si-color-4"><span>Youtube</span></div>
                                    <div class="tp-si__icon  tp-si-color-4"><i class="fab fa-youtube"></i>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- tp-about-me-area-end -->

      <!-- exprience-area-start -->
      <div class="tp-skill-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="amskill">
                     <div class="amskill__title">
                        <h3 class="am-skill-title">Personal Experience</h3>
                        <p class="pb-10"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                           doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                           quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                           sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                           voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                        </p>
                        <p>Must explain to you how all this mistaken idea of denouncing works pleasure and praising uts
                           pain was born and I will gives you a itself completed account of the system, and sed expounds
                           the ut actual teachings of that greater sed explores truth. Denouncing works pleasures and
                           praising pains was us born and I will gives you a completed ut workers accounts of the
                           system. sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                           ratione voluptatem sequi nesciunt.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row feature-bottom-space">
               <div class="col-xl-4 col-lg-4">
                  <div class="amfeature">
                     <div class="amfeature__item">
                        <h4 class="am-skill-sm-title">Skills</h4>
                        <p class=" am-p-space-1">Must explain to you how all praising uts pain was born and I will gives
                           you a itself
                           completed account of the system, and sed expounds the ut actual teachings of that greater</p>
                     </div>
                     <div class="amfeature__list">
                        <ul>
                           <li><i class="fal fa-check"></i> Extramural Funding</li>
                           <li><i class="fal fa-check"></i> Bacteria Markers</li>
                           <li><i class="fal fa-check"></i> Type of system involved</li>
                           <li><i class="fal fa-check"></i> Nam nec mi euismod euismod</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4">
                  <div class="amfeature am-fea-space">
                     <div class="amfeature__item">
                        <h4 class="am-skill-sm-title">Education</h4>
                        <p class=" am-p-space-2">Must explain to you how all praising uts pain was born and I will gives
                           you a itself
                           completed account of the system, and sed expounds the ut actual teachings of that greater</p>
                     </div>
                     <div class="amfeature__list">
                        <ul>
                           <li><i class="fal fa-check"></i> Extramural Funding</li>
                           <li><i class="fal fa-check"></i> Bacteria Markers</li>
                           <li><i class="fal fa-check"></i> Type of system involved</li>
                           <li><i class="fal fa-check"></i> Nam nec mi euismod euismod</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4">
                  <div class="amfeature am-fea-space-2">
                     <div class="amfeature__item">
                        <h4 class="am-skill-sm-title">Awards</h4>
                        <p class="am-p-space-3">Must explain to you how all praising uts pain was born and I will gives
                           you a itself
                           completed account of the system, and sed expounds the ut actual teachings of that greater</p>
                     </div>
                     <div class="amfeature__list">
                        <ul>
                           <li><i class="fal fa-check"></i> Extramural Funding</li>
                           <li><i class="fal fa-check"></i> Bacteria Markers</li>
                           <li><i class="fal fa-check"></i> Type of system involved</li>
                           <li><i class="fal fa-check"></i> Nam nec mi euismod euismod</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- exprience-area-end -->

      <!-- contact-area-start -->
      <div class="am-contact-area pb-130">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="am-contact-info p-relative">
                     <div>
                        <h4 class="am-contact-title">Direct massage me!</h4>
                     </div>
                     <div class="am-border-shape">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="contact-form text-center">
                     <form action="#">
                        <div class="row">
                           <div class="col-md-6 col-12">
                              <div class="input">
                                 <input type="text" placeholder="Enter your Name">
                              </div>
                           </div>
                           <div class="col-md-6 col-12">
                              <div class="input">
                                 <input type="email" placeholder="Enter you mail">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="textarea">
                                 <textarea placeholder="Enter your massage"></textarea>
                              </div>
                           </div>
                        </div>
                        <input class="tp-btn-lg-yellow" type="submit" value="Send Massage">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact-area-end -->


   </main>
   <!-- footer-area-start -->

   @endsection