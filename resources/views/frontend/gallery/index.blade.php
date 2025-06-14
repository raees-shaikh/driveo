@extends('frontend.layouts.app')
@section('title', 'Gallery - ')
@section('content')


    <!-- page-title -->
    <div class="prt-page-title-row bg-img-gallery">
        <div class="prt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Gallery</h2>
                        </div>
                        <div class="breadcrumb-wrapper-main">
                            <div class="container">
                                {{-- <div class="breadcrumb-wrapper-inner bread-white">
                                    <span>
                                        <a href="{{ url('/') }}" class="home">Home</a>
                                    </span>

                                    <span class="prt-bread-sep"> -</span>
                                    <span>Gallery</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-60 pt-60 px-md-5 news-pt-0">
        {{-- <h2 class="news-title text-center">Gallery</h2> --}}

        <div class="container pt-4">
            <div class="row">
                @forelse ($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 pl-for-small-device">
                        <a href="{{ route('frontend.gallery.show', $gallery->slug) }}" class="px-2"><img
                                src="{{ asset('storage/images/gallery/thumbnails/' . $gallery->image) }}" alt=""
                                class="gallery-hover-img w-100"></a>
                        <a href="{{ route('frontend.gallery.show', $gallery->slug) }}">
                            <p class="gallery-text px-2">{{ $gallery->title }}</p>
                        </a>
                    </div>

                @empty
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-6 mx-auto text-center">
                        <h3>No Gallery Found</h3>
                @endforelse
                <div class="my-2 text-center mt-25 pt-5">
                    {{ $galleries->onEachSide(1)->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>



    </section>
    {{-- <div class="row  mx-auto text-center pb-4">
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
