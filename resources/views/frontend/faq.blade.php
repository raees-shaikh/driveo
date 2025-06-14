@extends('frontend.layouts.app')
@section('title', 'FAQs - ')
@section('content')


    <!-- page-title -->
    <div class="prt-page-title-row bg-img-faq">
        <div class="prt-page-title-row-inner-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">FAQ's</h2>
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
    <div class="site-main">


        <!-- padding_bottom_zero-section -->
        <section class="prt-row faq-section-2 bg-layer-equal-height clearfix px-xl-4 pt-faq-lg">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 ">
                        <!-- section-title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header mb-0-for-lg">
                                <h2 class="title faq--title">Frequently asked questions?</h2>
                            </div>
                        </div><!-- section-title end -->
                    </div>

                    <div class="col-lg-5 px-lg-1 px-4 mt-lg-0 mt-4  ">
                        <!-- section-title -->

                        <input type="text" id="searchInput" name="search" placeholder="Search your question here for..">
                        {{-- <button class="custom-search-btn">Search</button> --}}

                        <div class="toggle" id="toggle1">
                            <!-- ... toggle content ... -->
                        </div>

                    </div>
                </div>




                <div class="row px-md-5 px-3">
                    {{-- <div class="col-lg-6">
                            <div class="col-bg-img-two prt-bg prt-col-bgimage-yes">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                <div class="layer-content h-100 p-160">
                                    <div class="d-flex justify-content-center align-items-center h-100">
                                        <div class="prt-play-icon-btn">
                                            <div class="prt-play-icon-animation">
                                                <a href="https://youtu.be/7e90gBu4pas" target="_self" class="prt_prettyphoto">
                                                    <div class="prt-icon prt-icon_element-fill prt-icon_element-color-skincolor prt-icon_element-size-md prt-icon_element-style-rounded">
                                                        <i class="fa fa-play"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <div class="col">
                        <div class="bg-base-white pb-20 pl-5 res-991-pl-0 res-991-mt-30">
                            <div class="accordion mt_5">
                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic  style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title "><a href="#" class="">What benefits do electric
                                            vehicles offer over CNG vehicles?</a></div>
                                    <div class="toggle-content ">
                                        <p>Electric vehicles (EVs) have several advantages over compressed natural gas (CNG)
                                            vehicles. Some key benefits include zero tailpipe emissions, contributing to
                                            cleaner air and reduced greenhouse gases. EVs are more energy-efficient,
                                            resulting in lower energy consumption per mile. They offer lower operating costs
                                            due to the cheaper electricity compared to CNG fuel. Additionally, EVs have
                                            fewer moving parts, leading to reduced maintenance expenses. Home charging
                                            convenience eliminates the need for frequent fueling station visits. Lastly,
                                            regenerative braking in EVs enhances energy efficiency by recapturing energy
                                            during braking.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic  style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title "><a href="#">What categories of electric vehicles are
                                            available for leasing?</a></div>
                                    <div class="toggle-content">
                                        <p>Driveo provides leasing services for a range of electric vehicles (EVs),
                                            encompassing 3-wheelers and 4-wheelers, with a particular focus on vehicles
                                            required for commercial usage.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic  style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title "><a href="#">How does leasing differ from financing?
                                        </a></div>
                                    <div class="toggle-content">
                                        <p>Financing and Leasing are two different ways to acquire a vehicle, with the
                                            primary difference being ownership of the vehicle. With financing, the
                                            individual obtains a loan to buy the vehicle and becomes its owner after
                                            completing the loan payments. Conversely, in leasing, the individual pays for
                                            using the vehicle during a specified period and returns it at the lease term's
                                            end. </p>
                                        <p>Vehicle leasing offers lower monthly payments, minimal down payment, lower repair
                                            costs, potential tax benefits for businesses, no resale hassles, flexibility in
                                            lease terms, preservation of capital, avoidance of depreciation risk, and risk
                                            mitigation through evaluating vehicle performance before committing to
                                            ownership. </p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic  style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title "><a href="#">What is operating lease in case of
                                            vehicles?</a></div>
                                    <div class="toggle-content">
                                        <p>An Operating Lease is a type of lease agreement where the lessee (the entity
                                            leasing the vehicle) obtains the right to use the vehicle for a specific period,
                                            intended for use by the lessee or its customers. The leasing company maintains
                                            legal ownership of the vehicles but grants the right of vehicle usage to the
                                            lessee for the duration of the contract period. At the conclusion of the lease
                                            term, the lessee has an option to buy the Vehicle.</p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic  style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">How to get a lease from <span
                                                class="text-capitalize">Driveo</span>?</a></div>
                                    <div class="toggle-content">
                                        <p>Send us a message via the contact form and we will get in touch with you to
                                            explore the possibility of partnering.</p>
                                        <p>To get on boarded, here is the list of documents we need:</p>
                                        <ul>
                                            <li><b>Pre-sanction stage:</b> Company and Director KYC documents; incorporation
                                                documents; ownership structure; bank statements ; P&L accounts ; annual
                                                report / ITRs ( <i>audited duly signed for the last 2 years with notes to
                                                    accounts</i> ); </li>
                                            <li><b>Post-sanction stage:</b> Master Lease Agreement; Board Resolution / Power
                                                of Attorney; Personal Guarantee; conditional documents ( <i>if any</i> ).
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- toggle end -->


                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">How does <span
                                                class="text-capitalize">Driveo's</span> leasing process work?</a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Driveo acquires the vehicle as per the lessee's specifications and leases it for
                                            an agreed duration during which the lessee pays a fixed monthly lease rental, as
                                            mutually decided. For more information on how the lease process with <span
                                                class="text-capitalize">Driveo</span>
                                            works, please click on the following link: ( <a href="{{ url('/') }}">How
                                                it works</a> )</p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">Under whose name will the vehicle be
                                            registered?</a></div>
                                    <div class="toggle-content">
                                        <p>The leased vehicle will be registered under the name of the Driveo Electric
                                            Mobility Pvt Ltd, adhering to the regulations set forth in the Motor Vehicle
                                            Act. </p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">What are the possible contract periods?
                                        </a></div>
                                    <div class="toggle-content">
                                        <p>It all depends on your needs: you can select any tenure upto 5 Years </p>
                                    </div>
                                </div><!-- toggle end -->


                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">How much security deposit is charged?</a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>The security deposit amount charged can vary depending on several factors,
                                            including the the type of vehicle being leased, the lessee's creditworthiness,
                                            and the overall terms of the lease agreement.</p>
                                        <p>Typically, the security deposits can vary between the equivalent of two months'
                                            lease rentals to approximately 20% of the vehicle's value.</p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">Is the security deposit refundable?</a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>At the end of the lease term, assuming the lessee has fulfilled all the lease
                                            obligations, returned the vehicle in good condition within the allowed mileage
                                            limits, and paid any outstanding fees or charges, the lessor will typically
                                            refund the security deposit to the lessee. </p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">What is the expected timeframe for the
                                            delivery of the EVs, after the booking amount is paid?
                                        </a></div>
                                    <div class="toggle-content">
                                        <p>Delivery of the EV’s will depend on the choice of Vehicle OEM and quantity
                                            required. Generally, it takes us 10-15 days to deliver the vehicle after the
                                            signing of lease agreement.</p>
                                    </div>
                                </div><!-- toggle end -->
                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">What are the inclusions in my lease? </a>
                                    </div>
                                    <div class="toggle-content">
                                        <p>Inclusion in the lease depends on the services chosen by customer. Other than
                                            Vehicle, the following can be included in your lease :</p>
                                        <ul>
                                            <li> Insurance Management</li>
                                            <li>Fleet Maintenance</li>
                                            <li>Fleet Management and Tracking</li>
                                            <li>Damage Repairs</li>
                                            <li>24/7 Emergency Road Side Assistance</li>
                                            <li>Replacement Vehicle</li>
                                            <li>Other services as mentioned in our product offerings</li>
                                        </ul>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#"> When does the lease amount need to be
                                            paid?</a></div>
                                    <div class="toggle-content">
                                        <p>The lease amount for the vehicles will need to be paid on the pre-determined date
                                            of each month, as stipulated in the Master Lease Agreement</p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#"> Apart from the fixed lease amount, what
                                            other charges may apply?</a></div>
                                    <div class="toggle-content">
                                        <p>Apart from the fixed lease amount, the additional charges that may be incurred
                                            are excess usage fees for exceeding the monthly permitted kilometer limit as
                                            well as charges for availing of extra services like maintenance, charging, and
                                            parking.</p>
                                    </div>
                                </div><!-- toggle end -->


                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">What additional services does <span
                                                class="text-capitalize">Driveo</span>
                                            provide? </a></div>
                                    <div class="toggle-content">
                                        <p> Driveo offers comprehensive vehicle leasing services, including insurance and
                                            maintenance for the leased vehicles. Additionally, we provide optional charging
                                            and parking services tailored specifically for electric vehicles. We also offer
                                            Fleet Management and Fleet Analytics services to ensure your fleet operates at
                                            its peak performance and efficiency. Please click on the following link to know
                                            more about the wide array of services we offer that cater to all aspects of the
                                            leased vehicles : ( <a href="{{ url('/our-offerings') }}">Our Offerings</a> )
                                        </p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">What kind of after-sales service does <span
                                                class="text-capitalize">Driveo</span>
                                            provide?
                                        </a></div>
                                    <div class="toggle-content">
                                        <p>Driveo offers an all-encompassing range of after-sales services, which include
                                            repair and maintenance for all leased vehicles. The added provision of
                                            comprehensive insurance coverage and roadside assistance, ensures a stress-free
                                            experience in case of any problems.</p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#"> What happens at the end of the tenure of
                                            the lease?</a></div>
                                    <div class="toggle-content">
                                        <p>At the end of the lease period, the lessee can either return the vehicle, extend
                                            the lease, purchase the vehicle or upgrade to a new lease. The specific options
                                            available will depend on the terms of the lease agreement.</p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#">Will there be any option to purchase the
                                            vehicle? </a></div>
                                    <div class="toggle-content">
                                        <p>Certainly, you will be presented with the option to buy the vehicle at the end of
                                            the tenure. </p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic  style1 prt-toggle-title-bgcolor-grey searchable">
                                    <div class="toggle-title"><a href="#"> What is residual value <span
                                                class="text-uppercase">(RV)</span>?</a></div>
                                    <div class="toggle-content">
                                        <p>The residual value of a vehicle refers to the estimated value of the vehicle at
                                            the end of its lease term or useful life. It represents the expected worth of
                                            the vehicle after a certain period of use, depreciation, and wear and tear. The
                                            lease rentals are structured to ensure that the Lessee only pays only for the
                                            usage of the vehicle and not the residual value. It is determined depending on
                                            risk profile of asset, the kilometers and several factors that have an impact on
                                            it.</p>
                                    </div>
                                </div><!-- toggle end -->

                                <!-- toggle -->
                                <div
                                    class="searchable toggle prt-toggle_style_classic   style1 prt-toggle-title-bgcolor-grey">
                                    <div class="toggle-title"><a href="#"> Is it possible to terminate the lease
                                            before the predetermined tenure is completed?</a></div>
                                    <div class="toggle-content">
                                        <p>Yes, a lease can be concluded before its agreed-upon term by paying the
                                            termination charges. The lease agreement will detail the specific charges and
                                            terms associated with early termination.</p>
                                    </div>
                                </div><!-- toggle end -->





                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- padding_bottom_zero-section end -->
        {{--
            <section class="prt-row cta-section prt-bgimage-yes bg-img2 prt-bg bg-base-dark pt-85 pb-55 res-991-pb-35 clearfix">
                <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <!-- section title -->
                            <div class="section-title text-center">
                                <div class="title-header">
                                    <h3>Let’s drive the future</h3>
                                    <h2 class="title">There’s nothing like the fresh air of our <span class="text-base-skin text-decoration-underline"> electric </span> drive <span class="text-base-skin text-decoration-underline"> cars!</span></h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                </div>
            </section> --}}


    </div><!--site-main end-->


@endsection


@section('js')

    <script>
        /* By Jamal Hassouni*/

        // document.getElementById("value").addEventListener("keyup", filterSearch);
        // function filterSearch(){
        //    var value,name,profile,i;
        //    value = document.getElementById('value').value.toUpperCase();
        // profile = document.getElementsByClassName('profile');
        //   for(i=0;profile.length;i++){
        //     name = profile[i].getElementsByClassName('name');
        //     if(name[0].innerHTML.toUpperCase().indexOf(value) > -1){
        //       profile[i].style.display ="flex";
        //     }else{
        //       profile[i].style.display = "none";
        //     }
        //   }
        // }
        const searchInput = document.getElementById('searchInput');
        const toggleElements = document.querySelectorAll('.toggle'); // Get all toggle elements

        searchInput.addEventListener('input', () => {
            const query = searchInput.value.toLowerCase();

            toggleElements.forEach(toggle => {
                const toggleContent = toggle.textContent.toLowerCase();

                if (toggleContent.includes(query)) {
                    toggle.style.display = 'block'; // Show matching toggle element
                } else {
                    toggle.style.display = 'none'; // Hide non-matching toggle elements
                }
            });
        });
    </script>
@endsection
