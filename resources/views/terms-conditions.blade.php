<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $terms->meta_title }}</title>
    <meta name="keyword" content="{{ $terms->meta_keywords }}">
    <meta name="description" content="{{ $terms->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style Link -->
    @include('include.css-link')

    <style>
        a strong {
            color: #0b89dd;
        }

        strong {
            color: var(--color-heading-1);
        }
    </style>

</head>

<body>

    <!-- rts header Start -->
    @include('include.header')
    <!-- rts header End -->

    <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb bg_image" style="background-image: url({{ asset('font-end/assets/images/cta/02.webp') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Terms & Conditions</span>
                        <h1 class="title">
                            {{ $terms->name }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->

    <div class="Terms & Conditions-policy-wrapper rts-section-gapTop pb--40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">

                        <div class="top">
                            <h2 class="title" id="my-border">{{ $terms->name }}</h2>
                            <div class="disc">
                                {!! $terms->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- rts footer area start -->
    @include('include.footer')
    <!-- rts footer area end -->

    <!-- rts Js Link start -->
    @include('include.js-link')
    <!-- rts Js Link End -->

</body>

</html>