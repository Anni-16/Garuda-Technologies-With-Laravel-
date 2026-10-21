<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta SEO Start -->
    <meta charset="UTF-8">
    <title>IT & Digital Marketing Company in Gurgaon | Garuda Technologies</title>
    <meta name="description" content="Garuda Technologies is a Gurgaon-based IT and digital marketing company offering SEO, web and app development, and travel services. Book a free consultation.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://garudatechnologies.co.in/">

    <meta name="og:title" content="IT & Digital Marketing Company in Gurgaon | Garuda Technologies">
    <meta name="og:image" content="https://www.trendtech.in/designer/images/logo.png">
    <meta name="og:site_name" content="Garuda Technologies">
    <meta name="og:description" content="SEO, web development, app development and travelservices — delivered by one accountable team in Gurgaon.">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NXWWF4SZ');
    </script>
    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Garuda Technologies",
            "url": "https://garudatechnologies.co.in/",
            "telephone": "+91-8130150400",
            "email": "support @garudatechnologies.co.in",
            "description": "Gurgaon - based IT and digital solutions company
            offering SEO,
            digital marketing,
            web and app development,
            cloud
            services,
            and travel services.
            ",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Plot No .750,
                Udyog Vihar Phase V Rd,
                Phase V,
                Udyog Vihar,
                Sector 19,
                Gurugram,
                Haryana 122016 ",
                "addressLocality": "Gurugram",
                "addressRegion": "Haryana",
                "postalCode": "122016",
                "addressCountry": "IN"
            },
            "areaServed": "India",
            "sameAs": ["https://www.linkedin.com/company/garuda-technologies-web"]
        }
    </script>
    @endverbatim
    <!-- End Google Tag Manager -->

    <!-- Meta SEO End  -->

    <!-- Style Link -->
    @include('include.css-link')
</head>

<body>

    <!-- rts header Start -->
    @include('include.header')
    <!-- rts header End -->

    <!-- rts banner area start -->
    <div class="banner-swiper-two">
        <div class="swiper mySwiper-banner-two">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two rts-section-gap bg_image" style=" background-image: url('{{ asset('font-end/assets/images/banner/home-banner.webp') }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <h1 class="pre-title" style="font-size: 26px;">IT & Digital Marketing Company in Gurgaon — Built for Measurable Growth</h1>
                                        <p class="title" style="font-size: 48px;">SEO, Web & App Development, and Travel Services Under One AccountableRoof</p>
                                        <p>
                                            Garuda Technologies is a Gurgaon-based IT and digital solutions company
                                            helping businesses grow with performance-driven SEO, modern web and mobile
                                            app development, and result-focused digital marketing. From our base in Udyog
                                            Vihar, Sector 19, we serve startups, B2B firms, SaaS companies, and e-
                                            commerce brands across India — backed by dedicated travel services for
                                            individuals and corporates.
                                        </p>

                                        <div style="display: flex; align-items: center; gap: 0;">
                                            <a href="{{ route('contact-us') }}" class="rts-btn btn-primary btn-white">Get a Free Growth Audit</a>
                                            <a href="{{ route('about-us') }}" class="rts-btn btn-primary btn-white">Learn More About Garuda Technologies</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape ">
                                <img src="{{ asset('font-end/assets/images/banner/shape/01.webp') }}" alt="shape-area">
                            </div>
                            <div class="shape shape-two">
                                <img src="{{ asset('font-end/assets/images/banner/shape/02.webp') }}" alt="shape-area">
                            </div>
                            <div class="shape shape-three">
                                <img src="{{ asset('font-end/assets/images/banner/shape/03.webp') }}" alt="shape-area">
                            </div>
                            <div class="shape shape-four">
                                <img src="{{ asset('font-end/assets/images/banner/shape/04.webp') }}" alt="shape-area">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area End -->

    <!-- rts about area start -->
    <div class="rts-about-area-two rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="left-thumbnail-about-area-two">
                        <img loading="lazy" src="{{ asset('storage/' . $aboutus->images_2) }}" alt="{{ $aboutus->heading_2 }}">
                        <div class="small-image">
                            <img loading="lazy" src="{{ asset('storage/' . $aboutus->images_3) }}" alt="{{ $aboutus->heading_2 }}">
                        </div>
                        <div class="counter-about-area">
                            <h2 class="counter title"><span class="odometer" data-count="{{ $aboutus->experience_of_year }}">{{ $aboutus->experience_of_year }}</span>+
                            </h2>
                            <span>Year of experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <span class="bg-content">About Us</span>
                            <span class="pre" id="my-border">More About Us</span>
                            <h2 class="title rts-text-anime-style-1">{{ $aboutus->heading_2 }}
                            </h2>
                        </div>
                        <div class="about-between-wrapper">
                            <div class="disc mb--20">
                                {!! $aboutus->short_descrpition !!}
                            </div>
                        </div>
                        <div class="call-and-sign-area two">
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                                <div class="information">
                                    <a href="{{ route('about-us') }}">
                                        <h6 class="title">Know More About Us</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img loading="lazy" src="{{ asset('font-end/assets/images/about/shape/01.svg') }}" alt="shape" class="one">
            <img loading="lazy" src="{{ asset('font-end/assets/images/about/shape/02.svg') }}" alt="shape" class="two">
        </div>
    </div>
    <!-- rts about area end -->

    <!-- rts service area start -->
    <div class="rts-service-area pt--40 pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two center">
                        <span class="bg-content">Services</span>
                        <span class="pre" id="my-border">What we offer</span>
                        <h2 class="title rts-text-anime-style-1" style="perspective: 400px;">
                            <div class="split-line" style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;">
                                    <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">Our Services — SEO, Digital Marketing, Web &amp; App Development in Gurgaon</div>
                                </div>
                            </div>
                        </h2>
                        <p style="font-size: 20px;">Whether you need to rank higher on Google, launch a high-converting website or
                            app, or generate qualified B2B leads, Garuda Technologies delivers end-to-end
                            digital solutions tailored to measurable business outcomes.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2 mt--30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-bg-style-one-wrapper">
                        <div class="row g-4 center">
                            @foreach ($servicecategories2 as $category)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-box">
                                    <div class="icons">
                                        <img loading="lazy" src="{{ asset('storage/' . $category->icon) }}" alt="{{ $category->name }}">
                                    </div>
                                    <div class="information mt-4">
                                        <h5 class="title">{{ $category->name }}</h5>
                                        <p class="disc">{{ $category->description }}</p>
                                        <a href="{{ route('services.category', $category->category_slug) }}" class="arrow-right">
                                            <i class="fa-solid fa-arrow-right"></i>
                                            <span>View All {{ $category->name }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                    <div style="display: flex; justify-content: center;">
                        <a href="{{ route('services') }}" class="rts-btn btn-primary btn-white">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service area end -->

    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-two bg_image" style="background-image: url('{{ asset('font-end/assets/images/cta/02.webp') }}');">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cta-style-two-area">
                                    <h3 class="title rts-text-anime-style-1">
                                        Let’s discuss about how we can help <br>
                                        make your business better
                                    </h3>
                                    <a href="{{ route('contact-us') }}" class="rts-btn btn-primary btn-white">Lets Work Together</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts call to action area end -->

    <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-three-content-left">

                        <div class="title-style-three left">
                            <span class="pre" id="my-border">Why Choose Us</span>
                            <div class="bg-title">Why Choose Us</div>
                            <h2 class="title rts-text-anime-style-1" style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: start; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            Delivering Consistent Results with a Focus on Quality and Long-Term Growth
                                        </div>
                                    </div>
                                </div>

                            </h2>
                        </div>
                        <p class="disc">
                            Every IT company in Gurgaon claims expertise. The difference at Garuda
                            Technologies is accountability: every service engagement defines measurable
                            outcomes upfront, reports against them monthly, and adjusts when the numbers
                            do not move in the right direction. No hiding behind <b>"it takes time"</b> without a
                            specific plan behind it.
                        </p>
                        <div class="check-wrapper-area mb--20 ">
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">Single-Partner Accountability : </b> IT services and travel booking under one roof. One team. One contact number.
                                No vendor fragmentation or misaligned priorities between your digital agency and
                                your IT infrastructure provider.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color:var(--color-heading-1)">Gurgaon-Based, Nationally Active : </b> Headquartered in Udyog Vihar, Sector 19 — Gurgaon's core IT corridor. In-
                                person consultations available for local clients. Remote delivery for clients across
                                Delhi NCR, Mumbai, Bangalore, and internationally.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">Outcome Reporting, Not Activity Reporting : </b> Monthly reports show organic sessions, qualified leads, keyword position
                                movement, and revenue attribution — not a list of tasks completed. If a campaign
                                is underperforming, the report says so and explains what changes next.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">Technical Depth Across Every Service : </b> SEO built by people who understand crawl architecture. Web development built
                                by developers who understand Core Web Vitals. Cloud infrastructure managed
                                by certified engineers — not generalists wearing multiple hats.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">No Generic Packages : </b> Every engagement begins with a diagnostic — a site audit for IT services or a
                                requirements discussion for travel. Scope and pricing are defined by what the
                                situation actually needs, not by a Bronze/Silver/Gold package menu.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">24/7 Support Availability : </b> Hosting failures, travel emergencies, and IT infrastructure issues do not follow
                                business hours. The Garuda Technologies team is reachable at <a href="tel:+91-8130150400">+91-8130150400</a>
                                around the clock for critical issues across both service verticals.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image-inner-why-choose-three">
                        <div class="thumbnail-large">
                            <img src="{{ asset('font-end/assets/images/why-choose/03.webp') }}" alt="why">
                        </div>
                        <div class="small">
                            <img src="{{ asset('font-end/assets/images/why-choose/02.webp') }}" alt="why">
                        </div>
                        <div class="black-shape">

                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3>
                        The Standards We Hold Ourselves To
                    </h3>
                    <p>These are the non-negotiables behind every SEO campaign, web project, and
                        travel booking we deliver — the rules that keep results measurable, transparent,
                        and built to last.</p>
                    <div class="check-wrapper-area mb--20 ">
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">IT Services : </b> Every SEO campaign starts with a technical audit. Every web project starts with
                            a requirements brief. No work begins without a defined scope and a measurable
                            success condition.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">AI & Future-Ready : </b> SEO strategies include GEO optimisation for ChatGPT, Gemini, and Perplexity
                            citation. Content is structured for AI Overviews from the first draft, not retrofitted
                            later.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Travel Services : </b> Every booking is vetted across multiple fare sources before confirmation.
                            Corporate accounts receive GST-compliant invoicing and a dedicated travel
                            manager.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Data-Driven Decisions : </b> Keyword targets are selected from Search Console and Ahrefs data. Paid
                            campaign budgets shift weekly based on cost-per-lead performance, not monthly
                            based on gut feel.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Transparent Communication : </b> Clients receive fortnightly status updates during active project phases. Delays
                            and scope changes are communicated before they become problems, not after.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Ethical Practices : </b> No black-hat SEO. No private blog networks. No paid link schemes. No tactics
                            that produce short-term gains followed by Google penalties that cost months to
                            recover from.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->

    <!-- rts counter up area Start -->
    <div class="rts-counter-up-area rts-section-gap counter-bg" style="background-image: url('{{ asset('font-end/assets/images/cta/01.webp') }}');">
        <div class="container">
            <div class="row g-5">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('font-end/assets/images/icons/01-1.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="199">00</span>+
                            </h2>
                            <p class="disc">Successful Projects</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('font-end/assets/images/icons/04.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="120">00</span>+
                            </h2>
                            <p class="disc">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50 pl_md--10 pl_sm--0">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('font-end/assets/images/icons/03.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="50">00</span>+
                            </h2>
                            <p class="disc">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 four">
                        <div class="icon">
                            <img loading="lazy" src="{{ asset('font-end/assets/images/icons/01-1.svg') }}" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="7">0</span>+
                            </h2>
                            <p class="disc">Travel Brands</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
    <!-- rts counter up area end -->

    <!-- rts How We Work ? area start -->
    <div class="business-goal-area-2 rts-section-gap">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-6">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">How We Work ?</span>
                            <span class="pre" id="my-border">How We Work ?</span>
                            <h2 class="title rts-text-anime-style-1">Our 5-Step Process — From Strategy to Measurable Results
                            </h2>
                            <div class="consultancy-style-one">
                                <div class="signle-consultancy mb--30">
                                    <div class="icon">
                                        <i class="fa-solid fa-1"></i>
                                    </div>
                                    <div class="information">
                                        <h4 class="title">Requirement Analysis</h4>
                                        <p class="disc">
                                            Discovery sessions to map your goals, audience,
                                            competitors, and technical needs.
                                        </p>
                                    </div>
                                </div>
                                <div class="signle-consultancy mb--20">
                                    <div class="icon">
                                        <i class="fa-solid fa-2"></i>
                                    </div>
                                    <div class="information">
                                        <h4 class="title">Strategy & Planning</h4>
                                        <p class="disc">
                                            A clear roadmap covering keyword targets, technical
                                            fixes, content schedules, wireframes, or travel itineraries.
                                        </p>
                                    </div>
                                </div>
                                <div class="signle-consultancy mb--20">
                                    <div class="icon">
                                        <i class="fa-solid fa-3"></i>
                                    </div>
                                    <div class="information">
                                        <h4 class="title">Design & Development</h4>
                                        <p class="disc">
                                            Sprint-based execution with regular client reviews
                                            and quality checks.
                                        </p>
                                    </div>

                                </div>
                                <div class="signle-consultancy mb--20">
                                    <div class="icon">
                                        <i class="fa-solid fa-4"></i>
                                    </div>
                                    <div class="information">
                                        <h4 class="title">Testing & Optimization</h4>
                                        <p class="disc">
                                            Multi-browser testing, SEO validation, paid-
                                            campaign testing, and travel confirmation before launch.
                                        </p>
                                    </div>
                                </div>
                                <div class="signle-consultancy mb--20">
                                    <div class="icon">
                                        <i class="fa-solid fa-5"></i>
                                    </div>
                                    <div class="information">
                                        <h4 class="title"> Deployment & Ongoing Support</h4>
                                        <p class="disc">
                                            Hosting setup, monthly SEO retainers,
                                            continuous campaign optimisation, and 24/7 travel support.
                                        </p>
                                    </div>
                                </div>
                                <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                                    <a href="{{ route('contact-us') }}" class="rts-btn btn-primary">Start Your Project</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-business-area-right-two">
                        <div class="large-thumbnail">
                            <img loading="lazy" src="{{ asset('font-end/assets/images/why-choose/how-we-work-2.webp') }}" alt="How We Work">
                        </div>
                        <div class="small-thumbnail images-r">
                            <img loading="lazy" src="{{ asset('font-end/assets/images/why-choose/how-we-work-1.jpg') }}" alt="How We Work">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts How We Work ? area end -->

    <!-- rts team area start -->
    <div class="rts-team-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two mb--40 center">
                        <span class="bg-content">Our Experts</span>
                        <span class="pre" id="my-border">Our Experts</span>
                        <h2 class="title ">Our Team Mates
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mt--30 g-5 g-sm-30 mt_sm--0">
                @foreach($teams as $team)
                <div class="col-lg-3 col-md-6 col-sm-12 mt_sm--50"
                    data-animation="fadeInUp"
                    data-delay="0.2"
                    data-duration="1.2">

                    <div class="single-team-area-one-start">

                        <a href="{{ route('team') }}" class="thumbnail">
                            <img src="{{ asset('storage/' . $team->images) }}" alt="{{ $team->name }}">
                        </a>

                        <div class="inner-content">
                            <div class="text-top">

                                <a href="{{ route('team') }}">
                                    <h5 class="title">{{ $team->name }}</h5>
                                </a>
                                <span>{{ $team->position }} / {{ $team->category->name ?? '' }}</span>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

                <div style="display: flex; justify-content: center;">
                    <a href="{{ route('team') }}" class="rts-btn btn-primary btn-white">View All</a>
                </div>
            </div>
        </div>
    </div>
    <!-- rts team area end -->

    <!-- rts clients review area start -->
    <div class="rts-client-review-area rts-section-gapBottom rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper" dir="ltr">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Review</span>
                            <span class="pre" id="my-border">Our Testimonial</span>
                            <h2 class="title ">What Our Clients in Gurgaon and Across India Say
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="swiper mySwiper-testimonials-5">
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="single-testimonials-style-five">

                                    <div class="thumbnail">
                                        <img src="{{ asset('storage/' . $testimonial->images) }}" alt="testimonial image">
                                    </div>

                                    <div class="inner-content">
                                        <div class="name-area">
                                            <h5 class="title">{{ $testimonial->name }}</h5>
                                            <span>{{ $testimonial->designation }}</span>
                                        </div>

                                        <p class="disc">
                                            {{ $testimonial->message }}
                                        </p>

                                        <div class="body-end">
                                            <div class="star-icon">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fas fa-star {{ $i <= $testimonial->rating ? '' : 'text-muted' }}"></i>
                                                    @endfor
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts clients review area end -->

    <!-- rts faq area start -->
    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">FAQ</span>
                        <h2 class="title rts-text-anime-style-1" id="my-border">
                            What Our Clients Ask About Our IT & Digital Services
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="{{ asset('font-end/assets/images/about/shape/01.png') }}" alt="shape" class="one">
            <img src="{{ asset('font-end/assets/images/about/shape/02.png') }}" alt="shape" class="two">
            <img src="{{ asset('font-end/assets/images/about/shape/03.png') }}" alt="shape" class="three">
        </div>
    </div>
    <div class="rts-faq-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pl--50 pr--50" data-animation="fadeInUp" data-delay="0.1">
                    <div class="thumbnail-about-right-4">
                        <div class="large-iamge">
                            <img src="{{ asset('font-end/assets/images/faq/faq-1.jpg') }}" alt="Faq's">
                        </div>
                        <div class="small-image images-r">
                            <img src="{{ asset('font-end/assets/images/faq/faq-2.png') }}" alt="Faq's">
                        </div>
                        <div class="poligon-shape images-r">
                            <img src="{{ asset('font-end/assets/images/about/poligon-shape.svg') }}" alt="shape">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pl--50 pl_md--0 pl_sm--0 mt_md--50 mt_sm--80" data-animation="fadeInUp" data-delay="0.3">
                    <div class="accordion faq-wrapper-inner-page" id="faqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse1"
                                    aria-expanded="false"
                                    aria-controls="collapse1">
                                    What does Garuda Technologies do?
                                </button>
                            </h2>

                            <div id="collapse1"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Garuda Technologies is a Gurgaon-based IT and digital solutions
                                    company offering SEO, digital marketing, web and app development,
                                    cloud services, and travel services — all under one roof.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse2"
                                    aria-expanded="false"
                                    aria-controls="collapse2">
                                    Do you provide SEO services in Gurgaon?
                                </button>
                            </h2>

                            <div id="collapse2"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. We deliver Local SEO, E-commerce SEO, Enterprise SEO,
                                    SaaS SEO, and AI SEO/GEO programs for businesses across Gurgaon
                                    and India.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse3"
                                    aria-expanded="false"
                                    aria-controls="collapse3">
                                    Are you a web and app development company in Gurgaon?
                                </button>
                            </h2>

                            <div id="collapse3"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. We build custom websites using React, Laravel, WordPress,
                                    and Shopify, as well as mobile apps using Flutter, React Native,
                                    and native iOS technologies from our Udyog Vihar office.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse4"
                                    aria-expanded="false"
                                    aria-controls="collapse4">
                                    Do you offer travel services as well?
                                </button>
                            </h2>

                            <div id="collapse4"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. Our travel vertical covers flight bookings, hotel reservations,
                                    cruise packages, and car rentals through seven specialist brands,
                                    with GST invoicing.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse5"
                                    aria-expanded="false"
                                    aria-controls="collapse5">
                                    How can I contact Garuda Technologies?
                                </button>
                            </h2>

                            <div id="collapse5"
                                class="accordion-collapse collapse"
                                aria-labelledby="heading5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Call +91-8130150400, email
                                    <a href="mailto:support@garudatechnologies.co.in">
                                        support@garudatechnologies.co.in
                                    </a>,
                                    or visit us at Udyog Vihar, Sector 19, Gurugram.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- rts faq area end -->

    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gapBottom pt--40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two center">
                        <span class="bg-content">Blog</span>
                        <span class="pre" id="my-border">Blog & News</span>
                        <h2 class="title">Digital Marketing & SEO Insights from Garuda Technologies
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-lg-12">
                    <div class="blog-swiper-style-one">
                        <div class="swiper mySwiper-blog-one">
                            <div class="swiper-wrapper">
                                @foreach ($blogs as $blog)
                                <div class="swiper-slide" role="group" aria-label="1 / 6" data-swiper-slide-index="0" style="width: 415px; margin-right: 30px;">
                                    <div class="single-blog-area-one">
                                        <p> {{ $blog->category->name ?? 'No Category' }} /
                                            <span>&nbsp;{{ $blog->authorName->name ?? 'No Author' }}</span>
                                        </p>
                                        <a href="{{ route('blogs-details', $blog->slug) }}">
                                            <h4 class="title">{{ $blog->title }}</h4>
                                        </a>
                                        <div class="bottom-details">
                                            <a href="{{ route('blogs-details', $blog->slug) }}" class="thumbnail">
                                                <img src="{{ asset('storage/' . $blog->images) }}" alt="{{ $blog->title }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->

    <!-- rts footer area start -->
    @include('include.footer')
    <!-- rts footer area end -->

    <!-- rts Js Link start -->
    @include('include.js-link')
    <!-- rts Js Link End -->

</body>

</html>