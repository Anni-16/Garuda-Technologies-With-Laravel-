<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $blog->meta_title }}</title>
    <meta name="keyword" content="{{ $blog->meta_keywords }}">
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style Link -->
    @include('include.css-link')
</head>


<body class="contact-page">

    <!-- rts header Start -->
    @include('include.header')
    <!-- rts header End -->


    <div class="blog-details-banner-large-image" style="background-image: url('{{ asset('storage/' . $blog->images) }}');">

    </div>


    <div class="blog-details-area-main-wrapper mt-dec-180 mb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-area-inner-content">
                        <div class="blog-details-top-wrapper">
                            <div class="single">
                                <i class="fa-regular fa-circle-user"></i>
                                <span>{{ $blog->authorName->name ?? 'Unknown Author' }}</span>
                            </div>
                            <div class="single">
                                <i class="fa-regular fa-clock"></i>
                                <span>{{ $blog->formatted_date }}</span>
                            </div>
                        </div>
                        <h2 class="title">{{ $blog->title }}</h2>
                        <p class="disc">
                            {!! $blog->description !!}
                        </p>

                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <!-- tags details -->
                                <div class="details-tag">
                                    <h6>Tags:</h6>

                                    @if(!empty($blog->meta_keywords))
                                    @foreach(explode(',', $blog->meta_keywords) as $tag)
                                    <button>{{ trim($tag) }}</button>
                                    @endforeach
                                    @endif
                                </div>
                                <!-- tags details End -->
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