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
                     <h3 class="breadcrumb__title">Product Details</h3>
                      <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->


      <!--product-details-area-start -->
      <div class="tp-product-details-area pt-130">
         <div class="container">
            <div class="row align-items-center justify-content-center">
               <div class="col-xl-5 col-lg-6 col-12">
                  <div class="tp-product-img">
                     <img src="assets/img/product/product-big-1 (1).jpg" alt="">
                  </div>
               </div>
               <div class="col-xl-5 col-lg-6 col-12">
                  <div class="productdetails">
                     <div class="productdetails__content">
                        <h3 class="pd-title">Ux mind seter Book</h3>
                        <p>Rorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut
                           labore et dolore.</p>
                     </div>
                     <div class="productdetails__ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <span>(4 customer review)</span>
                        <h4>$208.00 <del>/308</del></h4>
                     </div>
                     <div class="productdetails__model">
                        <h5>Model</h5>
                        <a href="#">tyk</a>
                        <a href="#">ffd2</a>
                        <a href="#">23tt</a>
                        <a href="#">r454</a>
                        <a href="#">45hy</a>
                     </div>
                     <div class="productdetails__button">
                        <button class="tp-btn-yellow mb-20 mr-20">Add to cart</button>
                        <button class="tp-btn-sm-sky">Buy now</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="productdetails-tabs">
                  <div class="row justify-content-center">
                     <div class="col-xl-10 col-lg-12 col-12">
                        <div class="product-additional-tab">
                           <div class="pro-details-nav mb-40">
                              <ul class="nav nav-tabs pro-details-nav-btn" id="myTabs" role="tablist">
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-links active" id="home-tab-1" data-bs-toggle="tab" data-bs-target="#home-1" type="button" role="tab" aria-controls="home-1" aria-selected="true"><span>Prodcut Details</span></button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-links" id="information-tab" data-bs-toggle="tab" data-bs-target="#additional-information" type="button" role="tab" aria-controls="additional-information" aria-selected="false"><span>Additional Info</span></button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-links" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false"><span>Review (08)</span></button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-links" id="size-chart-tab" data-bs-toggle="tab" data-bs-target="#chart" type="button" role="tab" aria-controls="chart" aria-selected="false"><span>Faq</span></button>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-content tp-content-tab" id="myTabContent-2">
                              <div class="tab-para tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                                 <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortor</p>
                                 <p>We have covered many special events such as fireworks, fairs, parades, races, walks, awards ceremonies, fashion shows, sporting events, and even a memorial service.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur</p>
                              </div>
                              <div class="tab-pane fade" id="additional-information" role="tabpanel"
                              aria-labelledby="information-tab">
                                 <div class="product__details-info table-responsive">
                                    <table class="table table-striped">
                                       <tbody>
                                          <tr>
                                             <td class="add-info">Weight</td>
                                             <td class="add-info-list"> 2 lbs</td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Dimensions</td>
                                             <td class="add-info-list"> 12 × 16 × 19 in</td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Product</td>
                                             <td class="add-info-list"> Purchase this product on rag-bone.com</td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Color</td>
                                             <td class="add-info-list"> Gray, Black</td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Size</td>
                                             <td class="add-info-list"> S, M, L, XL</td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Model</td>
                                             <td class="add-info-list"> Model </td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Shipping</td>
                                             <td class="add-info-list"> Standard shipping: $5,95L</td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Care Info</td>
                                             <td class="add-info-list"> Machine Wash up to 40ºC/86ºF Gentle Cycle</td>
                                          </tr>
                                          <tr>
                                             <td class="add-info">Brand</td>
                                             <td  class="add-info-list">  Kazen</td>
                                          </tr>
                                       </tbody>
                                   </table>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                 <div class="product-details-review">
                                    <h3 class="tp-comments-title mb-35">3 reviews for “Wide Cotton Tunic extreme hammer”</h3>
                                    <div class="latest-comments mb-55">
                                       <ul>
                                          <li>
                                             <div class="comments-box d-flex">
                                                <div class="comments-avatar mr-25">
                                                   <img src="assets/img/product/client (1).png" alt="">
                                                </div>
                                                <div class="comments-text">
                                                   <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                      <div class="avatar-name">
                                                         <b>Siarhei Dzenisenka</b>
                                                         <div class="comments-date mb-20">
                                                            <span>March 27, 2018 9:51 am</span>
                                                         </div>
                                                      </div>
                                                      <div class="user-rating">
                                                         <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur tristique tortor</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="comments-box d-flex">
                                                <div class="comments-avatar mr-25">
                                                   <img src="assets/img/product/client-2 (1).png" alt="">
                                                </div>
                                                <div class="comments-text">
                                                   <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                      <div class="avatar-name">
                                                         <b>Tommy Jarvis </b>
                                                         <div class="comments-date mb-20">
                                                            <span>March 27, 2018 9:51 am</span>
                                                         </div>
                                                      </div>
                                                      <div class="user-rating">
                                                         <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <p class="m-0">We have covered many special events such as fireworks, fairs, parades, races, walks, awards ceremonies, fashion shows, sporting events, and even a memorial service.
                                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean consequat pulvinar luctus. Suspendisse consectetur</p>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="comments-box d-flex">
                                                <div class="comments-avatar mr-25">
                                                   <img src="assets/img/product/client-3 (1).png" alt="">
                                                </div>
                                                <div class="comments-text">
                                                   <div class="comments-top d-sm-flex align-items-start justify-content-between mb-5">
                                                      <div class="avatar-name">
                                                         <b>Johnny Cash</b>
                                                         <div class="comments-date mb-20">
                                                            <span>March 27, 2018 9:51 am</span>
                                                         </div>
                                                      </div>
                                                      <div class="user-rating">
                                                         <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                   <p class="m-0">This is cardigan is a comfortable warm classic piece. Great to layer with a light top and you can dress up or down given the jewel buttons. I'm 5'8” 128lbs a 34A and the Small fit fine.</p>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="product-details-comment pb-100">
                                       <div class="comment-title mb-20">
                                          <h3>Add a review</h3>
                                          <p>Your email address will not be published. Required fields are marked*</p>
                                       </div>
                                       <div class="comment-rating mb-20 d-flex">
                                          <span>Overall ratings</span>
                                          <ul>
                                             <li><a href="#"><i class="fas fa-star"></i></a></li>
                                             <li><a href="#"><i class="fas fa-star"></i></a></li>
                                             <li><a href="#"><i class="fas fa-star"></i></a></li>
                                             <li><a href="#"><i class="fas fa-star"></i></a></li>
                                             <li><a href="#"><i class="fal fa-star"></i></a></li>
                                          </ul>
                                       </div>
                                       <div class="comment-input-box">
                                          <form action="#">
                                             <div class="row">
                                                <div class="col-xxl-12">
                                                   <div class="comment-input">
                                                      <textarea placeholder="Your review..."></textarea>
                                                   </div>
                                                </div>
                                                <div class="col-xxl-6">
                                                   <div class="comment-input">
                                                      <input type="text" placeholder="Your Name*">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-6">
                                                   <div class="comment-input">
                                                      <input type="email" placeholder="Your Email*">
                                                   </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                   <div class="comment-submit">
                                                      <button type="submit" class="tp-btn-yellow">Submit</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="chart" role="tabpanel" aria-labelledby="size-chart-tab">
                                 <div class="tp-custom-accordio faq-accordio-border">
                                    <div class="accordion" id="accordionExample">
                                       <div class="accordion-items">
                                          <h2 class="accordion-header" id="headingOne">
                                             <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Is my data safe?
                                             </button>
                                          </h2>
                                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                A dedicated product design team can help you achieve your business goals. Whether you need to craft an idea for a completely new product or elevate the quality of an existing solution, we’ll help you to create a product that is laser targeted to your users’ needs and delivers business results.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-items">
                                          <h2 class="accordion-header" id="headingTwo">
                                             <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How does the 30-day free software trial work?
                                             </button>
                                          </h2>
                                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                A dedicated product design team can help you achieve your business goals. Whether you need to craft an idea for a completely new product or elevate the quality of an existing solution, we’ll help you to create a product that is laser targeted to your users’ needs and delivers business results.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-items">
                                          <h2 class="accordion-header" id="headingThree">
                                             <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What happens after my free trial?
                                             </button>
                                          </h2>
                                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                A dedicated product design team can help you achieve your business goals. Whether you need to craft an idea for a completely new product or elevate the quality of an existing solution, we’ll help you to create a product that is laser targeted to your users’ needs and delivers business results.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-items">
                                          <h2 class="accordion-header" id="headingfour">
                                             <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                What makes LessAccounting better than the rest?
                                             </button>
                                          </h2>
                                          <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                A dedicated product design team can help you achieve your business goals. Whether you need to craft an idea for a completely new product or elevate the quality of an existing solution, we’ll help you to create a product that is laser targeted to your users’ needs and delivers business results.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-items">
                                          <h2 class="accordion-header" id="headingfive">
                                             <button class="accordion-buttons" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                                Is my data safe?
                                             </button>
                                          </h2>
                                          <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                A dedicated product design team can help you achieve your business goals. Whether you need to craft an idea for a completely new product or elevate the quality of an existing solution, we’ll help you to create a product that is laser targeted to your users’ needs and delivers business results.
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-items">
                                          <h2 class="accordion-header" id="headingsix">
                                             <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                How does the 30-day free software trial work?
                                             </button>
                                          </h2>
                                          <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                A dedicated product design team can help you achieve your business goals. Whether you need to craft an idea for a completely new product or elevate the quality of an existing solution, we’ll help you to create a product that is laser targeted to your users’ needs and delivers business results.
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- product-details-area-end -->


      <!-- product-slider-area-end -->
      <div class="tp-product-slider pb-100">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-10">
                  <div class="tp-product-slider-title">
                     <h3 class="tp-product-slider-title pb-45">Realated Product</h3>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-xl-10">
                  <div class="tp-product-price-slider">
                     <div class="swiper-container product-slider-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="tpproduct text-center mb-30">
                                 <div class="tpproduct__img">
                                    <img class="w-100" src="assets/img/product/product-2.jpg" alt="">
                                    <div class="tp-product-icon">
                                       <a href="#"><i class="fal fa-shopping-basket"></i></a>
                                       <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                 </div>
                                 <div class="tpproduct__meta">
                                    <h4 class="tp-product-title"><a href="#">Jeff Gothelf learn UX</a></h4>
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
                           <div class="swiper-slide">
                              <div class="tpproduct text-center mb-30">
                                 <div class="tpproduct__img">
                                    <img class="w-100" src="assets/img/product/product-1 (1).jpg" alt="">
                                    <div class="tp-product-icon">
                                       <a href="#"><i class="fal fa-shopping-basket"></i></a>
                                       <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                 </div>
                                 <div class="tpproduct__meta">
                                    <h4 class="tp-product-title"><a href="#">Jeff Gothelf learn UX</a></h4>
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
                           <div class="swiper-slide">
                              <div class="tpproduct text-center mb-30">
                                 <div class="tpproduct__img">
                                    <img class="w-100" src="assets/img/product/product-3 (1).jpg" alt="">
                                    <div class="tp-product-icon">
                                       <a href="#"><i class="fal fa-shopping-basket"></i></a>
                                       <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                 </div>
                                 <div class="tpproduct__meta">
                                    <h4 class="tp-product-title"><a href="#">Jeff Gothelf learn UX</a></h4>
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
                           <div class="swiper-slide">
                              <div class="tpproduct text-center mb-30">
                                 <div class="tpproduct__img">
                                    <img class="w-100" src="assets/img/product/product-5.jpg" alt="">
                                    <div class="tp-product-icon">
                                       <a href="#"><i class="fal fa-shopping-basket"></i></a>
                                       <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                 </div>
                                 <div class="tpproduct__meta">
                                    <h4 class="tp-product-title"><a href="#">Jeff Gothelf learn UX</a></h4>
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
                           <div class="swiper-slide">
                              <div class="tpproduct text-center mb-30">
                                 <div class="tpproduct__img">
                                    <img class="w-100" src="assets/img/product/product-6.jpg" alt="">
                                    <div class="tp-product-icon">
                                       <a href="#"><i class="fal fa-shopping-basket"></i></a>
                                       <a href="#"><i class="fal fa-heart"></i></a>
                                    </div>
                                 </div>
                                 <div class="tpproduct__meta">
                                    <h4 class="tp-product-title"><a href="#">Jeff Gothelf learn UX</a></h4>
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- product-slider-area-end -->


   </main>

   @endsection