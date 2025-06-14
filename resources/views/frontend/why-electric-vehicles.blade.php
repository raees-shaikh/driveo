@extends('frontend.layouts.app')
@section('title', 'Why Electric Vehicles - ')
@section('content')


    <!-- page-title -->
    <div class="prt-page-title-row bg-img-why-e-v">
        <div class="prt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Why electric vehicles</h2>
                        </div>
                        <div class="breadcrumb-wrapper-main">
                            <div class="container">
                                {{-- <div class="breadcrumb-wrapper-inner bread-white">
                                    <span>
                                        <a href="{{ url('/') }}" class="home">&nbsp;&nbsp;Home</a>
                                    </span>
                                 
                                    <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                    <span>Why Electric Vehicles</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--site-main start-->
    <div class="site-main">
        <section class=" bg-base-grey prt-bg pb-30">
            <div class="container px-md-5 ">
                <div class="row justify-content-center px-md-5">
                    <h2 class="text-center text-primary mt-50">Why electric vehicles</h2>
                    <p class="text-center my-0 paragraph px-md-5">Electric vehicles bring a powerful array of advantages
                        that will propel your company towards the forefront of success.</p>

                </div>
                <section>
                    <div class="row ">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/co-2.png') }}" / class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--9 mt-why-e-v'>Smaller Carbon Footprint
                                    </h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/average.jpg') }}" / class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--9 mt-why-e-v'>Lower running cost per
                                        KM
                                    </h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/less-main.jpg') }}" / class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--9 mt-why-e-v'>Minimal maintenance
                                        requirements</h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/fastest_electric_car.jpg') }}" /
                                    class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--9 mt-why-e-v'>Smoother and quieter
                                        rides</h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/car-energy.png') }}" / class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--9 mt-why-e-v'>Energy-efficient</h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/no-gear.png') }}" / class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--9 mt-why-e-v'>No gear-shifting
                                        required</h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/car-auto.png') }}" / class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--10 mt-760'>Lightning-fast acceleration
                                        and instant torque </h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class='newsCard news-Slide-up mb-0 custom-height-why-e-v'>
                                <img src="{{ url('frontend/images/services/tax-1.jpg') }}" / class="w-100 h-100">
                                <div class='newsCaption cust-pad'>
                                    <h6 class='newsCaption-title text-white fs-14 mt--10 mt-smm-5 mt-760'>Avail Financial
                                        Incentives, grants and tax benefits</h6>
                                    {{-- <p class='newsCaption-content'>
                                    Blurb to get reader hooked.
                                  </p>
                                  <p><a class='newsCaption-link' href='#'>Read More</a>  ></p> --}}
                                </div>
                            </div>

                        </div>
                        <div class="mt-30">
                            <p class="text-center text-black text-lowercase">It's Time To Electrify Your Fleet And Unlock A Future Where
                                Success Knows No Limits!</p>
                        </div>
                        {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                    </div>
                </section>
            </div><!--site-main end-->
        @endsection
