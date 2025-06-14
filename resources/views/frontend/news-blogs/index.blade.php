@extends('frontend.layouts.app')
@section('title', 'News -')
@section('content')


    <!-- page-title -->
    <div class="prt-page-title-row bg-img-news">
        <div class="prt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">News & Blogs</h2>
                        </div>
                        <div class="breadcrumb-wrapper-main">
                            <div class="container">
                                {{-- <div class="breadcrumb-wrapper-inner bread-white">
                                    <span>
                                        <a href="{{ url('/') }}" class="home">Home</a>
                                    </span>

                                    <span class="prt-bread-sep">-</span>
                                    <span>News & Blogs</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-60 pt-60 px-md-5 news-pt-0">
        {{-- <h2 class="news-title text-center">Blogs For <span class="text-parrot">Electric vehicle</span></h2> --}}

        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-7">
                    @forelse ($news as $nw)
                        <span class="blog-title d-block px-2 pb-2">{{ $nw->title }}
                        </span>

                        <div>
                            @if ($nw->featured_image)
                                <img src="{{ $nw->featured_image }}" alt="" class="blog-img">
                            @endif
                        </div>

                        <div class="justify-content-between pt-3 px-xl-2 pr-xl-0">
                            <span class="post-date d-xl-inline d-block"> Posted
                                On: {{ dd_format($nw->publish_date, 'jS M Y') }}</span>
                            <span class="post-date mx-xl-4 d-xl-inline d-block pb-xl-0 pb-3"> By:
                                {{ $nw->author->name }}</span>
                            <div class="d-inline ">
                                <a href="{{ route('frontend.blog.show', $nw->slug) }}" class="post-btn d-md-inline ">Read
                                    More</a>
                            </div>


                            <div class="px-2 pl-0">
                                <hr>
                            </div>
                        </div>
                    @empty
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mx-auto text-center">
                            <h3>No News Found</h3>
                        </div>
                    @endforelse

                    {{-- <div class="row  mx-auto text-center pb-4 d-lg-none d-block">
                        <nav aria-label="..." class="mx-auto">
                            <ul class="pagination mx-auto text-center d-inline-flex">
                                <li class="page-item ">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}

                    <div class="my-2 text-center mt-25 pt-5">
                        {{ $news->onEachSide(1)->links('pagination::bootstrap-4') }}
                    </div>

                </div>


                <div class="col-lg-5">
                    <div class="blog-sidebar mx-auto">
                        <div>

                            <ul>

                                <div class="pb-2"><span class="recent-text"> Latest Posts</span></div>
                                @foreach ($latestPosts as $post)
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('frontend.blog.show', $post->slug) }}">
                                            <img src="{{ $post->featured_image ?? asset('frontend/images/driv-b.png') }}"
                                                alt="" class="sidebar-img">
                                        </a>
                                        <li class="px-3">
                                            <a href="{{ route('frontend.blog.show', $post->slug) }}">
                                                <span class="blog-sidebar-text ">{{ $post->title }}
                                                </span>

                                            </a>
                                        </li>
                                    </div>
                                    <hr class="custom-hr">
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    {{-- <div class="row  mx-auto text-center pb-4 d-lg-block d-none">
        <nav aria-label="..." class="mx-auto">
            <ul class="pagination mx-auto text-center d-inline-flex">
                <li class="page-item ">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div> --}}
@endsection
<style>
    .white-icon-circle img{
padding-top: 7px !important;
}

</style>
