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
                     <h3 class="breadcrumb__title">Blog & Article</h3>
                      <a href="{{'contect'}}" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      
      <!-- postbox area start -->
      <div class="postbox__area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="postbox__wrapper pr-20">
                     <article class="postbox__item format-image mb-50 transition-3">
                        <div class="postbox__thumb w-img">
                           <a href="{{'blogdetail'}}">
                              <img src="{{asset('user/assets/img/blog/blog-big-1.jpg')}}" alt="">
                           </a>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__meta">
                              <span><a href="#"><i class="fal fa-user-circle"></i> Alextina </a></span>
                              <span><a href="#"><i class="fal fa-clock"></i> Dec 28, 2022</a></span>
                              <span><a href="#"><i class="fal fa-comment-alt-lines"></i>(04) Coments</a></span>
                              <span><a href="#"><i class="fal fa-eye"></i> 1,526 views</a></span>
                           </div>
                           <h3 class="postbox__title">
                              <a href="{{'blogdetail'}}">How To Create A Vanilla JavaScript Gantt Chart: Adding Task Editing Features (Part 2)</a>
                           </h3>
                           <div class="postbox__text">
                              <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                           </div>
                           <div class="post__button">
                              <a class="tp-btn-yellow" href="{{'blogdetail'}}"> READ MORE</a>
                           </div>
                        </div>
                     </article>
                     <article class="postbox__item format-image mb-50 transition-3 fix">
                        <div class="swiper-container blog-post-slider-active">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <img src="{{asset('user/assets/img/blog/blog-big-1.jpg')}}" alt="">
                              </div>
                              <div class="swiper-slide">
                                 <img src="{{asset('user/assets/img/blog/blog-big-2.jpg')}}" alt="">
                              </div>
                              <div class="swiper-slide">
                                 <img src="{{asset('user/assets/img/blog/blog-big-3.jpg')}}" alt="">
                              </div>
                           </div>
                           <div class="blog-post-slider-nav">
                              <div class="blog-nav-prev nav-button"><i class="fal fa-angle-left"></i></div>
                              <div class="blog-nav-next nav-button"><i class="fal fa-angle-right"></i></div>
                           </div>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__meta">
                              <span><a href="#"><i class="fal fa-user-circle"></i> Alextina </a></span>
                              <span><a href="#"><i class="fal fa-clock"></i> Dec 28, 2022</a></span>
                              <span><a href="#"><i class="fal fa-comment-alt-lines"></i>(04) Coments</a></span>
                              <span><a href="#"><i class="fal fa-eye"></i> 1,526 views</a></span>
                           </div>    
                           <h3 class="postbox__title">
                              <a href="{{'blogdetail'}}">How To Apply UX Principles To Embedded Systems: Learnings From The Field</a>
                           </h3>
                           <div class="postbox__text">
                              <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                           </div>
                           <div class="post__button">
                              <a class="tp-btn-yellow" href="{{'blogdetail'}}"> READ MORE</a>
                           </div>  
                        </div>
                     </article>
                     <article class="postbox__item format-video mb-50 transition-3">
                        <div class="postbox__thumb postbox__video w-img p-relative">
                           <a href="{{'blogdetail'}}">
                              <img src="{{asset('user/assets/img/blog/blog-big-3.jpg')}}" alt="">
                           </a>
                           <a href="https://youtu.be/-WRZI63emjs" class="play-btn pulse-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__meta">
                              <span><a href="#"><i class="fal fa-user-circle"></i> Alextina </a></span>
                              <span><a href="#"><i class="fal fa-clock"></i> Dec 28, 2022</a></span>
                              <span><a href="#"><i class="fal fa-comment-alt-lines"></i>(04) Coments</a></span>
                              <span><a href="#"><i class="fal fa-eye"></i> 1,526 views</a></span>
                           </div>
                           <h3 class="postbox__title">
                              <a href="{{'blogdetail'}}">DevFest For Ukraine, A Charity Conference On The Future Of Tech </a>
                           </h3>
                           <div class="postbox__text">
                              <p>Laboratories used for scientific research take many forms because of the differing requirements of specialists in the various fields of science and engineering. A physics laboratory</p>
                           </div>
                           <div class="post__button">
                              <a class="tp-btn-yellow" href="{{'blogdetail'}}"> READ MORE</a>
                           </div>
                        </div>
                     </article>
                     <div class="basic-pagination">
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
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper">
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title">Search Here</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__search">
                              <form action="#">
                                 <div class="sidebar__search-input-2">
                                    <input type="text" placeholder="Search your keyword...">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title">Categories</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="{{'blog'}}">Web Design<span>26</span></a></li>
                              <li><a href="{{'blog'}}">Devlopment <span>30</span></a></li>
                              <li><a href="{{'blog'}}">Branding <span>71</span></a></li>
                              <li><a href="{{'blog'}}">MOtion Design <span>56</span></a></li>
                              <li><a href="{{'blog'}}">UI/UX Deisgn <span>60</span></a></li>
                              <li><a href="{{'blog'}}">Graphic Design <span>99</span></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title">Pages</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="{{'blog'}}">Web Design <span><i class="fal fa-angle-right"></i></span></a></li>
                              <li><a href="{{'blog'}}">Devlopment <span><i class="fal fa-angle-right"></i></span></a></li>
                              <li><a href="{{'blog'}}">Branding <span><i class="fal fa-angle-right"></i></span></a></li>
                              <li><a href="{{'blog'}}">MOtion Design<span><i class="fal fa-angle-right"></i></span></a></li>
                              <li><a href="{{'blog'}}">UI/UX Deisgn  <span><i class="fal fa-angle-right"></i></span></a></li>
                              <li><a href="{{'blog'}}">Graphic Design  <span><i class="fal fa-angle-right"></i></span></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title">Recent Post</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post rc__post">
                              <div class="rc__post mb-20 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="{{'blogdetail'}}"><img src="{{asset('user/assets/img/blog/blog-sm-1.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>4 March. 2022</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="{{'blogdetail'}}">Don’t Underestimate The Software</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post mb-20 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="{{'blogdetail'}}"><img src="{{asset('user/assets/img/blog/blog-sm-2.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>4 March. 2022</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="{{'blogdetail'}}">Designing Human-Machine Interfaces..</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post mb-20 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="{{'blogdetail'}}"><img src="{{asset('user/assets/img/blog/blog-sm-3.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>4 March. 2022</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="{{'blogdetail'}}">Web Design Done Well: Excellent</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post mb-20 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="{{'blogdetail'}}"><img src="{{asset('user/assets/img/blog/blog-sm-4.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span>4 March. 2022</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="{{'blogdetail'}}">Don’t Underestimate The Software </a>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title">Tags</h3>
                        <div class="sidebar__widget-content">
                           <div class="tagcloud">
                              <a href="{{'blog'}}">landing</a>
                              <a href="{{'blog'}}">Charity</a>
                              <a href="{{'blog'}}">apps</a>
                              <a href="{{'blog'}}">Education </a>
                              <a href="{{'blog'}}">data</a>
                              <a href="{{'blog'}}">book</a>
                              <a href="{{'blog'}}">Design</a>
                              <a href="{{'blog'}}">website</a>
                              <a href="{{'blog'}}">landing page</a>
                              <a href="{{'blog'}}">data</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- postbox area end -->


   </main>

   @endsection