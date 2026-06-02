 <header class="header-one header--sticky">
     <div class="header-top-area-wrapper">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="header-top-one-wrapper">
                         <div class="left">
                             <div class="mail">
                                 <a href="mailto:{{ $contact->email }}"><i class="fal fa-envelope"></i>
                                     {{ $contact->email }}</a>
                             </div>
                             <div class="working-time">
                                 <a href="tel:91{{ $contact->number }}">
                                     <p><i class="fa-solid fa-phone"></i> +91 - {{ $contact->number }}</p>
                                 </a>
                             </div>
                         </div>
                         <div class="right">
                             <ul class="top-nav">
                                 <li><a href="{{ route('team') }}">Team</a></li>
                                 <li><a href="{{ route('faqs') }}">Faq</a></li>
                                 <li><a href="{{ route('contact-us') }}">Contact</a></li>
                             </ul>
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
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="header-main">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="header-main-one-wrapper">
                         <div class="thumbnail" id="my-logo">
                             <a href="/">
                                 <img loading="lazy" src="{{ asset('font-end/assets/images/logo/Garuda-Technologies-logo.png') }}" alt="Garuda Technologies Logo">
                             </a>
                         </div>

                         <div class="main-header">
                             <div class="nav-area">
                                 <ul>
                                     <li class="main-nav">
                                         <a href="/">Home</a>
                                     </li>
                                     <li class="main-nav">
                                         <a href="{{ route('about-us') }}">About</a>
                                     </li>
                                     <li class="main-nav has-dropdown mega-menu">
                                         <a href="#">Service</a>
                                         <div class="rts-mega-menu">
                                             <div class="wrapper">
                                                 <div class="container">
                                                     <div class="row g-0">
                                                         @foreach ($servicecategories as $category)

                                                         <div class="col-lg-4">

                                                             <ul class="mega-menu-item with-list parent-nav">

                                                                 <li class="hega-menu-head-wrapper">
                                                                     <p class="hega-menu-head">
                                                                         <i class="fa-regular fa-folder-open"></i>
                                                                         {{ $category->name }}
                                                                     </p>
                                                                 </li>

                                                                 @foreach (($category->services ?? collect())->take(6) as $service)

                                                                 <li>
                                                                     <a href="{{ route('services.details', ['category_slug' => $category->category_slug, 'service_slug' => $service->service_slug ]) }}">

                                                                         <i class="fa-solid fa-angles-right"></i>
                                                                         {{ $service->name }}

                                                                     </a>
                                                                 </li>

                                                                 @endforeach

                                                                 @if(($category->services ?? collect())->count() > 6)

                                                                 <li>
                                                                     <a href="{{ route('services.category', ['category_slug' => $category->category_slug]) }}" class="view-all-btn">

                                                                         <i class="fa-solid fa-eye"></i>
                                                                         View All

                                                                     </a>
                                                                 </li>

                                                                 @endif

                                                             </ul>

                                                         </div>

                                                         @endforeach

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                     <li class="main-nav">
                                         <a target="_blank" href="{{ route('travel-services') }}">Travel Services</a>
                                     </li>
                                     <li class="main-nav">
                                         <a href="{{ route('blogs') }}">Blogs</a>
                                     </li>
                                 </ul>
                             </div>

                             <div class="button-area">
                                 <a href="{{ route('contact-us') }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Contact Us &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
                                 <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                     <img class="menu-light" src="{{ asset('font-end/assets/images/icons/01.svg') }}" alt="Menu-icon">
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>