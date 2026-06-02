<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Garuda Technolohgies - Services</title>
    <meta name="keyword" content="Garuda Technolohgies - Services">
    <meta name="description" content="Garuda Technolohgies - Services">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style Link -->
    @include('include.css-link')
</head>

<body>

    <!-- rts header Start -->
    @include('include.header')
    <!-- rts header End -->

    <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area small-h">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="pre" id="my-border">Our Service</span>
                        <span class="bg-title">Our Service</span>
                        <h1 class="title rts-text-anime-style-1">
                            Service We Provide
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

    <!-- service area start -->
    <div class="our-service-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-service-main-wrapper-10">
                        @foreach ($servicecategories1 as $category)
                        <div class="signle-service-style-10">
                            <div class="content-area-wrapper">
                                <h5 class="title" id="my-border">{{ $category->name }}</h5>
                                <p class="disc">
                                    {{ $category->description }}
                                </p>
                                <a href="{{ route('services.category', $category->category_slug) }}" class="arrow-right-btn"> View Services <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="thumbnail">
                                <img src="{{ asset('storage/' . $category->icon) }}" alt="{{ $category->name }}">
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- How We Work areas start -->
    <div class="working-process-one bg-main rts-section-gap without-clip-radious mb--60">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <div class="title-style-one">
                        <span class="pre">How we works</span>
                        <h2 class="title rts-text-anime-style-1" id="my-border">Easy 5 Steps To Work
                        </h2>
                    </div>
                    <div class="working-process-main-wrapper mt--60">
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color: #fff;">
                                    DISCOVER
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">01</span>
                                </div>
                                <h5 class="title">Requirement Analysis</h5>
                                <p class="disc">
                                    Every engagement begins with a structured discovery session. We map your business goals, target audience, competitive landscape, and technical constraints before any solution is proposed. For IT projects, this produces a documented scope. For travel bookings, it confirms dates, preferences, budget, and any special requirements. Discovery prevents the misalignment that causes rework, delays, and budget overruns.
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color:#fff;">
                                    PLAN
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">02</span>
                                </div>
                                <h5 class="title">Strategy & Planning</h5>
                                <p class="disc">
                                    Discovery outputs become a documented roadmap. For SEO engagements, this is a 90-day plan with keyword targets, technical fix priorities, and content production schedule. For web development projects, this is a project brief with wireframes, technology stack, and milestone dates. For travel, this is an itinerary with fare options and cancellation terms. The roadmap is shared and agreed before any work begins — no surprises mid-engagement.
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color: #fff;">
                                    BUILD
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">03</span>
                                </div>
                                <h5 class="title">Design & Development</h5>
                                <p class="disc">
                                    Execution follows the roadmap. SEO technical fixes are implemented in priority order — P1 blockers first, then on-page optimisation, then content production. Web and app development follows sprint-based delivery with client review checkpoints at each milestone. Every output at this stage is reviewed against the documented requirements before the client sees it. Internal quality checks prevent defects from reaching delivery.
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color: #fff;">
                                    TEST
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">04</span>
                                </div>
                                <h5 class="title">Testing & Optimization</h5>
                                <p class="disc">
                                    Every deliverable is tested before going live. Web builds are tested across Chrome, Firefox, Safari, and mobile devices for functionality, performance, and Core Web Vitals compliance. SEO implementations are validated in Google Search Console for correct indexation and schema eligibility. Paid campaigns run a test phase before full budget deployment. Travel bookings are confirmed directly with the service provider before the booking confirmation is sent to the client.
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon" style="color: #fff;">
                                    GROW
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">05</span>
                                </div>
                                <h5 class="title">Deployment & Ongoing Support</h5>
                                <p class="disc">
                                    Delivery is the beginning, not the end. Websites are deployed with hosting, SSL, and backup infrastructure confirmed. SEO retainers continue with monthly reporting, content updates, and link acquisition. Paid campaigns are optimised weekly based on conversion data. Travel bookings are supported 24/7 through the client's journey — any changes, cancellations, or emergencies are handled by the team without the client needing to contact the airline or hotel directly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How We Work areas end -->

    <!-- rts clients review area start -->
    <div class="rts-client-review-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper" dir="ltr">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Review</span>
                            <span class="pre" id="my-border">Our Testimonial</span>
                            <h2 class="title ">Our Client Reviews
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

    <!-- rts footer area start -->
    @include('include.footer')
    <!-- rts footer area end -->

    <!-- rts Js Link start -->
    @include('include.js-link')
    <!-- rts Js Link End -->

</body>

</html>