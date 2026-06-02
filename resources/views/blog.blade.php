<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Garuda Technolohgies - Blogs</title>
    <meta name="keyword" content="Garuda Technolohgies - Blogs">
    <meta name="description" content="Garuda Technolohgies - Blogs">
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
                        <span class="bg-title">Latest Blogs</span>
                        <h1 class="title rts-text-anime-style-1" id="my-border">
                            Latest Blogs
                        </h1>
                        <p class="disc">
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


    <div class="rts-blog-list-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <!-- rts blog post area -->
                <div class="col-xl-8 col-md-12 col-sm-12 col-12">
                    <div class="row g-5">
                        @if ($blogs->isNotEmpty())
                        @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.1">
                            <div class="single-blog-area-one column-reverse">
                                <p>{{ $blog->category->name ?? 'No Category' }} / <span>&nbsp;by {{ $blog->authorName->name ?? 'No Author' }}</span></p>
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
                        @else
                        <div class="col-12 text-center">
                            <p>No blog found.</p>
                        </div>
                        @endif
                    </div>

                    <!-- pagination area -->
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="pagination">

                                    {{-- Previous Button --}}
                                    @if ($blogs->onFirstPage())
                                    <button disabled><i class="fal fa-angle-double-left"></i></button>
                                    @else
                                    <a href="{{ $blogs->previousPageUrl() }}">
                                        <button><i class="fal fa-angle-double-left"></i></button>
                                    </a>
                                    @endif

                                    {{-- Page Numbers --}}
                                    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    @if ($page == $blogs->currentPage())
                                    <button class="active">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</button>
                                    @else
                                    <a href="{{ $url . '&search=' . request('search') }}">
                                        <button>{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</button>
                                    </a>
                                    @endif
                                    @endforeach
                                    &nbsp;&nbsp;
                                    {{-- Next Button --}}
                                    @if ($blogs->hasMorePages())
                                    <a href="{{ $blogs->nextPageUrl() }}">
                                        <button><i class="fal fa-angle-double-right"></i></button>
                                    </a>

                                    @else
                                    <button disabled><i class="fal fa-angle-double-right"></i></button>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pagination area End -->

                </div>
                <!-- rts-blog post end area -->

                <!--rts blog wized area -->
                <div class="col-xl-4 col-md-12 col-sm-12 col-12 mt_lg--60 blog-list-style">
                    <!-- single wized start -->
                    <div class="rts-single-wized search1">
                        <div class="wized-header">
                            <h5 class="title">
                                Search Hear
                            </h5>
                            <div class="wized-body">
                                <div class="rts-search-wrapper">
                                    <form method="GET" action="{{ url()->current() }}">
                                        <input class="Search1" type="text" name="search" placeholder="Search blog..." value="{{ request('search') }}"">
                                <button><i class=" fal fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
           
                        <div class="rts-single-wized Recent-post">
                            <div class="wized-header">
                                <h5 class="title">
                                    Recent Posts
                                </h5>
                            </div>
                            <div class="wized-body">
                                <!-- recent-post -->
                                @if ($recentBlogs->isNotEmpty())
                                @foreach ($recentBlogs as $recent)
                                <div class="recent-post-single">
                                    <div class="thumbnail">
                                        <a href="{{ route('blogs-details', $recent->slug) }}"><img src="{{ asset('storage/' . $recent->images) }}" alt="{{ $recent->title }}" style="width: 150px;"></a>
                                    </div>
                                    <div class="content-area">
                                        <div class="user">
                                            <i class="fal fa-clock"></i>
                                            <span>{{ $recent->date }}</span>
                                        </div>
                                        <a class="post-title" href="{{ route('blogs-details', $recent->slug) }}">
                                            <h6 class="title">{{ $recent->title }}</h6>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="col-12 text-center">
                                    <p>No blog found.</p>
                                </div>
                                @endif
                                <!-- recent-post End -->
                            </div>

                        </div>
                    </div>
                    <!-- single wized End -->

                    <!-- single wized start -->
                    <div class="rts-single-wized contact">
                        <div class="wized-body">
                            <h5 class="title">Need Help? We Are Here
                                To Help You</h5>
                            <a class="rts-btn btn-primary btn-white" href="{{ route('contact-us') }}">Contact Us</a>
                        </div>
                    </div>
                    <!-- single wized End -->
                </div>
                <!-- rts- blog wized end area -->
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