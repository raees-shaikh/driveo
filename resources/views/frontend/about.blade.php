@extends('frontend.layouts.app')
@section('title', 'About Us - ')

@section('content')

    <!-- page-title -->
    <div class="prt-page-title-row bg-img-about-us">
        <div class="prt-page-title-row-inner-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">About us</h2>
                        </div>
                        <div class="breadcrumb-wrapper-main">
                            <div class="container">
                                {{-- <div class="breadcrumb-wrapper-inner">
                                    <span>
                                        <a href="{{ url('/') }}" class="home">&nbsp;&nbsp;Home</a>
                                    </span>

                                    <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                    <span>About Us</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--site-main start-->
    <div class="site-main ">

        <!--prt-row-->
        <section class="pt-md-60 clearfix ">
            <div class="prt-team-member-single-content-wrapper prt-team-member-view-default">
                <div class="container">
                    <div class=" row prt-team-member-single-content justify-content-center ">

                        <div class="col-12">
                            <div class="  pb-50 pl-40 pr-40 mr_10 ml--15-about res-575-pl-15 res-575-pr-15">
                                <div class="prt-service-description row">
                                    <div class="pb-20 col-xl-6 order-xl-1 pt-lg-2 ">
                                        <div
                                            class="prt_fatured_image-wrapper about-us-img-resize text-center mt-20 mt-md--0 pt-lg-4 ">
                                            <img class="img-fluid border-rad_6 fix-div-h-w"
                                                src="frontend/images/services/about.png" alt="services-1">
                                        </div>
                                    </div>
                                    <div class="pt-25 col-xl-6 order-xl-2 order-1 mt-40-lg ml--15-about ">
                                        {{-- <h3 class="text-about-page-t text-lg-start text-center pt-xl-3">About <span class="text-parrot"> us</span></h3> --}}
                                        <p class="main-tag-line  px-md-0 px-1 mx-md-0  text-black"> <span
                                                class="text-black">Fueling B2B
                                            </span> <span class="transport">transportation </span><span
                                                class="text-black">with
                                            </span> sustainable <span class=" text-primary"> solutions</span></p>

                                        <p class="text-for-about-text px-0">Rev up with <span class="text-capitalize">driveo
                                                electric
                                                mobility</span>,
                                            the game-changer in leasing. Join us on our mission to turbocharge sustainable
                                            mobility in B2B
                                            transportation of people & cargo. With india's electric vehicle market set to
                                            skyrocket to
                                            $150
                                            billion by 2030, we are driving the transition to EVs full throttle.
                                            Collaborating with top-tier 3-wheeler/4-wheeler EV manufacturers, we are blazing
                                            a trail towards
                                            a
                                            greener future. </p>

                                        {{-- <p class="text-for-about-text">Rev up with <span class="text-capitalize">Driveo Electric Mobility,</span><br> the
                                            game-changer in leasing. Join us on our mission to turbocharge<br> sustainable
                                            mobility in <span class="text-uppercase">B2B</span> transportation of people &
                                            cargo. With<br> India's electric vehicle market set to skyrocket to $150 billion by
                                            2030,<br> we are driving the transition to EVs full throttle.<br> Collaborating with
                                            top-tier 3-wheeler/4-wheeler EV manufacturers,<br> we are blazing a trail towards a
                                            greener future.
                                        </p> --}}
                                        <p class="text-for-about-text">
                                            At <span class="text-capitalize">Driveo</span>, we are your all-in-one pit stop.
                                            We have got you covered from start<br> to finish. Say goodbye to the hassle of
                                            vehicle acquisition because we have got it sorted. Embark on a worry-free
                                            journey with our all-inclusive service <br>package, guaranteeing seamless
                                            operations
                                            and maintenance like never before. And when your contract ends, we will
                                            revitalize the resale process, making it a breeze. <span
                                                class="text-capitalize">Driveo</span> is here to electrify
                                            your business and ignite a new era of sustainable transportation. Let's hit the
                                            road together!
                                        </p>
                                    </div>

                                </div>
                                <div class="mt-60 mt-xl-0-mission-title">
                                    <h3 class="text-primary text-center "><span class="">O</span>ur mission and vision
                                    </h3>
                                </div>
                                <div class="row mt-10 fadein px-xl-4 mt-xl-0-mission">


                                    <div class="col-lg-6 col-md-6 animation-element slide-left">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-services style3 style-new">
                                            <div class="featured-content px-0">
                                                <div class="featured-title text-center">
                                                    <h3 class="font-size-24"><a href="#"
                                                            class="d-lg-block d-inline-flex"> <img
                                                                src="frontend/images/services/target-icon.png"
                                                                alt="" class="mb-2 mx-1"> Mission</a></h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p
                                                        class="pb-10 text-start text-for-about-text text-lg-start text-center">
                                                        Empowering and accelerating the growth of the <span
                                                            class="text-uppercase">EV</span> ecosystem through innovative
                                                        and sustainable mobility solutions</p>
                                                </div>

                                            </div>
                                            <div
                                                class="pt-40  mt-30 mb-for-xl-card-3  border-rad_6 mt-5-after-xl h-equal-300">
                                                <!-- featured-thumbnail -->
                                                <div class="  pt-1">
                                                    <img class="  border-rad_6 img-fluid fix-div-h-w"
                                                        src="frontend/images/services/new-mission.png" alt="image">
                                                </div><!-- featured-thumbnail end-->
                                            </div>
                                        </div><!-- featured-imagebox end-->
                                    </div>
                                    <div class="col-lg-6 col-md-6 animation-element slide-right">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-services style3 style-new">
                                            <div class="featured-content px-0">
                                                <div class="featured-title">
                                                    <h3 class="font-size-24"><a href="#"
                                                            class="d-lg-block d-inline-flex"> <img
                                                                src="frontend/images/services/v-icon.png" alt=""
                                                                class="mb-2 mx-2">Vision</a></h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p class=" text-for-about-text text-lg-start text-center">To build a
                                                        expansive and thriving ecosystem that supports and powers 50,000
                                                        electric vehicles within the next 5 years</p>
                                                    <br>
                                                </div>
                                                {{-- <a class="prt-icon bottom_icon" href="#">
                                               <i class="flaticon-right-arrow-2"></i>
                                            </a> --}}
                                            </div>
                                            <div class="pt-40 border-rad_6 h-equal-300 mt-vission-30">
                                                <!-- featured-thumbnail -->
                                                <div class=" ">
                                                    <img class="  img-fluid border-rad_6 fix-div-h-w"
                                                        src="frontend/images/services/vission.jpg" alt="image">
                                                </div><!-- featured-thumbnail end-->
                                            </div>
                                        </div><!-- featured-imagebox end-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--prt-row end-->

        {{-- <section class="   ">
        <div class="container position-relative">

            <div class="row px-xl-5 fadein">
                <h3 class=" text-center about-team-t">Our Team</h3>
                <div class="row justify-content-center mt-3">
                    <div class="col-xl-10">
                        <p class="team-text px-0">Driveo accelerates ahead with a powerhouse team! Our lineup of seasoned professionals <br>brings expertise from the Automobile, E-commerce, and Financial services sectors.</p>
                    </div>
                </div>
                <div class="row justify-content-center px-3 mt-20 d-contents-sm ">
                    <span class="meet-drive-force-title mx-auto b-radius-14"> Meet Our Driving Forces</span>
                </div>
                <section class=" pb-20 pt-10 mt_10 clearfix px-xl-5">
                    <div class="container px-xl-5">

                        <div class="row slick_slider res-1199-mr-0 res-1199-ml-0 ml_100 mr_100 justify-content-center"
                            data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1199,"settings":{"slidesToShow": 1}}, {"breakpoint":992,"settings":{"slidesToShow": 2}}, {"breakpoint":767,"settings":{"slidesToShow": 1}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                            <div class="prt-box-col-wrapper ">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                    <!-- featured-thumbnail -->
                                   <div class="row justify-content-center py-5">
                                    <div class="col-md-11">
                                        <div class="team-hori-card p-4">
                                            <div class="team-card-inner">
                                                <div class="row p-md-4 p-3">
                                                    <div class="col-lg-3 px-lg-4 team-img-m">
                                                       <div class="img-bg text-center ">
                                                        <img src="frontend/images/team-member/ajay.png" alt="" class="w-100 ">
                                                       </div>
                                                    </div>

                                                    <div class="col-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-5">
                                                  <div class="detail-box px-lg-4">
                                                    <span class="team-member-name pt-2">Ajay Aggarwal</span>
                                                    <span class="team-member-desig py-1">Serial Entrepreneur</span>
                                                    <p class="team-member-details">Ajay Aggarwal, the catalyst behind the Go-Auto group, is a serial entrepreneur with a passion for Automobile and E-commerce Distribution. With an exceptional track record, Go-Auto is the largest distributor of Electric Vehicles in India.</p>
                                                  </div>
                                                    </div>

                                                    <div class="col-lg-4  px-lg-4 team-img-m">
                                                        <div class="">
                                                            <div class="team-contact-strip px-sm-3 px-1 py-2 mt-3">
                                                                <span> <i class="flaticon-phone text-black mx-1"></i></span> <a
                                                                    href="tel:919930777453"> +91-9930777453</a>
                                                            </div>
                                                        </div>
                                                        <div class=" mt-3">
                                                            <div class="team-contact-strip px-sm-3 px-1 py-2">
                                                                <span> <i class="flaticon-comment mx-1 email-icon "></i></span><a
                                                                    href="mailto:vikas@driveo.in" tabindex="0"
                                                                    class="mx-1">vikas@driveo.in</a>
                                                            </div>
                                                        </div>
                                                        <div class=" mt-3">
                                                            <div class="team-contact-strip px-sm-3 px-2 py-2">
                                                                <span> <i class="flaticon-route text-black mx-1"></i></span><span
                                                                    class="mx-1 text-black">A-231, Okhla Phase 1, New Delhi-110020</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                 <!-- featured-thumbnail end-->

                                </div><!-- featured-imagebox -->
                            </div>



                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <!-- featured-thumbnail -->
                               <div class="row justify-content-center py-5">
                                <div class="col-md-11">
                                    <div class="team-hori-card p-4">
                                        <div class="team-card-inner">
                                            <div class="row p-md-4 p-3">
                                                <div class="col-lg-3 px-lg-4 team-img-m-vikas">
                                                   <div class="img-bg text-center p-4">
                                                    <img src="frontend/images/services/v-j.png" alt="" class="w-100 ">
                                                   </div>
                                                </div>

                                                <div class="col-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-5">
                                              <div class="detail-box px-lg-3">
                                                <span class="team-member-name pt-2">Vikas Jain</span>
                                                <span class="team-member-desig py-1">The Visionery</span>

                                                <p class="team-member-details">Vikas Jain, our visionary, is equipped with an Executive Education from Harvard Business School and an MBA from IMT-Ghaziabad. With an impressive 19 year track record, he has played a pivotal role in successfully building and scaling the Auto Loans, SME and Leasing portfolios in Mahindra Finance.</p>
                                              </div>
                                                </div>

                                                <div class="col-lg-4  px-lg-4 team-img-m-vikas">
                                                    <div class="">
                                                        <div class="team-contact-strip px-sm-3 px-1 py-2 mt-3">
                                                            <span> <i class="flaticon-phone text-black mx-1"></i></span> <a
                                                                href="tel:919930777453"> +91-9930777453</a>
                                                        </div>
                                                    </div>
                                                    <div class=" mt-3">
                                                        <div class="team-contact-strip px-sm-3 px-1 py-2">
                                                            <span> <i class="flaticon-comment mx-1 email-icon "></i></span><a
                                                                href="mailto:vikas@driveo.in" tabindex="0"
                                                                class="mx-1">vikas@driveo.in</a>
                                                        </div>
                                                    </div>
                                                    <div class=" mt-3">
                                                        <div class="team-contact-strip px-sm-3 px-2 py-2">
                                                            <span> <i class="flaticon-route text-black mx-1"></i></span><span
                                                                class="mx-1 text-black">A-231, Okhla Phase 1, New Delhi-110020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                             <!-- featured-thumbnail end-->

                            </div><!-- featured-imagebox -->


                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- featured-thumbnail -->
                           <div class="row justify-content-center py-5">
                            <div class="col-md-11">
                                <div class="team-hori-card p-4">
                                    <div class="team-card-inner">
                                        <div class="row p-md-4 p-3">
                                            <div class="col-lg-3 px-lg-4 team-sami">
                                               <div class="img-bg text-center p-4">
                                                <img src="frontend/images/services/s-math.png" alt="" class="w-100 ">
                                               </div>
                                            </div>

                                            <div class="col-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-5">
                                          <div class="detail-box px-lg-3">
                                            <span class="team-member-name pt-2">Samira Mathews</span>
                                            <span class="team-member-desig py-1">Manager</span>

                                            <p class="team-member-details">Samira Mathews, with a notable background featuring esteemed companies like Mahindra, ICICI, Sony, and an MBA from SIBM, brings to the table a wealth of experience in people-management and organizational development.
                                            </p>
                                          </div>
                                            </div>

                                            <div class="col-lg-4  px-lg-4 team-sami">
                                                <div class="">
                                                    <div class="team-contact-strip px-sm-3 px-1 py-2 mt-3">
                                                        <span> <i class="flaticon-phone text-black mx-1"></i></span> <a
                                                            href="tel:919930777453"> +91-9930777453</a>
                                                    </div>
                                                </div>
                                                <div class=" mt-3">
                                                    <div class="team-contact-strip px-sm-3 px-1 py-2">
                                                        <span> <i class="flaticon-comment mx-1 email-icon "></i></span><a
                                                            href="mailto:vikas@driveo.in" tabindex="0"
                                                            class="mx-1">vikas@driveo.in</a>
                                                    </div>
                                                </div>
                                                <div class=" mt-3">
                                                    <div class="team-contact-strip px-sm-3 px-2 py-2">
                                                        <span> <i class="flaticon-route text-black mx-1"></i></span><span
                                                            class="mx-1 text-black">A-231, Okhla Phase 1, New Delhi-110020</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                         <!-- featured-thumbnail end-->

                        </div><!-- featured-imagebox -->


                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- featured-thumbnail -->
                           <div class="row justify-content-center py-5">
                            <div class="col-md-11">
                                <div class="team-hori-card p-4">
                                    <div class="team-card-inner">
                                        <div class="row p-md-4 p-3">
                                            <div class="col-lg-3  team-img-m-abhi">
                                               <div class="img-bg text-center p-xl-5">
                                                <img src="frontend/images/services/suit.png" alt="" class=" w-100 text-center mx-auto">
                                               </div>
                                            </div>

                                            <div class="col-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-5">
                                          <div class="detail-box px-lg-3">
                                            <span class="team-member-name pt-2">Abhishek Sikka</span>
                                            <span class="team-member-desig py-1">Tech Virtuoso</span>

                                            <p class="team-member-details">Abhishek Sikka, our tech virtuoso, has over 14 years of software wizardry under his belt. He has spent 6 remarkable years at Ather Energy, playing a pivotal role in constructing the technology stack that drives both business operations and products for the EV mobility ecosystem.</p>
                                          </div>
                                            </div>

                                            <div class="col-lg-4  px-lg-4 team-img-m-abhi">
                                                <div class="">
                                                    <div class="team-contact-strip px-sm-3 px-1 py-2 mt-3">
                                                        <span> <i class="flaticon-phone text-black mx-1"></i></span> <a
                                                            href="tel:919930777453"> +91-9930777453</a>
                                                    </div>
                                                </div>
                                                <div class=" mt-3">
                                                    <div class="team-contact-strip px-sm-3 px-1 py-2">
                                                        <span> <i class="flaticon-comment mx-1 email-icon "></i></span><a
                                                            href="mailto:vikas@driveo.in" tabindex="0"
                                                            class="mx-1">vikas@driveo.in</a>
                                                    </div>
                                                </div>
                                                <div class=" mt-3">
                                                    <div class="team-contact-strip px-sm-3 px-2 py-2">
                                                        <span> <i class="flaticon-route text-black mx-1"></i></span><span
                                                            class="mx-1 text-black">A-231, Okhla Phase 1, New Delhi-110020</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                         <!-- featured-thumbnail end-->

                        </div><!-- featured-imagebox -->

                    </div>
                         </div><!-- row end -->
                    </div>
                </section>
                     --}}

        <section class="   mt-xl-0-mission">
            <div class="container position-relative">

                <div class="row px-xl-5 fadein">
                    <h3 class=" text-center about-team-t">Our team</h3>
                    <div class="row justify-content-center mt-3 mx-auto">
                        <div class="col-xl-10">
                            <p class="team-text px-0">Driveo accelerates ahead with a powerhouse team! Our lineup of
                                seasoned professionals <br>brings expertise from the Automobile, <span
                                    class="text-capitalize">E</span>-commerce, and Financial
                                services sectors.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center px-3 mt-20 d-contents-sm ">
                        <span class="meet-drive-force-title mx-auto b-radius-14"> Meet Our Driving Forces</span>
                    </div>

                </div>
            </div>
        </section>

        {{-- <section class="px-xl-5 pt-40">
                        <div class="px-xl-3">
                        <div class="row px-xl-5 ">
                            <div class="col-xl-3 col-md-6 px-sm-2 px-4">
                                <div class="team-hori-card p-3">
                                    <div class="team-card-inner">
                                        <div class="row p-md-4 p-3">
                                            <div class=" px-5 pt-md-0 pt-5 team-sami">
                                               <div class="img-bg text-center ">
                                                <img src="frontend/images/team-member/ajay.png" alt="" class="w-100 ">
                                               </div>
                                            </div>

                                            <div class="detail-box">
                                                <span class="team-member-name py-4">Ajay Aggarwal</span>
                                                <p class="team-member-details text-lowercase">Ajay Aggarwal, the catalyst behind the Go-Auto group, is a serial entrepreneur with a passion for Automobile and E-commerce Distribution. With an exceptional track record, Go-Auto is the largest distributor of Electric Vehicles in India.</p>
                                              </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 px-sm-2 px-4">
                                    <div class="team-hori-card p-3">
                                        <div class="team-card-inner">
                                            <div class="row p-md-4 p-3">
                                                <div class=" px-5 pt-md-0 pt-5 team-sami">
                                                   <div class="img-bg text-center p-3 ">
                                                    <img src="frontend/images/services/v-j.png" alt="" class="w-100 ">
                                                   </div>
                                                </div>

                                                <div class="detail-box">
                                                    <span class="team-member-name py-4">Vikas Jain</span>


                                                    <p class="team-member-details text-lowercase">Vikas Jain, our visionary, is equipped with an Executive Education from Harvard Business School and an MBA from IMT-Ghaziabad. With an impressive 19 year track record, he has played a pivotal role in successfully building and scaling the Auto Loans, SME and Leasing portfolios in Mahindra Finance.</p>
                                                  </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-3 col-md-6 px-sm-2 px-4">
                                        <div class="team-hori-card p-3">
                                            <div class="team-card-inner">
                                                <div class="row p-md-4 p-3">
                                                    <div class=" px-5 pt-md-0 pt-5 team-sami">
                                                       <div class="img-bg text-center p-3">
                                                        <img src="frontend/images/services/s-math.png" alt="" class="w-100 ">
                                                       </div>
                                                    </div>


                                                  <div class="detail-box ">
                                                    <span class="team-member-name py-4">Samira Mathews</span>
                                                    <p class="team-member-details text-lowercase">Samira Mathews, with a notable background featuring esteemed companies like Mahindra, ICICI, Sony, and an MBA from SIBM, brings to the table a wealth of experience in people-management and organizational development.
                                                    </p>
                                                  </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-md-6 px-sm-2 px-4">
                                            <div class="team-hori-card p-3">
                                                <div class="team-card-inner">
                                                    <div class="row p-md-4 p-3">
                                                        <div class=" px-5 pt-md-0 pt-5 team-sami">
                                                           <div class="img-bg text-center ">
                                                            <img src="frontend/images/services/suit.png" alt="" class="w-100 ">
                                                           </div>
                                                        </div>

                                                      <div class="detail-box">
                                                        <span class="team-member-name py-4">Abhishek Sikka</span>

                                                        <p class="team-member-details text-lowercase">Abhishek Sikka, our tech virtuoso, has over 14 years of software wizardry under his belt. He has spent 6 remarkable years at Ather Energy, playing a pivotal role in constructing the technology stack that drives both business operations and products for the EV mobility ecosystem.</p>
                                                      </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                            </div></div>
                     </section> --}}


        <section class="  pt-10 mt_10 clearfix px-xl-5 mt-xl-0-mission">
            <div class="container px-xl-5">

                <div class="row slick_slider res-1199-mr-0 res-1199-ml-0 ml_100 mr_100 justify-content-center"
                    data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "autoplaySpeed":4000, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1199,"settings":{"slidesToShow": 1}}, {"breakpoint":992,"settings":{"slidesToShow": 2}}, {"breakpoint":767,"settings":{"slidesToShow": 1}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                    <div class="prt-box-col-wrapper ">
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <!-- featured-thumbnail -->
                            <div class="row justify-content-center py-md-5 py-3">
                                <div class="col-md-11">
                                    <div class="team-hori-card p-4">
                                        <div class="team-card-inner">
                                            <div class="row p-md-4 p-3 ">
                                                <div
                                                    class="col-lg-3 px-lg-4 team-img-m-vikas d-flex align-items-center mx-auto">
                                                    <div class="img-bg text-center p-4 mx-auto">
                                                        <img src="frontend/images/services/v-j.png" alt=""
                                                            class="w-100 ">
                                                    </div>
                                                </div>

                                                <div class="col-lg-9 mt-lg-0 mt-5 pt-lg-4 pt-5 d-flex align-items-center">
                                                    <div class="detail-box px-lg-3 pt-4 text-lg-start text-center">
                                                        <span
                                                            class="team-member-name pt-5 text-lg-start text-center ">Vikas
                                                            <span class="">Jain</span></span>


                                                        <p class="team-member-details pt-3 text-lowercase"><span
                                                                class="text-capitalize">Vikas Jain</span>, our
                                                            visionary, is equipped with an Executive Education from <span
                                                                class="text-capitalize">Harvard
                                                                Business School</span> and an <span
                                                                class="text-uppercase">MBA</span> from <span
                                                                class="text-capitalize">IMT-Ghaziabad</span>. <span
                                                                class="text-capitalize">With</span> an impressive 19
                                                            year track record, he has played a pivotal role in successfully
                                                            building and scaling the Auto Loans, <span
                                                                class="text-uppercase">SME</span> and Leasing portfolios in
                                                            <span class="text-capitalize">Mahindra Finance.</span>
                                                        </p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- featured-thumbnail end-->

                        </div>
                    </div>

                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <!-- featured-thumbnail -->
                        <div class="row justify-content-center py-md-5 py-3">
                            <div class="col-md-11">
                                <div class="team-hori-card p-4">
                                    <div class="team-card-inner">
                                        <div class="row p-md-4 p-3">
                                            <div class="col-lg-3 px-lg-4 team-sami d-flex align-items-center mx-auto">
                                                <div class="img-bg text-center p-4 mx-auto">
                                                    <img src="frontend/images/services/s-math.png" alt=""
                                                        class="w-100 ">
                                                </div>
                                            </div>

                                            <div class="col-lg-9 mt-lg-0 mt-5 pt-lg-0 pt-5 d-flex align-items-center">
                                                <div class="detail-box px-lg-3 pt-4 text-lg-start text-center">
                                                    <span class="team-member-name pt-5 text-lg-start text-center ">Samira
                                                        <span class="">Mathews</span></span>


                                                    <p class="team-member-details pt-3 text-lowercase"><span
                                                            class="text-capitalize">Samira Mathews,</span> with
                                                        a notable background featuring esteemed companies like <span
                                                            class="text-capitalize">Mahindra,
                                                            ICICI, Sony,</span> and an <span
                                                            class="text-uppercase">MBA</span> from <span
                                                            class="text-uppercase">SIBM,</span> brings to the table a
                                                        wealth of
                                                        experience in people-management and organizational development.
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- featured-thumbnail end-->

                    </div><!-- featured-imagebox -->


                    <div class="featured-imagebox featured-imagebox-portfolio style1">
                        <!-- featured-thumbnail -->
                        <div class="row justify-content-center py-md-5 py-3">
                            <div class="col-md-11">
                                <div class="team-hori-card p-4">
                                    <div class="team-card-inner">
                                        <div class="row p-md-4 p-3 pt-md-3">
                                            <div
                                                class="col-lg-3 justify-content-center px-lg-4 text-center mx-auto  team-abhi d-flex align-items-center">
                                                <div class="img-bg text-center p-25-33 text-center ">
                                                    <img src="frontend/images/services/abhishek-sikka-199.png"
                                                        alt="" class="w-100 mx-auto w-135-mobile">
                                                </div>
                                            </div>

                                            <div class="col-lg-9 mt-lg-0 mt-5  pt-5 d-flex align-items-center">
                                                <div class="detail-box px-lg-3 pt-4 text-lg-start text-center">
                                                    <span class="team-member-name pt-5 t abhishek-text">Abhishek <span
                                                            class="">sikka</span></span>


                                                    <p class="team-member-details pt-3 text-lowercase"><span
                                                            class="text-capitalize">Abhishek Sikka</span>, our
                                                        tech virtuoso, has over 14 years of software wizardry under his
                                                        belt. <span class="text-capitalize">He</span> has spent 6
                                                        remarkable years at <span class="text-capitalize">Ather Energy,
                                                        </span> playing a
                                                        pivotal role in constructing the technology stack that drives both
                                                        business operations and products for the <span
                                                            class="text-uppercase">EV</span> mobility ecosystem.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- featured-thumbnail end-->

                    </div><!-- featured-imagebox -->

                </div>
            </div><!-- row end -->
    </div>
    </section>


    <section class="   mt-10 mt-0for-sm mt-for1116">
        <div class="container position-relative ">

            <div class="row px-xl-5 fadein ">

                <div class="row justify-content-center  mx-auto">
                    <div class="col-xl-10">
                        <p class="team-text px-0">Together, We Form The Unbeatable Driving Force Behind <span
                                class="text-capitalize">Driveo</span>, Fueling Our
                            Mission To Revolutionize Sustainable Mobility.<br> <span class="text-capitalize">Join</span> Us
                            As We Embark On An Exhilarating Journey
                            Towards A Greener Future!</p>
                    </div>
                </div>


            </div>
        </div>
    </section>


    {{-- <div class="prt-box-col-wrapper col-lg-3 col-md-6 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ url('frontend/images/services/fleet-img.png') }}"
                                            alt="image">
                                        <div class="offer-card-text">
                                            <p class="offer-card-p-text pt-sm-4 pt-2"><a
                                                    href="{{ url('/our-offerings') }}">Fleet Management Services</a></p>
                                            <div class="text-center pb-2">
                                                <a href="{{ url('/our-offerings') }}" class="offer-btn">Learn more</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-thumbnail end-->

                                </div><!-- featured-imagebox -->
                            </div> --}}
    {{-- <div class="prt-box-col-wrapper col-lg-3 col-md-6 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid"
                                            src="{{ url('frontend/images/services/charging-img.png') }}" alt="image">
                                        <div class="offer-card-text">
                                            <p class="offer-card-p-text pt-4"><a
                                                    href="{{ url('/our-offerings') }}">Charging and Parking</a></p>
                                            <div class="text-center pb-2">
                                                <a href="{{ url('/our-offerings') }}" class="offer-btn">Learn more</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-thumbnail end-->

                                </div><!-- featured-imagebox -->
                            </div> --}}
    {{-- <div class="prt-box-col-wrapper col-lg-3 col-md-6 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ url('frontend/images/services/mobi.png') }}"
                                            alt="image">
                                        <div class="offer-card-text">
                                            <p class="offer-card-p-text pt-sm-4 pt-2"><a
                                                    href="{{ url('/our-offerings') }}">Fleet Management Software</a></p>
                                            <div class="text-center pb-2">
                                                <a href="{{ url('/our-offerings') }}" class="offer-btn">Learn more</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-thumbnail end-->

                                </div><!-- featured-imagebox -->
                            </div> --}}
    {{-- <div class="prt-box-col-wrapper col-lg-3 col-md-6 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio style1">
                                    <!-- featured-thumbnail -->
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ url('frontend/images/services/anyletics.png') }}"
                                            alt="image">
                                        <div class="offer-card-text">
                                            <p class="offer-card-p-text pt-4"><a href="{{ url('/our-offerings') }}">Fleet
                                                    Analytics</a></p>
                                            <div class="text-center pb-2">
                                                <a href="{{ url('/our-offerings') }}" class="offer-btn">Learn more</a>
                                            </div>
                                        </div>
                                    </div><!-- featured-thumbnail end-->

                                </div><!-- featured-imagebox -->
                            </div> --}}




    {{-- <section class=" mt-10 pb-70">
        <div class="conatiner ">
            <div class="row px-xl-5 px-3">
                <div class="col py-3 px-xl-5">
                    <div class="team-white-box ">
                        <div class="row py-3 px-5">
                            <div class="col-lg-9 pt-3">
                                <p class="city-text pt-4 mt-4">Together, We Form The Unbeatable Driving Force Behind
                                    Driveo,<br>
                                    Fueling Our Mission To Revolutionize Sustainable Mobility.<br>
                                    Join Us As We Embark On An Exhilarating Journey Towards A<br> Greener Future!</p>
                            </div>
                            <div class="col-lg-3 text-center">
                                <img src="frontend/images/services/city.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    </div>

    <section class="mt-60 oem-title-mt pb-50 fadein mt-xl-0-oem">
        <h3 class="oem-title pb-30 text-center">Our preferred OEMs</h3>
        <div class="container px-xl-1">
            <div class="row justify-content-center ">
                <div class="col-xl-9 ">
                    <div class="row justify-content-center">

                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://piaggio-cv.co.in/apeelectrik/" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center py-sm-plag">
                                        <img src="{{ url('frontend/images/oem/piagglo.png') }}" alt="piaggio-cv"
                                            class="m-2 text-center mx-auto">
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://www.altigreen.com/" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center py-sm-altigreen">
                                        <img src="{{ url('frontend/images/oem/altigreen.png') }}" alt="altigreen"
                                            class="m-2 text-center mx-auto altigreen-size">
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://www.eulermotors.com/" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center py-sm-altigreen">
                                        <img src="{{ url('frontend/images/oem/euler.png') }}" alt="euler"
                                            class="m-2 text-center mx-auto">
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="row justify-content-center  mt-row-xl-5 ">
                <div class="col-xl-9 ">
                    <div class="row justify-content-center">

                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://mahindralastmilemobility.com/" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center">
                                        <img src="{{ url('frontend/images/oem/new-mahindra-.png') }}" alt="mahindra"
                                            class="m-2 text-center mx-auto">
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://ev.tatamotors.com/" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center">
                                        <img src="{{ url('frontend/images/oem/new-tata.png') }}" alt="tatamotors"
                                            class="m-2 text-center mx-auto">
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://omegaseikimobility.com/" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center">
                                        <img src="{{ url('frontend/images/oem/osm.png') }}" alt="omegaseikimobility"
                                            class="m-2 text-center mx-auto">
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein  text-xl-start d-xl-none ">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://www.citroen.in/new-ec3" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center">
                                        <img src="{{ url('frontend/images/oem/citro.png') }}" alt="citroen"
                                            class="m-2 text-center mx-auto">
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center  mt-row-xl-5 ">
                <div class="col-xl-9 ">
                    <div class="row ">

                        <div class="col-xl-4 col-md-6 mt-after-md-scr fadein  text-xl-start d-xl-block d-none">
                            <div class="oem-out-box-plagglo p-3 hover-oem">
                                <a href="https://www.citroen.in/new-ec3" target="_blank">
                                    <div class="oem-in-box-plagglo py-5 px-3 text-center">
                                        <img src="{{ url('frontend/images/oem/citro.png') }}" alt="citroen"
                                            class="m-2 text-center mx-auto">
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>

    </div><!--site-main end-->
@endsection
<style>
    html,
    body {
        overflow-x: hidden;
    }

    .white-icon-circle img {
        padding-top: 7px !important;
    }
</style>
