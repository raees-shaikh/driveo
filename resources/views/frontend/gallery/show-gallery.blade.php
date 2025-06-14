@extends('frontend.layouts.app')
@section('title', $gallery->title . ' - ')
@section('cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/css/lightgallery.min.css">
@endsection
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
                                        <a href="{{ url('/') }}" class="home">&nbsp;&nbsp;Home</a>
                                    </span>
                                    <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                    <span>Gallery</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-60 pt-60">
        <div>
            <div class="container">

                <div class="row " id="gallery">
                    @forelse ($medias as $m)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <a href="{{ asset('storage/images/gallery/' . $m->filename) }}" class="item d-block">
                                <img src="{{ asset('storage/images/gallery/' . $m->filename) }}" width="300"
                                    height="300" />
                            </a>
                        </div>

                    @empty
                        <div class="col-xl-3 col-lg-4 col-sm-6  mx-auto text-center">
                            <h3>No Gallery Found</h3>
                        </div>
                    @endforelse
                    <div class="my-2 text-center mt-25 pt-5">
                        {{ $medias->onEachSide(1)->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.1.0/lg-fullscreen.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#gallery").lightGallery({
                selector: '.item',
            });
        });
    </script>
    <style>
        #gallery .item img {
            width: 100%;
            object-fit: cover;
        }
    </style>
@endsection
