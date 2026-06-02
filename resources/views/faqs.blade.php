<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FAQ | Garuda Technologies IT & Travel Services Gurgaon</title>
    <meta name="keyword" content="Garuda Technologies FAQ, IT company FAQ Gurgaon, SEO FAQ India, web development FAQ Gurgaon, travel booking FAQ Gurugram, IT services questions India">
    <meta name="description" content="Frequently asked questions about Garuda Technologies' IT services, SEO, web development, and travel bookings in Gurgaon. Get answers before you call.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What does Garuda Technologies do?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Garuda Technologies is a Gurgaon-based IT and travel services company offering SEO, web development, app development, cloud services, digital marketing, and travel bookings through seven specialized travel brands."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How long does SEO take to show results?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Technical SEO improvements show in Google Search Console within 2 to 4 weeks. Keyword ranking movement typically begins between weeks 6 and 12. Competitive terms in Gurgaon's IT sector require 6 to 12 months for top-3 placement."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I book a flight through Garuda Technologies?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Call +91-9910844235 or email info@garudatechnologies.co.in with your travel dates, destination, and number of passengers. A travel consultant responds within 2 to 4 hours with fare options."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does Garuda Technologies offer corporate travel accounts?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes. Corporate accounts receive GST invoicing, consolidated monthly billing, negotiated fares, and a dedicated travel manager. Contact +91-9910844235 to set up an account."
                    }
                }
            ]
        }
    </script>
    @endverbatim

    <!-- Style Link -->
    @include('include.css-link')
</head>


<body>

    <!-- rts header Start -->
    @include('include.header')
    <!-- rts header End -->


    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">FAQ</span>
                        <h1 class="title rts-text-anime-style-1" id="my-border">
                            Frequently Asked Questions — Garuda Technologies IT and Travel Services
                        </h1>
                        <p class="disc">The questions below cover the most common inquiries Garuda Technologies receives about its IT services, digital marketing, web development, and travel booking services. If your question is not answered below, contact the team at <a href="tel:+919910844235">+91-9910844235</a> or <a href="mailto:info@garudatechnologies.co.in.">info@garudatechnologies.co.in.</a></p>
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

    <!-- rts faq area start -->
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
                    <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                        <div class="accordion" id="accordionExample">

                            @foreach($faqs as $index => $faq)

                            @php
                            $id = $index + 1;
                            @endphp

                            <div class="accordion-item">

                                <h2 class="accordion-header" id="heading{{ $id }}">
                                    <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $id }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $id }}">

                                        {{ $id }}. {{ $faq->question }}

                                    </button>
                                </h2>

                                <div id="collapse{{ $id }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $id }}"
                                    data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                        {{ $faq->answer }}
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
    <!-- rts faq area end -->

    <!-- rts footer area start -->
    @include('include.footer')
    <!-- rts footer area end -->

    <!-- rts Js Link start -->
    @include('include.js-link')
    <!-- rts Js Link End -->

</body>

</html>