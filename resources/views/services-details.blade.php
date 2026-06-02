<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $service->meta_title }}</title>
    <meta name="keyword" content="{{ $service->meta_keywords }}">
    <meta name="description" content="{{ $service->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="application/ld+json">
    {{ $service->schema_markup }}
    </script>

    <!-- Style Link -->
    @include('include.css-link')
    <style>
        h3 {
            font-size: 18px;
        }

        h2 {
            font-size: 28px;
        }

        a strong {
            color: #0b89dd;
        }
    </style>
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
                            {{ $service->name }}
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

    <!-- rts business details area left main -->
    <div class="rts-service-details-area-main-bottom mt--80 mb--80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="service-details-left-area">
                        <div class="thumbnail">
                            <img src="{{ asset('storage/' . $service->images) }}" alt="{{ $service->name }}">
                        </div>
                        <h2 class="title">{{ $service->short_description }}</h2>
                        <p class="disc">
                            {!! $service->description !!}
                        </p>

                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 pl-lg-controler">
                    <!-- single wizered start -->
                    <div class="rts-single-wized contact service">
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary btn-white" href="{{ route('contact-us') }}">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wizered End -->

                    <!-- single wizered start -->
                    <div class="rts-single-wized Categories service ">
                        <div class="wized-header">
                            <h5 class="title">
                                Other Services
                            </h5>
                        </div>
                        <div class="wized-body">
                            <!-- single categoris -->
                            <ul class="single-categories">
                                @foreach ($otherServices as $item)
                                <li>
                                    <a href="{{ route('services.details', ['category_slug' => $item->category->category_slug,'service_slug' => $item->service_slug]) }}">
                                        {{ $item->name }}
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                            <!-- single categoris End -->
                        </div>
                    </div>
                    <!-- single wizered End -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts business details area left main end -->

    <!-- rts footer area start -->

    @include('include.footer')
    <!-- rts footer area end -->

    <!-- rts js link area end -->
    @include('include.js-link')
    <!-- rts js link area end -->

</body>

</html>