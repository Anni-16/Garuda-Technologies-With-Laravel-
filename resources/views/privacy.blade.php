<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta SEO Start -->
    <meta charset="UTF-8">
    <title>{{ $privacy->meta_title }}</title>
    <meta name="keyword" content="{{ $privacy->meta_keywords }}">
    <meta name="description" content="{{ $privacy->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <!-- End Google Tag Manager -->

    <!-- Meta SEO End  -->

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
                        <span class="bg-title">Privacy</span>
                        <h1 class="title">
                            {{ $privacy->name }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->

    <div class="privacy-policy-wrapper rts-section-gapTop pb--40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">

                        <div class="top">
                            <h2 class="title" id="my-border">{{ $privacy->name }}</h2>
                            <div class="disc">
                                {!! $privacy->content !!}
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