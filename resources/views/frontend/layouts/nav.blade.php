    <!--header start-->
    <header id="masthead" class="header prt-header-style-01">
        {{-- <!-- topbar -->
        <div class="top_bar bg-base-dark clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="top_bar_contact_item">
                                    <div class="top_bar_icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="top_bar_content">24 Tech Roqad st Ny 10023</div>
                                </div>
                                <div class="top_bar_contact_item">
                                    <div class="top_bar_icon"><i class="flaticon-clock-1"></i></div>
                                    <div class="top_bar_content">Mon-Sat: 9am to 6pm</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-info">
                                    <div class="top_bar_contact_item prt-highlight-right">
                                        <div class="top_bar_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="top_bar_content"><a
                                                href="mailto:info@gmail.com">support@themetechmount.com</a>
                                        </div>
                                    </div>
                                    <div class="top_bar_content-main">Follow On :</div>
                                    <div class="top_bar_contact_item top_bar_social ml-auto p-0">
                                        <ul class="social-icons d-flex">
                                            <li>
                                                <a class="prt-social-facebook"
                                                    href="https://www.facebook.com/themetechMount18" rel="noopener"
                                                    aria-label="facebook"><i class=" fa fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="prt-social-twitter" href="https://twitter.com/themetechmount"
                                                    rel="noopener" aria-label="twitter"><i
                                                        class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="prt-social-linkedin"
                                                    href="https://www.linkedin.com/company/themetech-mount/"
                                                    rel="noopener" aria-label="google"><i
                                                        class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- topbar end -->
        <!-- site-header-menu -->
        <div id="site-header-menu" class="site-header-menu bg-base-white">
            <div class="site-header-menu-inner prt-stickable-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <!--site-navigation -->
                            <div class="site-navigation d-flex flex-row  justify-content-between align-items-center">
                                <!-- site-branding -->
                                <div class="site-branding ">
                                    <h1 class="">
                                        <a class="home-link" href="{{ url('') }}" title="Driveo" rel="home">
                                            <img id="logo-img " height="35" width="155"
                                                class="img-fluid auto_size mt-3 navbar-img"
                                                src="/frontend/images/logo.png" alt="logo-img">
                                        </a>

                                    </h1>
                                </div><!-- site-branding end -->
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile " id="menu">
                                    <ul class="menu">
                                        <li
                                            class="mega-menu-item {{ URL::current() == route('frontend.index') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.index') }}">
                                                Home
                                            </a>
                                        </li>
                                        <li
                                            class="mega-menu-item {{ URL::current() == route('frontend.about') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.about') }}">
                                                About Us
                                            </a>
                                        </li>


                                        <li
                                            class="mega-menu-item {{ URL::current() == route('frontend.why-us') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.why-us') }}">
                                                Why Us
                                            </a>
                                        </li>
                                        <li
                                            class="mega-menu-item {{ URL::current() == route('frontend.our-offerings') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.our-offerings') }}">
                                                Our Offerings
                                            </a>
                                        </li>
                                        <li
                                            class="mega-menu-item {{ URL::current() == route('frontend.faq') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.faq') }}">
                                                FAQ's
                                            </a>
                                        </li>

                                        <li
                                            class="mega-menu-item {{ URL::current() == route('frontend.news-blogs') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.news-blogs') }}">
                                                News & Blogs
                                            </a>
                                        </li>


                                        <li
                                            class="mega-menu-item {{ URL::current() == route('frontend.gallery') ? 'active' : '' }}">
                                            <a href="{{ route('frontend.gallery') }}">
                                             Gallery
                                            </a>
                                        </li>


                                        {{-- <li
                                    class="mega-menu-item {{ URL::current() == route('frontend.our-team') ? 'active' : '' }}">
                                    <a href="{{ route('frontend.our-team') }}">
                                        Our Team
                                    </a>
                                </li> --}}


                                        <li class="mega-menu-item">
                                            <a href="{{ route('frontend.contact') }}"> <button class="contact-us-btn"
                                                    href="">
                                                    Contact Us
                                                </button></a>

                                        </li>
                                    </ul>
                                </nav><!-- menu end -->
                                {{-- <div class=" d-flex flex-row">
                                    <div class="widget_info d-flex flex-row align-items-center justify-content-end">
                                        <div class="widget_icon text-base-skin">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="widget_content">
                                            <p class="widget_desc">Call Us</p>
                                            <h3 class="widget_title">
                                                <a href="tel:919930777453">
                                                    +91-9930777453
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- site-navigation end--> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
    </header>
    <!--header end-->
