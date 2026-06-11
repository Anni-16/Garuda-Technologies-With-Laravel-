<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $aboutus->meta_title }}</title>
    <meta name="keyword" content="{{ $aboutus->meta_keyword }}">
    <meta name="description" content="{{ $aboutus->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Style Link -->
    @include('include.css-link')
    <style>
        strong {
            color: var(--color-heading-1);
        }
    </style>
</head>

<body>

    <!-- rts header Start -->
    @include('include.header')
    <!-- rts header End -->

    <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left">
                        <span class="pre" id="my-border">About</span>
                        <span class="bg-title">About Us</span>
                        <h1 class="title rts-text-anime-style-1">
                            {{ $aboutus->heading_1 }}
                        </h1>
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
    <!-- about us area wrapper main end -->

    <div class="about-invena-large-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="large-image-bottm-breadcrumb">
                        <img src="{{ asset('storage/' . $aboutus->images_1) }}" alt="{{ $aboutus->heading_1 }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    </div>
                </div>
                <div class="col-lg-12 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="about-between-wrapper">
                            <div class="disc mb--20">
                                {!! $aboutus->descrpition !!}
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

    <!-- rts Mission & Vision area start -->
    <div class="rts-about-area-two " style="background-color: #1F1F25;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pt--30 pb--30">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <h2 class="title rts-text-anime-style-1" style="color: #fff;" id="my-border">{{ $aboutus->our_mission }}</h2>
                        </div>
                        <div class="about-between-wrapper">
                            <p class="disc" style="color: #fff;">
                                {{ $aboutus->content_1 }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt--30 pb--30">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <h2 class="title rts-text-anime-style-1" style="color: #fff;" id="my-border">{{ $aboutus->our_vision }}</h2>
                        </div>
                        <div class="about-between-wrapper">
                            <p class="disc" style="color:#fff;">
                                {{ $aboutus->content_2 }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img loading="lazy" src="{{ asset('font-end/assets/images/about/shape/02.svg') }}" alt="shape" class="two">
        </div>
    </div>
    <!-- rts Misssion & Vision area end -->

    <!-- rts What We Do area start -->
    <div class="rts-about-area-two rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mt_sm--80 mt_md--80">
                    <div class="about-inner-content-two">
                        <div class="title-style-two left">
                            <span class="bg-content">what we</span>
                            <span class="pre" id="my-border">what we do</span>
                            <h2 class="title rts-text-anime-style-1">{{ $aboutus->heading_3 }} </h2>
                        </div>
                        <div class="about-between-wrapper">
                            <div class="disc">
                                {!! $aboutus->content_3 !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="left-thumbnail-about-area-two">
                        <img loading="lazy" src="{{ asset('storage/' . $aboutus->images_4) }}" alt="{{ $aboutus->heading_3 }}">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- rts What We Do area end -->

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
                            Every IT company in Gurgaon claims expertise. The difference at Garuda Technologies is accountability: every service engagement defines measurable outcomes upfront, reports against them monthly, and adjusts when the numbers do not move in the right direction. No hiding behind 'it takes time' without a specific plan behind it.
                        </p>
                        <div class="check-wrapper-area mb--20 ">
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">Single-Partner Accountability : </b> IT services and travel booking under one roof. One team. One contact number. No vendor fragmentation or misaligned priorities between your digital agency and your IT infrastructure provider.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color:var(--color-heading-1)">Gurgaon-Based, Nationally Active : </b> Headquartered in Udyog Vihar, Sector 19 — Gurgaon's core IT corridor. In-person consultations available for local clients. Remote delivery for clients across Delhi NCR, Mumbai, Bangalore, and internationally.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">Outcome Reporting, Not Activity Reporting : </b> Monthly reports show organic sessions, qualified leads, keyword position movement, and revenue attribution — not a list of tasks completed. If a campaign is underperforming, the report says so and explains what changes next.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">Technical Depth Across Every Service : </b> SEO built by people who understand crawl architecture. Web development built by developers who understand Core Web Vitals. Cloud infrastructure managed by certified engineers — not generalists wearing multiple hats.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">No Generic Packages : </b> Every engagement begins with a diagnostic — a site audit for IT services or a requirements discussion for travel. Scope and pricing are defined by what the situation actually needs, not by a Bronze/Silver/Gold package menu.
                            </div>
                            <div class="single-check">
                                <i class="fa-solid fa-circle-check" style="color: black;"></i>
                                <b style="color: var(--color-heading-1);">24/7 Support Availability : </b> Hosting failures, travel emergencies, and IT infrastructure issues do not follow business hours. The Garuda Technologies team is reachable at +91-8130150400 around the clock for critical issues across both service verticals.
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
                    <div class="check-wrapper-area mb--20 ">
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">IT Services : </b> Every SEO campaign starts with a technical audit. Every web project starts with a requirements brief. No work begins without a defined scope and a measurable success condition.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">AI & Future-Ready : </b> SEO strategies include GEO optimisation for ChatGPT, Gemini, and Perplexity citation. Content is structured for AI Overviews from the first draft, not retrofitted later.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Travel Services : </b> Every booking is vetted across multiple fare sources before confirmation. Corporate accounts receive GST-compliant invoicing and a dedicated travel manager.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Data-Driven Decisions : </b> Keyword targets are selected from Search Console and Ahrefs data. Paid campaign budgets shift weekly based on cost-per-lead performance, not monthly based on gut feel.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Transparent Communication : </b> Clients receive fortnightly status updates during active project phases. Delays and scope changes are communicated before they become problems, not after.
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            <b style="color: var(--color-heading-1);">Ethical Practices : </b> No black-hat SEO. No private blog networks. No paid link schemes. No tactics that produce short-term gains followed by Google penalties that cost months to recover from.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->

    <!-- rts team area start -->
    <div class="rts-team-area rts-section-gap">
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

    <!-- rts footer area start -->
    @include('include.footer')
    <!-- rts footer area end -->

    <!-- rts Js Link start -->
    @include('include.js-link')
    <!-- rts Js Link End -->
</body>

</html>