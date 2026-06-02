<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Travel Services Gurgaon | Flights, Hotels, Cruises, Car Rental</title>
    <meta name="keyword" content="travel services Gurgaon, flight booking Gurgaon, hotel booking Gurugram, car rental Gurgaon, cruise booking India, corporate travel Gurgaon, travel company Gurugram">
    <meta name="description" content="Book flights, hotels, cruises & car rentals with Garuda Technologies' travel division in Gurgaon. 7 specialized travel brands. Best fares. Corporate & leisure travel. Call now.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('font-end/travel/assets/images/logo/fav.webp') }}">
    <!-- Style Link -->
    <link rel="stylesheet preload" href="{{ asset('font-end/travel/assets/css/plugins/fontawesome.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('font-end/travel/assets/css/plugins/swiper.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('font-end/travel/assets/css/plugins/metismenu.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('font-end/travel/assets/css/plugins/magnifying-popup.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('font-end/travel/assets/css/plugins/odometer.css') }}" as="style">
    <link rel="stylesheet preload" href="{{ asset('font-end/travel/assets/css/vendor/bootstrap.min.css') }}" as="style">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet preload" as="style">
    <link rel="stylesheet preload" href="{{ asset('font-end/travel/assets/css/style.css') }}" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What travel services does Garuda Technologies offer?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Garuda Technologies provides domestic and international flight bookings, hotel reservations, holiday packages, visa assistance, corporate travel management, and customized tour planning services from Gurgaon, India."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How can I book international flights with Garuda Technologies?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You can book international flights by calling +91-9910844235 or emailing info@garudatechnologies.co.in with your travel dates, destination, and passenger details. Our travel team shares the best available fare options within a few hours."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does Garuda Technologies provide customized holiday packages?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Garuda Technologies offers customized domestic and international holiday packages including flights, hotels, sightseeing, transfers, and travel insurance based on your budget and travel preferences."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do you offer corporate travel management services?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Corporate travel services include GST invoicing, bulk flight bookings, hotel management, negotiated fares, monthly billing, and dedicated travel support for businesses and organizations."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can Garuda Technologies help with visa and travel documentation?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. We assist travelers with visa guidance, travel insurance, passport documentation support, and itinerary planning for both leisure and business travel."
                    }
                }
            ]
        }
    </script>
    @endverbatim

</head>

<body class="index-one">

    <!-- rts Header area start -->
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
                                    <p><i class="fa-solid fa-phone"></i> +91 - {{ $contact->number }}</p>
                                </div>
                            </div>
                            <div class="right">
                                <ul class="top-nav">
                                    <li><a href="{{ url('/team') }}">Team</a></li>
                                    <li><a href="{{ url('/faqs') }}">Faq</a></li>
                                    <li><a href="{{ url('/contact-us') }}">Contact</a></li>
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
                            <div class="thumbnail">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('font-end/travel/assets/images/logo/travel.png') }}" alt="travel" style="width: 50%;">
                                </a>
                            </div>
                            <div class="main-header">
                                <div class="nav-area">
                                    <ul class="">
                                        <li class="main-nav mega-menu project-a-after">
                                            <a href="#about-us">About</a>
                                        </li>
                                        <li class="main-nav mega-menu">
                                            <a href="#Brands">Brands</a>
                                        </li>
                                        <li class="main-nav mega-menu">
                                            <a href="#services">Services</a>
                                        </li>
                                        <li class="main-nav  mega-menu">
                                            <a href="#Contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>


                                <div class="loader-wrapper">
                                    <div class="loader">
                                    </div>
                                    <div class="loader-section section-left"></div>
                                    <div class="loader-section section-right"></div>
                                </div>
                                <div class="button-area">
                                    <a href="tel:91-{{ $contact->number }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Speak to us
                                        <br>
                                        91-{{ $contact->number }}
                                    </a>
                                    <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                        <img class="menu-light" src="{{ asset('font-end/travel/assets/images/icons/01.svg') }}" alt="Menu-icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- rts Header area End -->

    <!-- rts banner area start -->
    <div class="rts-banner-area banner-style-one bg_image" style="background-image: url({{ asset('font-end/travel/assets/images/banner/01.webp') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-inner text-start">
                        <p class="pre-title">
                            <span>Discover
                            </span> Seamless Travel Experiences with Trusted Travel Solutions
                        </p>
                        <h1 class="title rts-text-anime-style-1">
                            Planning journeys that create unforgettable memories.
                        </h1>
                        <p class="disc banner-para">
                            Focused on comfort, convenience, and cost-effective travel experiences.
                        </p>
                        <a href="#Contact" class="rts-btn btn-primary color-h-black">Get Consultant</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-iamge-area">
            <img src="{{ asset('font-end/travel/assets/images/banner/shape/04.png') }}" alt="shape" class="one">
            <img src="{{ asset('font-end/travel/assets/images/banner/shape/circle.svg') }}" alt="sahpe" class="two">
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- rts-about area start -->
    <div class="rts-about-area rts-section-gap" id="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content-left-one">
                        <div class="title-style-one left">
                            <span class="pre">About Business</span>
                            <h2 class="title rts-text-anime-style-1">Travel Services in Gurgaon — Flights, Hotels, Cruises, and Car Rentals Through 7+ Specialist Travel Brands</h2>
                        </div>
                        <p class="disc">
                            Garuda Technologies' travel division delivers flight booking, hotel reservations, cruise packages, and car rental services for individual travelers, families, business travelers, and corporate accounts across India. Seven specialized travel brands — Globalairhub, Zippoair, Tripsomaker, Airoflighticket, Airotrolly, Businessclassflyts, Globalairticketing and etc — operate under the Garuda Technologies umbrella, each focused on specific travel segments and booking categories. All bookings are supported by a 24/7 travel helpline at +91-9910844235 and managed from the Gurgaon headquarters.

                        </p>
                        <div class="call-and-sign-area">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="information">
                                    <span>Call us anytime</span>
                                    <a href="tel:91{{ $contact->number }}">
                                        <h6 class="title">+91-{{ $contact->number }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl--70">
                    <div class="thumbnail-about-and-progress-1">

                        <div class="thumbnail-about-1">
                            <img src="{{ asset('font-end/travel/assets/images/about/01.webp') }}" alt="about">
                        </div>
                        <div class="progress-circle-main-wrapper">

                            <div class="progress-area-wrapper images-r">
                                <div class="single-progress-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                        <text class="countervalue start" x="50%" y="55%" transform="matrix(0, 1, -1, 0, 80, 0)">80</text>
                                    </svg>
                                </div>
                                <h5 class="title">Business Progress</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-about area end -->

    <!-- rts latest service area start -->
    <div class="rts-latest-service-area rts-section-gapBottom" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <span class="pre">Our Services</span>
                        <h2 class="title rts-text-anime-style-1">Our Travel Services — What We Book
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12 mt--50">
                    <section class="main-wrapper-sticky">
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('font-end/travel/assets/images/service/flight.png') }}" alt="flight Booking" style="width:80px; height:80px;">
                                </div>
                                <h5 class="title">Flight Booking</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Garuda Technologies books domestic and international flights across all major airlines through its network of travel brands. The flight booking service covers economy, business class, and first class fares, with access to web fares, group rates, and corporate negotiated pricing. Specialist brand Businessclassflyts focuses exclusively on premium cabin bookings for corporate and luxury travelers, while Zippoair and Airoflighticket target budget and value fare segments.
                                    <br>
                                    Domestic flights, International flights, Business and first class, Group bookings, Corporate accounts, Last-minute bookings
                                </p>

                                <a href="tel:91{{ $contact->number }}" class="arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('font-end/travel/assets/images/service/hotel.png') }}" alt="Hotel Booking" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="title">Hotel booking</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Hotel reservations are available for domestic and international stays across all property categories — budget, mid-range, luxury, and resort. Garuda Technologies provides best rate guarantee for all hotel bookings, with flexible cancellation policies and family-friendly property selection available on request. Business travelers receive GST-compliant invoicing and the option for direct hotel billing on corporate accounts.
                                    <br>
                                    Domestic hotels, International hotels, Business hotels, Resort and leisure, Long-stay accommodations
                                </p>
                                <a href="tel:91{{ $contact->number }}" class="arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('font-end/travel/assets/images/service/cruise.png') }}" alt="Cruiseline Booking" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="title">Cruise Booking</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Cruise packages to top global destinations are available through Garuda Technologies' travel division. Bookings cover cabin selection across interior, ocean view, balcony, and suite categories, with shore excursion planning and port transfer coordination available on request. Cruise lines covered include major operators sailing in the Mediterranean, Caribbean, Indian Ocean, Southeast Asia, and Norwegian fjords.

                                </p>
                                <a href="tel:91{{ $contact->number }}5" class="arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sticky-statement">
                            <div class="left-side">
                                <div class="icon">
                                    <img src="{{ asset('font-end/travel/assets/images/service/car.png') }}" alt="Car Booking" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="title">Car rental</h5>
                            </div>
                            <div class="right">
                                <p class="disc">
                                    Airport pickup and drop-off, inter-city transfers, local city rentals, and outstation road trip vehicle hire are all available through the car rental service. Vehicles range from economy sedans to premium SUVs and luxury cars, with chauffeur-driven and self-drive options depending on destination and availability. Advance booking ensures vehicle availability for peak travel periods.
                                </p>
                                <a href="tel:91{{ $contact->number }}" class="arrow">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- rts latest service area end -->
    <div class="rts-trusted-client rts-section-gapBottom mt--180">
    </div>
    <!-- rts-Brand area Start -->
    <div class="rts-trusted-client rts-section-gapBottom mt--180" id="Brands">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client-client text-center">
                        <p class="client-title">Our Travel Brands</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="overflow:hidden; width:100%;">
                    <div class="client-wrapper-one" style="display:inline-flex; gap:15px; align-items:center; white-space:nowrap;">

                        <a href="https://globalairhub.com/" target="_blank" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2">
                            <img src="{{ asset('font-end/travel/assets/images/client/1.webp') }}" alt="Globalairhub">
                        </a>

                        <a href="https://zippoair.com/" target="_blank" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <img src="{{ asset('font-end/travel/assets/images/client/2.webp') }}" alt="Zippoair">
                        </a>

                        <a href="https://tripsomaker.com/" target="_blank" data-animation="fadeInUp" data-delay="0.3" data-duration="1.2">
                            <img src="{{ asset('font-end/travel/assets/images/client/3.png') }}" alt="Tripsomaker">
                        </a>

                        <a href="https://airoflighticket.com/" target="_blank" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <img src="{{ asset('font-end/travel/assets/images/client/4.webp') }}" alt="Airoflighticket">
                        </a>

                        <a href="https://airotrolly.com/" target="_blank" data-animation="fadeInUp" data-delay="0.5" data-duration="1.2">
                            <img src="{{ asset('font-end/travel/assets/images/client/5.svg') }}" alt="Airotolly">
                        </a>

                        <a href="https://businessclassflyts.com/" target="_blank" data-animation="fadeInUp" data-delay="0.6" data-duration="1.2">
                            <img src="{{ asset('font-end/travel/assets/images/client/6.png') }}" alt="Businessclassflyts">
                        </a>

                        <a href="https://globalairticketing.com/" target="_blank">
                            <img src="{{ asset('font-end/travel/assets/images/client/7.webp') }}" alt="Globalairticketing">
                        </a>

                        <a href="https://gotravexo.com/" target="_blank">
                            <img src="{{ asset('font-end/travel/assets/images/client/8.png') }}" alt="Gotravexo">
                        </a>

                        <a href="https://jetravox.com/" target="_blank">
                            <img src="{{ asset('font-end/travel/assets/images/client/9.png') }}" alt="Jetravox">
                        </a>

                        <a href="https://jetbtravel.com/" target="_blank">
                            <img src="{{ asset('font-end/travel/assets/images/client/10.webp') }}" alt="Jetbtravel">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-Brand area end -->

    <!-- rts just a consultancy area  -->
    <div class="just-a-consultancy-area rts-section-gapBottom ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="consultancy-thumbnail-area">
                        <div class="large-image">
                            <img src="{{ asset('font-end/travel/assets/images/about/02.webp') }}" alt="thumbnail">
                        </div>
                        <div class="small-iamge images-r">
                            <img src="{{ asset('font-end/travel/assets/images/about/03.webp') }}" alt="services">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--50 pl_sm--15 mt_md--100 mt_sm--100">
                    <div class="consultancy-style-one">
                        <div class="title-style-one left mb--30">
                            <h2 class="title rts-text-anime-style-1">Why Book Travel Through Garuda Technologies
                            </h2>
                        </div>
                        <div class="signle-consultancy mb--30" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="information">
                                <h4 class="title">7+ specialist travel brands</h4>
                                <p class="disc">
                                    Each brand focuses on a specific traveler segment, producing better pricing and service quality than a single generalist booking agent.
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <div class="icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="information">
                                <h4 class="title">Corporate travel expertise</h4>
                                <p class="disc">
                                    GST invoicing, travel policy compliance, and consolidated billing available for registered business accounts.
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <div class="icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="information">
                                <h4 class="title">24/7 booking support</h4>
                                <p class="disc">
                                    Travel emergencies and last-minute changes are handled by a live team at +91-9910844235 around the clock.
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <div class="icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="information">
                                <h4 class="title">Best fare commitment</h4>
                                <p class="disc">
                                    Fare comparison across multiple airlines and booking channels before confirming any ticket — no single-source pricing.
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <div class="icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="information">
                                <h4 class="title">Gurgaon-based team</h4>
                                <p class="disc">
                                    Local team means in-person consultation is available for complex itineraries, group bookings, and corporate travel setup.
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="#Contact" class="rts-btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts just a consultancy area  end -->

    <!-- eorking process areas start -->
    <div class="working-process-one bg-main rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-one center">
                        <h2 class="title rts-text-anime-style-1">How to Book — 3 Simple Steps
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 align-items-center">
                <div class="col-lg-6">
                    <div class="working-process-main-wrapper">
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color: #fff;">
                                    Step
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">01</span>
                                </div>
                                <h5 class="title">Contact Us</h5>
                                <p class="disc">
                                    Call +91-9910844235 or email info@garudatechnologies.co.in with your travel dates, destination, number of travelers, and any preferences (cabin class, hotel category, etc.).
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color: #fff;">
                                    Step
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">02</span>
                                </div>
                                <h5 class="title">Receive Your Quote</h5>
                                <p class="disc">
                                    A dedicated travel consultant prepares options within your requirements and budget, presenting 2 to 3 alternatives with pricing, cancellation terms, and booking conditions.
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color: #fff;">
                                    Step
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">03</span>
                                </div>
                                <h5 class="title">Confirm and Travel</h5>
                                <p class="disc">
                                    Select your preferred option, complete payment, and receive all booking confirmations and travel documents. 24/7 support remains available through your travel dates.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-working-procss-one" data-animation="zoomOut" data-delay="0.2" data-duration="1.2">
                        <img src="{{ asset('font-end/travel/assets/images/about/04.webp') }}" alt="working-process">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- eorking process areas end -->

    <!-- business boost area start -->
    <div class="boost-your-business-today mt--70">
        <div class="container-2">
            <div class="col-lg-12">
                <div class="business-boost-wrapper-main rts-section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="business-marklting-area-thumb">
                                    <img src="{{ asset('font-end/travel/assets/images/about/05.webp') }}" alt="business_area">
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div class="boosting-business-right-area">
                                    <div class="title-style-one left">
                                        <span class="pre">Your Trusted Travel Partner in Gurgaon</span>
                                        <h2 class="title rts-text-anime-style-1">
                                            Seamless Flight, Hotel & Cruise <br>
                                            Booking Services
                                        </h2>
                                    </div>

                                    <p class="disc">
                                        Book flights, hotels, cruises, and car rentals with ease through our dedicated travel services in Gurgaon.
                                        We offer competitive fares, reliable bookings, and end-to-end travel solutions for both corporate and leisure travelers.
                                        Backed by multiple specialized travel brands, we ensure a smooth and hassle-free travel experience across India and worldwide.
                                    </p>

                                    <div class="feature-one-wrapper mt--40 pl_sm--0">
                                        <div class="single-feature-one active">
                                            <i class="fal fa-check"></i>
                                            <p>Best Flight & Hotel Deals</p>
                                        </div>

                                        <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>24/7 Customer Support</p>
                                        </div>

                                        <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Corporate & Leisure Travel</p>
                                        </div>

                                        <div class="single-feature-one">
                                            <i class="fal fa-check"></i>
                                            <p>Easy Booking & Instant Confirmation</p>
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
    <!-- business boost area end -->

    <!-- rts appoinment area start -->
    <div class="rts-appoinment-area" id="Contact">
        <div class="container-full">
            <div class="row g-0">
                <div class="col-lg-5">
                    <iframe src="{{ $contact->location_url }}" width="600" height="778" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-7">
                    <div class="appoinment-area-four-wrapper bg_image" style="background-image: url('{{ asset('font-end/travel/assets/images/footer/02.webp') }}');">
                        <div class="inner">
                            <div class="title-style-four left">
                                <span class="pre">Make An Appointment</span>
                                <h2 class="title rts-text-anime-style-1">START PROJECT <br>
                                    <span>WITH US!</span>
                                </h2>
                            </div>
                            <form action="#">
                                <div class="input-group">
                                    <div class="single-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="single-input">
                                    <input type="text" placeholder="Your Pnone">
                                </div>
                                <div class="single-input">
                                    <textarea placeholder="Your Comment"></textarea>
                                </div>
                                <button class="rts-btn btn-primary btn-white">Get in Touch</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts appoinment area end -->

    <!-- Footer Setcion Start -->
    <div class="rts-footer-area pt--100 pb--100 pt_sm--50 pb_sm--40  footer-two footer-bg-two">
        <div class="container">
            <div class="row">
                <!-- single wized -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized left">
                        <h3 class="title animated fadeIn">
                            <span>Ready to Plan</span> <br>
                            Your Next Journey?
                        </h3>

                        <p class="disc">
                            Experience seamless travel planning with flights, hotels, cruises, and car rentals designed for comfort, convenience, and the best value. Let us make your trip stress-free and memorable.
                        </p>
                        <a class="rts-btn btn-primary" href="#Contact">Get a Quote</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                    <div class="footer-two-single-wized two">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Our Services</h5>
                            <img src="{{ asset('font-end/travel/assets/images/footer/01.svg') }}" alt="Tarvel-Garuda">
                        </div>
                        <div class="wized-2-body">
                            <ul>
                                <li><a><i class="fal fa-chevron-double-right"></i>Flights Booking</a></li>
                                <li><a><i class="fal fa-chevron-double-right"></i>Hotel Booking</a></li>
                                <li><a><i class="fal fa-chevron-double-right"></i>Cruiselines Booking</a></li>
                                <li><a><i class="fal fa-chevron-double-right"></i>Car Rental</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                    <div class="footer-two-single-wized">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Contact Us</h5>
                            <img src="{{ asset('font-end/travel/assets/images/footer/01.svg') }}" alt="Tarvel-Garuda">
                        </div>
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Call Us 24/7</span>
                                    <a href="tel:91{{ $contact->number }}">91-{{ $contact->number }}</a>
                                </div>
                            </div>
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="disc">
                                    <span>Work with us</span>
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <!-- single wized -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized right">
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Our Location</span>
                                    <a> {{ $contact->address }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
            </div>
        </div>
    </div>
    <div class="rts-copy-right-1 ptb--10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-h-2-wrapper">
                        <p class="disc">Garuda Technologies - Copyright
                            <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script>. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu" title="Close menu"><i class="fa-solid fa-x"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="#"><img class="logo" src="{{ asset('font-end/travel/assets/images/logo/travel.png') }}" alt="Tarvel"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We make travel planning simple and stress-free with complete booking solutions for flights, hotels, cruises, and car rentals.
                    Enjoy the best fares, reliable service, and seamless support for both corporate and leisure travel from Gurgaon.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:91{{ $contact->number }}">+91-{{ $contact->number }}</a>
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
                            <a href="https://garudatechnologies.co.in/">www.garudatechnologies.co.in.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#"> {{ $contact->address }}
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
                        <a href="#about-us" class="main" aria-expanded="false">About</a>
                    </li>
                    <li>
                        <a href="#Brands" class="main" aria-expanded="false">Brands</a>
                    </li>
                    <li>
                        <a href="#Services" class="main" aria-expanded="false">Services</a>
                    </li>
                    <li>
                        <a href="#Contact" class="main" aria-expanded="false">Contact</a>
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

    <!-- Footer Setcion End -->

    <script defer src="{{ asset('font-end/travel/assets/js/plugins/jquery.js') }}"></script>

    <script defer src="{{ asset('font-end/travel/assets/js/plugins/odometer.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/jquery-appear.js') }}"></script>


    <script defer src="{{ asset('font-end/travel/assets/js/plugins/gsap.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/split-text.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/scroll-trigger.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/smooth-scroll.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/metismenu.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/popup.js') }}"></script>

    <script defer src="{{ asset('font-end/travel/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/swiper.js') }}"></script>
    <script defer src="{{ asset('font-end/travel/assets/js/plugins/contact.form.js') }}"></script>

    <script defer src="{{ asset('font-end/travel/assets/js/main.js') }}"></script>
</body>

</html>