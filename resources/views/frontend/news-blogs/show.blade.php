@extends('frontend.layouts.app')
@section('title', $news->title . ' - ')

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
                                    <span class="prt-bread-sep"> - </span>
                                    <span>
                                        <a href="{{ url('/news-blogs') }}" class="home">News & Blogs</a>
                                    </span>

                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-60 pt-60 px-md-5 news-pt-0">

        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-7">
                    <span class="blog-title d-block px-2 pb-2">{{ $news->title }}
                    </span>

                    <div>
                        @if ($news->featured_image)
                            <img src="{{ $news->featured_image }}" alt="" class="blog-img show-blog-img">
                        @endif
                    </div>

                    <div class="justify-content-between pt-3 px-xl-2 pr-xl-0">
                        <span class="post-date d-xl-inline d-block"> Posted On:
                            {{ dd_format($news->publish_date, 'jS M Y') }}</span>
                        <span class="post-date mx-xl-4 d-xl-inline d-block pb-xl-0 pb-3"> By:
                            {{ $news->author->name }}</span>
                        <div class="d-inline ">

                        </div>

                        <div class=" pt-2">
                            <p>{!! $news->body !!}</p>
                        </div>
                        <div class="px-2 pl-0">
                            <hr>
                        </div>
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
                                            <img src="{{ $post->featured_image ?? asset('frontend/images/driv-b.png') }}" alt="" class="sidebar-img">
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
@endsection


<style>
      .white-icon-circle img{
padding-top: 7px !important;
}
</style>
