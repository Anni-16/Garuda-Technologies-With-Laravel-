<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Garuda Technolohgies - Team</title>
    <meta name="keyword" content="Garuda Technolohgies - Team">
    <meta name="description" content="Garuda Technolohgies - Team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style Link -->
    @include('include.css-link')
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
                    <div class="title-area-left center">
                        <span class="bg-title">Our Team</span>
                        <h1 class="title" id="my-border">
                            Team Experts
                        </h1>
                        <p class="disc" style="max-width: 45%; margin: auto;">
                            With a team of experienced professionals and a passion for innovation, we combine
                            cutting-edge strategies
                        </p>
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


    <div class="inner-page-team-area rts-section-gapBottom mt-dec-section-inner">
        <div class="container pb--80">
            <div class="row mt--30 g-5 g-sm-30 mb--80">
                @foreach($teams as $team)
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
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