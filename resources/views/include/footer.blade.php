 <!-- rts footer two area wrapper -->
 <div class="rts-footer-area footer-two mt-dec-footer-map bg-footer-two bg_image" style="background-image: url('{{ asset('font-end/assets/images/footer/01.webp') }}');">
     <div class="container bg-shape-f1">
         <!-- rts footer area -->
         <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">

             <div class="col-xl-5 col-md-6 col-sm-12 col-12">
                 <div class="footer-one-single-wized mid-bg">
                     <div class="wized-title">
                         <h5 class="title">Socail Media</h5>
                         <img loading="lazy" src="{{ asset('font-end/assets/images/footer/01.svg') }}" alt="finbiz_footer">
                     </div>
                     <div class="opening-time-inner">
                         <ul class="social-wrapper-one">
                             <li>
                                 <a href="{{ $contact->facebook_url }}" target="_blank" aria-label="Facebook">
                                     <i class="fab fa-facebook-f"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="{{ $contact->instagram_url }}" target="_blank" aria-label="instagram">
                                     <i class="fab fa-instagram"></i>
                                 </a>
                             </li>
                             <li>
                                 <a class="mr--0" href="{{ $contact->linkedin_url }}" target="_blank" aria-label="linkedin">
                                     <i class="fab fa-linkedin-in"></i>
                                 </a>
                             </li>
                             <a href="{{ route('contact-us') }}" class="rts-btn btn-primary btn-white ml--20">Follow Us</a>
                         </ul>
                     </div>
                     <div class="wized-title pt--20">
                         <h5 class="title">Contact Us</h5>
                         <img loading="lazy" src="{{ asset('font-end/assets/images/footer/01.svg') }}" alt="finbiz_footer">
                     </div>
                     <div class="opening-time-inner">
                         <ul class="social-wrapper-one">
                             <li>
                                 <a style="color: #fff;">
                                     <i class="fa-solid fa-map-location"></i>
                                     Address :-
                                     <br>
                                     {{ $contact->address }}
                                 </a>
                             </li>

                         </ul>
                         <ul class="social-wrapper-one">
                             <li>
                                 <a href="tel:91{{ $contact->number }}" style="color: #fff;">
                                     <i class="fa-solid fa-phone"></i>
                                     +91-{{ $contact->number }}
                                 </a>
                             </li>

                         </ul>
                         <ul class="social-wrapper-one">
                             <li>
                                 <a href="mailto:{{ $contact->email }}" style="color: #fff;">
                                     <i class="fa-solid fa-envelope"></i>
                                     {{ $contact->email }}
                                 </a>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>
             <!-- footer mid area end -->
             <div class="col-xl-4 col-md-6 col-sm-12 col-12 pl--50 pl_sm--15">
                 <div class="footer-one-single-wized">
                     <div class="wized-title">
                         <h5 class="title">Services</h5>
                         <img loading="lazy" src="{{ asset('font-end/assets/images/footer/01.svg') }}" alt="finbiz_footer">
                     </div>
                     <div class="quick-link-inner">
                         <ul class="links" style="color: #fff;">
                             @foreach ($servicecategories as $category )
                             <li><a href="{{ route('services.category', $category->category_slug) }}" style="color: #fff;"><i class="fa-solid fa-arrow-right"></i> {{ $category->name }}</a></li>
                             @endforeach
                             <li><a href="{{ route('services') }}" style="color: #fff;"><i class="fa-solid fa-arrow-right"></i> View All</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <!-- footer mid area -->

             <!-- footer end area post -->
             <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                 <div class="footer-one-single-wized margin-left-65">
                     <div class="wized-title">
                         <h5 class="title">Ouick Links</h5>
                         <img loading="lazy" src="{{ asset('font-end/assets/images/footer/01.svg') }}" alt="finbiz_footer">
                     </div>
                     <div class="quick-link-inner">
                         <ul class="links">
                             <li><a href="{{ route('about-us') }}" style="color: #fff;"><i class="fa-solid fa-arrow-right"></i> About Us</a></li>
                             <li><a href="{{ route('contact-us') }}" style="color: #fff;"><i class="fa-solid fa-arrow-right"></i> Contact Us</a></li>
                             <li><a href="{{ route('disclaimer') }}" style="color: #fff;"><i class="fa-solid fa-arrow-right"></i> Disclaimer</a></li>
                             <li><a href="{{ route('blogs') }}" style="color: #fff;"><i class="fa-solid fa-arrow-right"></i> Blog</a></li>
                             <li><a href="{{ route('cookies-policy') }}" style="color: #fff;"><i class="fa-solid fa-arrow-right"></i> Cookie Policy</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <!-- footer end area post end-->
         </div>
         <!-- rts footer area End -->
     </div>
     <!-- copyright area start -->
     <div class="rts-copyright-area">
         <div class="container">
             <div class="row">
                 <div class="col-6">
                     <div class="text-center">
                         <p>Garuda Technologies - Copyright
                             <script>
                                 document.write(
                                     new Date().getFullYear()
                                 )
                             </script>. All rights reserved.
                         </p>
                     </div>
                 </div>
                 <div class="col-6">
                     <div class="text-center">
                         <p>
                             <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                             <span><a href="{{ route('term-and-conditions') }}">Terms & Conditions</a> </span>
                         </p>

                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- copyright area end -->
 </div>
 <!-- rts footer two area wrapper end -->

 <!-- inner menu area desktop Start -->
 <div id="side-bar" class="side-bar header-two">
     <button class="close-icon-menu" title="Close menu"><i class="fa-solid fa-x"></i></button>
     <!-- inner menu area desktop start -->
     <div class="rts-sidebar-menu-desktop" id="my-logo">
         <a class="logo-1" href="/">
             <img class="logo" src="{{ asset('font-end/assets/images/logo/Garuda-Technologies-logo.png') }}" alt="finbiz_logo">
         </a>
         <div class="body d-none d-xl-block">
             <p class="disc">
                 Garuda Technologies is a Gurgaon-headquartered technology and travel services company operating from Udyog Vihar, Sector 19 — the heart of Gurugram's IT and industrial corridor. Founded with the conviction that businesses deserve a single accountable partner for their digital and travel needs, Garuda Technologies operates two integrated verticals: a full-spectrum IT and digital services division, and a travel services division powered by seven specialized travel brands.
             </p>
             <div class="get-in-touch">
                 <!-- title -->
                 <div class="h6 title">Get In Touch</div>
                 <!-- title End -->
                 <div class="wrapper">
                     <!-- single -->
                     <div class="single">
                         <i class="fas fa-phone-alt"></i>
                         <a href="tel:+91{{ $contact->number }}">+91-{{ $contact->number }}</a>
                     </div>
                     <!-- single ENd -->
                     <!-- single -->
                     <div class="single">
                         <i class="fas fa-envelope"></i>
                         <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                     </div>
                     <!-- single ENd -->
                     <!-- single -->
                     <div class="single">
                         <i class="fas fa-globe"></i>
                         <a href="https://garudatechnologies.co.in/">www.garudatechlogies.co.in</a>
                     </div>
                     <!-- single ENd -->
                     <!-- single -->
                     <div class="single">
                         <i class="fas fa-map-marker-alt"></i>
                         <a href="{{ route('contact-us') }}"> {{ $contact->address }}
                         </a>
                     </div>
                     <!-- single ENd -->
                 </div>
                 <div class="social-wrapper-two menu">
                     <a href="{{ $contact->facebook_url }}" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                     <a href="{{ $contact->instagram_url }}" target="_blank" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                     <a href="{{ $contact->linkedin_url }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                 </div>
             </div>
         </div>
     </div>
     <!-- mobile menu area start -->
     <div class="mobile-menu d-block d-xl-none">
         <nav class="nav-main mainmenu-nav mt--30">
             <ul class="mainmenu metismenu" id="mobile-menu-active">
                 <li>
                     <a href="{{ route('about-us') }}" class="main" aria-expanded="false">About Us</a>
                 </li>
                 <li class="has-droupdown">
                     <a href="#" class="main" aria-expanded="false">Services</a>
                     <ul class="submenu mm-collapse" style="height: 0px;">
                         @foreach ($servicecategories as $category )
                         <li><a href="{{ route('services.category', $category->category_slug) }}"> {{ $category->name }}</a></li>
                         @endforeach
                     </ul>
                 </li>
                 <li>
                     <a href="{{ route('travel-services') }}" class="main" aria-expanded="false">Travel Services</a>
                 </li>
                 <li>
                     <a href="{{ route('blogs') }}" class="main" aria-expanded="false">Blogs</a>
                 </li>
                 <li>
                     <a href="{{ route('contact-us') }}" class="main" aria-expanded="false">Contact Us</a>
                 </li>
             </ul>
         </nav>

         <div class="social-wrapper-one">
             <ul>
                 <li>
                     <a href="{{ $contact->facebook_url }}" target="_blank" aria-label="Facebook">
                         <i class="fa-brands fa-facebook-f"></i>
                     </a>
                 </li>
                 <li>
                     <a href="{{ $contact->instagram_url }}" target="_blank" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                 </li>
                 <li>
                     <a href="{{ $contact->linkedin_url }}" target="_blank" aria-label="linkedin">
                         <i class="fa-brands fa-linkedin-in"></i>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
     <!-- mobile menu area end -->
 </div>
 <!-- inner menu area desktop End -->

 <!-- progress area start -->
 <div class="progress-wrap">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
         </path>
     </svg>
 </div>
 <!-- progress area end -->