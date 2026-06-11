<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $contact->meta_title }}</title>
    <meta name="keyword" content="{{ $contact->meta_keywords }}">
    <meta name="description" content="{{ $contact->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ContactPage",
            "name": "Contact Garuda Technologies",
            "url": "https://garudatechnologies.co.in/contact-us",
            "mainEntity": {
                "@type": "Organization",
                "name": "Garuda Technologies",
                "telephone": "+91-8130150400",
                "email": "info@garudatechnologies.co.in",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Plot No. 750, Udyog Vihar Phase V Rd, Phase V, Udyog Vihar, Sector 19",
                    "addressLocality": "Gurugram",
                    "addressRegion": "Haryana",
                    "postalCode": "122016",
                    "addressCountry": "IN"
                },
                "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens": "09:00",
                    "closes": "18:30"
                }]
            }
        }
    </script>
    @endverbatim

    <!-- Style Link -->
    @include('include.css-link')

</head>


<body class="contact-page">

    <!-- rts header Start -->
    @include('include.header')
    <!-- rts header End -->

    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Contact</span>
                        <h1 class="title rts-text-anime-style-1" id="my-border">
                            {{ $contact->name }}
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


    <div class="our-service-area-start rts-section-gapBottom mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title" id="my-border">Contact Garuda Technologies — Reach the IT and Travel Team in Gurgaon</h3>
                    <p class="disc">
                        Garuda Technologies is reachable by phone, email, and in person at the Gurgaon office. The team operates 24/7 for travel bookings and IT support queries. For new IT project inquiries, a free consultation and site audit are available on request. Contact the right team directly using the details below.
                    </p>
                    <h4 id="my-border">What to Include in Your Message</h4>
                    <br>
                    <h5 style="font-size: 18px;">For IT and Digital Services Inquiries</h5>
                    <div class="check-wrapper-area mb--20 ">
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            Your website URL or domain name
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            The specific service you are interested in (SEO, web development, app development, cloud, etc.)
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            Your target audience and geographic market
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            Current challenges you are facing (low traffic, poor rankings, slow site, etc.)
                        </div>
                        <div class="single-check">
                            <i class="fa-solid fa-circle-check" style="color: black;"></i>
                            Your approximate budget range and timeline
                        </div>
                    </div>
                    <br>
                    <h5 style="font-size: 18px;">How to Find Us</h5>
                    <p class="disc">
                        The Garuda Technologies office is located in Udyog Vihar Phase V, Sector 19, Gurugram — approximately 3 km from the Udyog Vihar Metro Station on the Delhi Metro Yellow Line. Parking is available at the complex. Visitors are recommended to call ahead at +91-8130150400 to schedule an in-person meeting.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <!-- contact areas main -->
    <div class="mt-40" data-animation="fadeInUp" data-delay="0.2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-info-area-wrapper-p">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Call Us 24/7</span>
                                <a href="tel:91{{ $contact->number }}">+91-{{ $contact->number }}</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Work with us</span>
                                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Our Location</span>
                                <a href="#">{{ $contact->address }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="thumbnail-contact-form">
                        <img src="{{ asset('storage/' .  $contact->images) }}" alt="{{ $contact->name }}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-form-p">
                        <form class="form__content" method="post" action="#" id="contact-form">
                            <h4 class="title">Get In Touch</h4>
                            <p>Please contact us using the form and we’ll get back to you as soon as possible.</p>
                            <input name="name" id="name" type="text" placeholder="Your Name">
                            <input type="email" name="email" id="email" placeholder="Enter Your E-mail">
                            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone No.">
                            <textarea name="message" id="message" placeholder="Message"></textarea>

                            <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                        </form>
                        <div id="form-messages"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact areas main end -->

    <!-- map area start -->
    <div class="google-map-area rts-section-gapTop mb--40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map">
                        <iframe src="{{ $contact->location_url }}" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map area end -->



    <!-- rts footer area start -->
    @include('include.footer')
    <!-- rts footer area end -->

    <!-- rts Js Link start -->
    @include('include.js-link')
    <!-- rts Js Link End -->

</body>

</html>