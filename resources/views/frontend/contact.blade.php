@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')
    <div class="prt-page-title-row bg-img-contact-us">
        <div class="prt-page-title-row-inner-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Contact us</h2>
                        </div>
                        <div class="breadcrumb-wrapper-main">
                            <div class="container">
                                {{-- <div class="breadcrumb-wrapper-inner">
                                    <span>
                                        <a href="{{ url('/') }}" class="home">&nbsp;&nbsp;Home</a>
                                    </span>
                                    <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                    <span>Contact Us</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-for-991-50  map-size pt-0-991-contact-row contact-us clearfix">
        <div class="container">
            <div class="row prt-vertical_sep px-xl-5">
                <div class="col-lg-6 col-md-12 order-lg-1 order-2 mt--991-quick-contact">
                    <div class="section-title">
                        <div class="title-header">
                            <h3 class="text-primary cont-font ">Quick Contact</h3>
                        </div>
                    </div>

                    <div class="contact-box pb-50 pt-20 text-xl-start  text-center">
                        <div class="row p-xl-4 p-3">
                            <div class="col-xl-6">
                                <div class="d-xl-flex align-items-center">
                                    <span class="contact-icon-circle"><img
                                            src="{{ url('frontend/images/services/msg-icon.png') }}" alt=""></span>
                                    {{-- <span class="contact-t d-block py-2">E-Mail</span> --}}
                                    <span class="mx-3 d-xl-inline d-block pt-xl-0 pt-3"> <a
                                            href="mailto:contactus@driveo.in" class="contact-l">contactus@driveo.in
                                        </a></span>
                                </div>
                            </div>

                            <div class="col-xl-6 mt-card-767">
                                <div class="d-xl-flex align-items-center ">
                                    <span class="contact-icon-circle"> <img
                                            src="{{ url('frontend/images/services/mobi-icon.png') }}" alt=""></span>
                                    {{-- <span class="contact-t d-block py-2">Phone</span> --}}
                                    <span class="mx-3 d-xl-inline d-block pt-xl-0 pt-3"> <a href="tel:919930777453"
                                            class="contact-l">+91-9930777453</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="row px-xl-4 px-3 ">
                            <div class="col-xl-6 mt-md-0 mt-5 pt-md-0 pt-5">
                                <div class="d-xl-flex align-items-center">
                                    <span class="contact-icon-circle"> <img
                                            src="{{ url('frontend/images/services/office-icon.png') }}"
                                            alt=""></span>
                                    {{-- <span class="contact-t d-block py-2">Office</span> --}}
                                    <span class="contact-l mx-3 d-xl-inline d-block pt-xl-0 pt-3">A-231, Okhla Phase 1, New
                                        Delhi - 110020.</span>
                                </div>
                            </div>

                            <div class="col-xl-6 mt-md-0 mt-5 pt-md-0 pt-5">
                                <div class="d-xl-flex align-items-center">
                                    <span class="contact-icon-circle"> <img
                                            src="{{ url('frontend/images/services/wa.png') }}" alt=""></span>
                                    {{-- <span class="contact-t d-block py-2">Office</span> --}}
                                    <span class="contact-l mx-3 d-xl-inline d-block pt-xl-0 pt-3"> <a
                                            href="https://api.whatsapp.com/send?phone=919930777453"
                                            class=" px-4 mt-2 chat-now btn-block text-capitalize rounded-sub-btn submit prt-btn prt-btn-size-md prt-btn-shape-square prt-btn-style-fill prt-btn-color-skincolor "
                                            type="submit">Chat With Us</a></span>
                                </div>
                            </div>




                        </div>
                    </div>

                    <div id="google_map" class="google_map side-map  pb-50 px-xl-3 mt-30 px-0 py-from-991-767">
                        <div class="container px-0">
                            <div id="map" class="px-0">
                                {{-- <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5404230618797!2d-0.12174774859469174!3d51.5033006187238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sin!4v1629115262628!5m2!1sen!2sin"
                                    height="400"></iframe> --}}


                                {{-- <iframe class="map-h"
                                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3505.4880403274046!2d77.274591!3d28.525047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDMxJzMwLjIiTiA3N8KwMTYnMjguNSJF!5e0!3m2!1sen!2sin!4v1691475111464!5m2!1sen!2sin"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}


                                <iframe class="map-h"
                                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3505.4880403274046!2d77.274591!3d28.525047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDMxJzMwLjIiTiA3N8KwMTYnMjguNSJF!5e0!3m2!1sen!2sin!4v1691475111464!5m2!1sen!2sin"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>


                </div>
                <div
                    class="col-lg-6 px-xl-4 animation-element slide-right col-md-12 pl-60 res-991-pl-15 res-991-mt-20 order-lg-2 order-1">
                    <!-- Nav tabs -->
                    <div class="text-center">
                        <ul class="nav nav-pills mx-auto" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Customer</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Partner</button>
                            </li>

                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content mt-30">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">


                            <div class="toggle-div">
                                <div class="section-title">

                                    <div class="title-header">
                                        <h3 class="text-primary ">Contact Us</h3>
                                        <h2 class="title contact-us-title text-capitalize">Send A
                                            Message</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Our team is ready to answer all your questions.</p>
                                    </div>
                                </div>
                                <div id="contact" class=" prt-bgcolor-white res-991-margin_right0 mt-20">
                                    <form id="customer_form" class="wrap-form customer_form padding_top15" method="post"
                                        action="{{ url('/customer_form/submit') }}">
                                        @csrf
                                        <div class="row prt-boxes-spacing-10px">
                                            <input type="hidden" name="recaptcha_response" value=""
                                                id="recaptchaResponseC">
                                            <div class="col-sm-12 ">
                                                <span class="text-input custom-arr">
                                                    <select name="what_brings_you_here" required='required'>
                                                        <option value="">What brings you here*</option>
                                                        <option value="leasing services"
                                                            @if (session()->has('customer-form-error') && old('what_brings_you_here') == 'leasing services') {{ 'selected' }} @endif>
                                                            Leasing Services
                                                        </option>
                                                        <option
                                                            value="fleet management services"@if (session()->has('customer-form-error') && old('what_brings_you_here') == 'fleet management services') {{ 'selected' }} @endif>
                                                            Fleet Management Services
                                                        </option>
                                                        <option value="charging and parking subscription"
                                                            @if (session()->has('customer-form-error') && old('what_brings_you_here') == 'charging and parking subscription') {{ 'selected' }} @endif>
                                                            Charging and
                                                            Parking Subscription</option>
                                                        <option value="fleet management software subscription"
                                                            @if (session()->has('customer-form-error') && old('what_brings_you_here') == 'fleet management software subscription') {{ 'selected' }} @endif>
                                                            Fleet
                                                            Management Software Subscription
                                                        </option>
                                                        <option value="fleet analytics"
                                                            @if (session()->has('customer-form-error') && old('what_brings_you_here') == 'fleet analytics') {{ 'selected' }} @endif>
                                                            Fleet Analytics
                                                        </option>
                                                    </select>
                                                    @if (session()->has('customer-form-error') && $errors->has('what_brings_you_here'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('what_brings_you_here') }}</div>
                                                    @endif
                                                </span>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0"><input type="text"
                                                            value="{{ old('name') }}" placeholder="Full Name* "
                                                            name="name" required="required" minlength="3"
                                                            maxlength="30">
                                                        @if (session()->has('customer-form-error') && $errors->has('name'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('name') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <select name="i_am_a" required>
                                                            <option value="">I am a*</option>
                                                            <option value="cargo delivery fleet operator"
                                                                @if (session()->has('customer-form-error') && old('i_am_a') == 'cargo delivery fleet operator') {{ 'selected' }} @endif>
                                                                Cargo Delivery
                                                                Fleet Operator</option>
                                                            <option value="employee transportation operator"
                                                                @if (session()->has('customer-form-error') && old('i_am_a') == 'employee transportation operator') {{ 'selected' }} @endif>
                                                                Employee
                                                                Transportation Operator
                                                            </option>
                                                            <option value="cab aggregator"
                                                                @if (session()->has('customer-form-error') && old('i_am_a') == 'cab aggregator') {{ 'selected' }} @endif>
                                                                Cab Aggregator</option>
                                                            <option value="cargo aggregator"
                                                                @if (session()->has('customer-form-error') && old('i_am_a') == 'cargo aggregator') {{ 'selected' }} @endif>
                                                                Cargo Aggregator</option>
                                                            <option value="others"
                                                                @if (session()->has('customer-form-error') && old('i_am_a') == 'others') {{ 'selected' }} @endif>
                                                                Others
                                                            </option>
                                                        </select>
                                                        @if (session()->has('customer-form-error') && $errors->has('i_am_a'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('i_am_a') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0"><input type="text"
                                                            name="company_name" value="{{ old('company_name') }}"
                                                            placeholder="Company Name*" name=""
                                                            required="required" min="3" maxlength="150">
                                                        @if (session()->has('customer-form-error') && $errors->has('company_name'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('company_name') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <select name="job_title" required>
                                                            <option value="">Job Title*</option>
                                                            <option value="promoter"
                                                                @if (session()->has('customer-form-error') && old('job_title') == 'promoter') {{ 'selected' }} @endif>
                                                                Promoter
                                                            </option>
                                                            <option value="partner"
                                                                @if (session()->has('customer-form-error') && old('job_title') == 'partner') {{ 'selected' }} @endif>
                                                                Partner</option>
                                                            <option value="founder"
                                                                @if (session()->has('customer-form-error') && old('job_title') == 'founder') {{ 'selected' }} @endif>
                                                                Founder</option>
                                                            <option value="cfo"
                                                                @if (session()->has('customer-form-error') && old('job_title') == 'cfo') {{ 'selected' }} @endif>
                                                                CFO</option>
                                                            <option value="business head"
                                                                @if (session()->has('customer-form-error') && old('job_title') == 'business head') {{ 'selected' }} @endif>
                                                                Business Head
                                                            </option>
                                                            <option value="others"
                                                                @if (session()->has('customer-form-error') && old('job_title') == 'others') {{ 'selected' }} @endif>
                                                                Others
                                                            </option>
                                                        </select>
                                                        @if (session()->has('customer-form-error') && $errors->has('job_title'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('job_title') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <select name="vehicle_category" required>
                                                            <option value="">Vehicle Category*</option>
                                                            <option value="commercial car"
                                                                @if (session()->has('customer-form-error') && old('vehicle_category') == 'commercial car') {{ 'selected' }} @endif>
                                                                Commercial Car
                                                            </option>
                                                            <option value="3W cargo"
                                                                @if (session()->has('customer-form-error') && old('vehicle_category') == '3W cargo') {{ 'selected' }} @endif>
                                                                3W Cargo</option>
                                                            <option value="3W passenger"
                                                                @if (session()->has('customer-form-error') && old('vehicle_category') == '3W passenger') {{ 'selected' }} @endif>
                                                                3W Passenger
                                                            </option>
                                                            <option value="4W cargo"
                                                                @if (session()->has('customer-form-error') && old('vehicle_category') == '4W cargo') {{ 'selected' }} @endif>
                                                                4W Cargo
                                                            </option>

                                                            <option value="others"
                                                                @if (session()->has('customer-form-error') && old('vehicle_category') == 'others') {{ 'selected' }} @endif>
                                                                Others
                                                            </option>
                                                        </select>
                                                        @if (session()->has('customer-form-error') && $errors->has('vehicle_category'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('vehicle_category') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0"><input name="requirement_date"
                                                            required="" type="text" class="form-control"
                                                            placeholder="Requirement Date*" onfocus="(this.type='date')"
                                                            value="{{ old('requirement_date') }}" />
                                                        @if (session()->has('customer-form-error') && $errors->has('requirement_date'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('requirement_date') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <input name="quantity_of_vehicles" required="" type="number"
                                                            class="form-control" placeholder="Quantity of Vehicles*"
                                                            value="{{ old('quantity_of_vehicles') }}" />
                                                        @if (session()->has('customer-form-error') && $errors->has('quantity_of_vehicles'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('quantity_of_vehicles') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <input name="city" required="" type="text"
                                                            value="{{ old('city') }}" class="form-control"
                                                            placeholder="City*" minlength="3" maxlength="50" />
                                                        @if (session()->has('customer-form-error') && $errors->has('city'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('city') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <input name="email" required="" type="email"
                                                            class="form-control" placeholder="Email ID*" minlength="5"
                                                            maxlength="40" value="{{ old('email') }}" />
                                                        @if (session()->has('customer-form-error') && $errors->has('email'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('email') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <input name="phone_no" required="" type="text"
                                                            class="form-control" placeholder="Phone No*" minlength="10"
                                                            maxlength="10" value="{{ old('phone_no') }}" />
                                                        @if (session()->has('customer-form-error') && $errors->has('phone_no'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('phone_no') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <input name="your_requirements" required="" type="text"
                                                            class="form-control" placeholder="Your Requirements*"
                                                            minlength="3" maxlength="150"
                                                            value="{{ old('your_requirements') }}" />
                                                        @if (session()->has('customer-form-error') && $errors->has('your_requirements'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('your_requirements') }}</div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6 ">
                                                <label>
                                                    <span class="text-input margin_bottom0">
                                                        <select name="how_did_you_get_to_know_about_driveo">
                                                            <option value="">How Did You Get To Know About Driveo? *
                                                            </option>
                                                            <option value="car dealer outlet"
                                                                @if (session()->has('customer-form-error') && old('how_did_you_get_to_know_about_driveo') == 'car dealer outlet') {{ 'selected' }} @endif>
                                                                Car Dealer
                                                                Outlet
                                                            </option>
                                                            <option value="email from driveo"
                                                                @if (session()->has('customer-form-error') && old('how_did_you_get_to_know_about_driveo') == 'email from driveo') {{ 'selected' }} @endif>
                                                                Email from Driveo
                                                            </option>
                                                            <option value="driveo representative"
                                                                @if (session()->has('customer-form-error') && old('how_did_you_get_to_know_about_driveo') == 'driveo representative') {{ 'selected' }} @endif>
                                                                Driveo Representative
                                                            </option>
                                                            <option value="magazine / newspaper article"
                                                                @if (session()->has('customer-form-error') &&
                                                                        old('how_did_you_get_to_know_about_driveo') == 'magazine / newspaper article') {{ 'selected' }} @endif>
                                                                Magazine /
                                                                Newspaper Article
                                                            </option>
                                                            <option value="linkedin"
                                                                @if (session()->has('customer-form-error') && old('how_did_you_get_to_know_about_driveo') == 'linkedin') {{ 'selected' }} @endif>
                                                                Linkedin</option>
                                                            <option value="online / google search"
                                                                @if (session()->has('customer-form-error') && old('how_did_you_get_to_know_about_driveo') == 'online / google search') {{ 'selected' }} @endif>
                                                                Online / Google Search
                                                            </option>

                                                            <option value="others"
                                                                @if (session()->has('customer-form-error') && old('how_did_you_get_to_know_about_driveo') == 'others') {{ 'selected' }} @endif>
                                                                Others
                                                            </option>
                                                        </select>
                                                        @if (session()->has('customer-form-error') && $errors->has('how_did_you_get_to_know_about_driveo'))
                                                            <div id="name-error" class="text-danger">
                                                                {{ $errors->first('how_did_you_get_to_know_about_driveo') }}
                                                            </div>
                                                        @endif
                                                    </span>
                                                </label>
                                            </div>
                                            @if (session()->has('customer-form-error') && $errors->has('recaptcha_response'))
                                                <div id="message-error " class="text-danger">
                                                    {{ $errors->first('recaptcha_response') }}
                                                </div>
                                            @endif

                                            {{-- <div class="col-sm-12 ">
                            <label>
                                <span class="text-input margin_bottom0">
                                    <textarea cols="40" rows="5" placeholder="Your Message" aria-required="true" name="message"
                                        minlength="5" maxlength="250">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <div id="name-error" class="text-danger">{{ $errors->first('message') }}
                                        </div>
                                    @endif
                                </span>
                            </label>
                        </div>
                    </div> --}}
                                            <div class="row justify-content-center px-0 px-4 pt-30">
                                                <div class="col-sm-12 px-0 text-center ">
                                                    <button
                                                        class="px-5 py-3 btn-block text-capitalize rounded-sub-btn submit prt-btn prt-btn-size-md prt-btn-shape-square prt-btn-style-fill prt-btn-color-skincolor "
                                                        type="submit">Submit details</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>


                        </div>

                    </div>



                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                        <div class="toggle-div">
                            <div class="section-title">

                                <div class="title-header">
                                    <h3 class="text-primary ">Contact Us</h3>
                                    <h2 class="title contact-us-title ">Send A
                                        Message</span></h2>
                                </div>
                                <div class="title-desc">
                                    <p class="text-capitalize">we will reach out to you as soon as possible.</p>
                                </div>
                            </div>
                            <div class=" prt-bgcolor-white res-991-margin_right0 mt-20">
                                <form id="partner_form" class="wrap-form partner_form padding_top15" method="post"
                                    action="{{ url('partner_form/submit') }}">
                                    @csrf
                                    <div class="row prt-boxes-spacing-10px">
                                        <input type="hidden" name="recaptcha_response" value=""
                                            id="recaptchaResponseP">
                                        <div class="col-sm-12 ">
                                            <span class="text-input ">
                                                <select name="what_brings_you_here" required>
                                                    <option value="">What brings you here*</option>
                                                    <option value="charging"
                                                        @if (session()->has('partner-from-error') && old('what_brings_you_here') == 'charging') {{ 'selected' }} @endif>
                                                        Charging
                                                    </option>
                                                    <option value="iot"
                                                        @if (session()->has('partner-from-error') && old('what_brings_you_here') == 'iot') {{ 'selected' }} @endif>IOT
                                                    </option>
                                                    <option value="parking"
                                                        @if (session()->has('partner-from-error') && old('what_brings_you_here') == 'parking') {{ 'selected' }} @endif>
                                                        Parking</option>
                                                    <option value="fleet managment"
                                                        @if (session()->has('partner-from-error') && old('what_brings_you_here') == 'fleet managment') {{ 'selected' }} @endif>
                                                        Fleet Management</option>
                                                    <option value="vehicle manufacturer"
                                                        @if (session()->has('partner-from-error') && old('what_brings_you_here') == 'vehicle manufacturer') {{ 'selected' }} @endif>
                                                        Vehicle Manufacturer

                                                    </option>
                                                </select>
                                                @if ($errors->has('what_brings_you_here'))
                                                    <div id="name-error" class="text-danger">
                                                        {{ $errors->first('what_brings_you_here') }}</div>
                                                @endif
                                            </span>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0"><input type="text"
                                                        value="{{ old('name') }}" placeholder="Full Name* "
                                                        name="name" required="required" minlength="3"
                                                        maxlength="30">
                                                    @if (session()->has('partner-from-error') && $errors->has('name'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('name') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <select name="i_am_a" required>
                                                        <option value="">I am a*</option>
                                                        <option value="charging aggregator/operator"
                                                            @if (session()->has('partner-from-error') && old('i_am_a') == 'charging aggregator/operator') {{ 'selected' }} @endif>
                                                            Charging
                                                            Aggregator/Operator</option>
                                                        <option value="iot device/software provider"
                                                            @if (session()->has('partner-from-error') && old('i_am_a') == 'iot device/software provider') {{ 'selected' }} @endif>
                                                            IOT Device/Software Provider</option>
                                                        <option value="parking space provider"
                                                            @if (session()->has('partner-from-error') && old('i_am_a') == 'parking space provider') {{ 'selected' }} @endif>
                                                            Parking Space Provider
                                                        </option>
                                                        <option value="workshop"
                                                            @if (session()->has('partner-from-error') && old('i_am_a') == 'workshop') {{ 'selected' }} @endif>
                                                            Workshop</option>
                                                        <option value="vehicle manufacturer"
                                                            @if (session()->has('partner-from-error') && old('i_am_a') == 'vehicle manufacturer') {{ 'selected' }} @endif>
                                                            Vehicle Manufacturer

                                                        </option>
                                                    </select>
                                                    @if (session()->has('partner-from-error') && $errors->has('i_am_a'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('i_am_a') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0"><input type="text"
                                                        placeholder="Company Name*" name="company_name"
                                                        value="{{ session()->has('partner-from-error') ? old('company_name') : null }}"
                                                        minlength="3" maxlength="150" required="required">
                                                    @if (session()->has('partner-from-error') && $errors->has('company_name'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('company_name') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <select name="job_title" required>
                                                        <option value="">Job Title*</option>
                                                        <option value="promoter"
                                                            @if (session()->has('partner-from-error') && old('job_title') == 'promoter') {{ 'selected' }} @endif>
                                                            Promoter
                                                        </option>
                                                        <option value="partner"
                                                            @if (session()->has('partner-from-error') && old('job_title') == 'partner') {{ 'selected' }} @endif>
                                                            Partner</option>
                                                        <option value="founder"
                                                            @if (session()->has('partner-from-error') && old('job_title') == 'founder') {{ 'selected' }} @endif>
                                                            Founder</option>
                                                        <option value="cfo"
                                                            @if (session()->has('partner-from-error') && old('job_title') == 'cfo') {{ 'selected' }} @endif>
                                                            CFO</option>
                                                        <option value="business head"
                                                            @if (session()->has('partner-from-error') && old('job_title') == 'business head') {{ 'selected' }} @endif>
                                                            Business Head
                                                        </option>
                                                        <option value="others"
                                                            @if (session()->has('partner-from-error') && old('job_title') == 'others') {{ 'selected' }} @endif>
                                                            Others
                                                        </option>
                                                    </select>
                                                    @if (session()->has('partner-from-error') && $errors->has('job_title'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('job_title') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <select name="vehicle_category" required>
                                                        <option value="">Vehicle Category*</option>
                                                        <option value="commercial car"
                                                            @if (session()->has('partner-from-error') && old('vehicle_category') == 'commercial car') {{ 'selected' }} @endif>
                                                            Commercial Car
                                                        </option>
                                                        <option value="3W cargo"
                                                            @if (session()->has('partner-from-error') && old('vehicle_category') == '3W cargo') {{ 'selected' }} @endif>
                                                            3W Cargo</option>
                                                        <option value="3W passenger"
                                                            @if (session()->has('partner-from-error') && old('vehicle_category') == '3W passenger') {{ 'selected' }} @endif>
                                                            3W Passenger
                                                        </option>
                                                        <option value="4W cargo"
                                                            @if (session()->has('partner-from-error') && old('vehicle_category') == '4W cargo') {{ 'selected' }} @endif>
                                                            4W Cargo
                                                        </option>

                                                        <option value="others"
                                                            @if (session()->has('partner-from-error') && old('vehicle_category') == 'others') {{ 'selected' }} @endif>
                                                            Others
                                                        </option>
                                                    </select>
                                                    @if (session()->has('partner-from-error') && $errors->has('vehicle_category'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('vehicle_category') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <input name="city" required="" type="text"
                                                        value="{{ old('city') }}" class="form-control"
                                                        placeholder="City*" minlength="3" maxlength="50" />
                                                    @if (session()->has('partner-from-error') && $errors->has('city'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('city') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <input name="email" required="" type="email"
                                                        class="form-control" placeholder="Email ID*" minlength="5"
                                                        maxlength="40" value="{{ old('email') }}" />
                                                    @if (session()->has('partner-from-error') && $errors->has('email'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('email') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <input name="phone_no" required="" type="text"
                                                        class="form-control" placeholder="Phone No*" minlength="10"
                                                        maxlength="10" value="{{ old('phone_no') }}" />
                                                    @if (session()->has('partner-from-error') && $errors->has('phone_no'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('phone_no') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <input required="" name="your_services" minlength="3"
                                                        maxlength="150" type="text" class="form-control"
                                                        placeholder="Your Services*"
                                                        value="{{ old('your_services') }}" />
                                                    @if (session()->has('partner-from-error') && $errors->has('your_services'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('your_services') }}</div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-sm-6 ">
                                            <label>
                                                <span class="text-input margin_bottom0">
                                                    <select name="how_did_you_get_to_know_about_driveo">
                                                        <option value="">How Did You Get To Know About Driveo? *
                                                        </option>
                                                        <option value="car dealer outlet"
                                                            @if (session()->has('partner-from-error') && old('how_did_you_get_to_know_about_driveo') == 'car dealer outlet') {{ 'selected' }} @endif>
                                                            Car Dealer
                                                            Outlet
                                                        </option>
                                                        <option value="email from driveo"
                                                            @if (session()->has('partner-from-error') && old('how_did_you_get_to_know_about_driveo') == 'email from driveo') {{ 'selected' }} @endif>
                                                            Email from Driveo
                                                        </option>
                                                        <option value="driveo representative"
                                                            @if (session()->has('partner-from-error') && old('how_did_you_get_to_know_about_driveo') == 'driveo representative') {{ 'selected' }} @endif>
                                                            Driveo Representative
                                                        </option>
                                                        <option value="magazine / newspaper article"
                                                            @if (session()->has('partner-from-error') &&
                                                                    old('how_did_you_get_to_know_about_driveo') == 'magazine / newspaper article') {{ 'selected' }} @endif>
                                                            Magazine /
                                                            Newspaper Article
                                                        </option>
                                                        <option value="linkedin"
                                                            @if (session()->has('partner-from-error') && old('how_did_you_get_to_know_about_driveo') == 'linkedin') {{ 'selected' }} @endif>
                                                            Linkedin</option>
                                                        <option value="online / google search"
                                                            @if (session()->has('partner-from-error') && old('how_did_you_get_to_know_about_driveo') == 'online / google search') {{ 'selected' }} @endif>
                                                            Online / Google Search
                                                        </option>

                                                        <option value="others"
                                                            @if (session()->has('partner-from-error') && old('how_did_you_get_to_know_about_driveo') == 'others') {{ 'selected' }} @endif>
                                                            Others
                                                        </option>
                                                    </select>
                                                    @if (session()->has('partner-from-error') && $errors->has('how_did_you_get_to_know_about_driveo'))
                                                        <div id="name-error" class="text-danger">
                                                            {{ $errors->first('how_did_you_get_to_know_about_driveo') }}
                                                        </div>
                                                    @endif
                                                </span>
                                            </label>
                                        </div>
                                        @if (session()->has('partner-from-error') && $errors->has('recaptcha_response'))
                                            <div id="message-error " class="text-danger">
                                                {{ $errors->first('recaptcha_response') }}
                                            </div>
                                        @endif


                                        {{-- <div class="col-sm-12 ">
                            <label>
                                <span class="text-input margin_bottom0">
                                    <textarea cols="40" rows="5" placeholder="Your Message" aria-required="true" name="message"
                                        minlength="5" maxlength="250">{{ old('message') }}</textarea>
                                    @if (session()->has('partner-from-error') && $errors->has('message'))
                                        <div id="name-error" class="text-danger">{{ $errors->first('message') }}
                                        </div>
                                    @endif
                                </span>
                            </label>
                        </div>
                    </div> --}}
                                        <div class="row justify-content-center px-0 px-4 pt-30">
                                            <div class="col-sm-12 px-0 text-center ">
                                                <button
                                                    class="px-5 py-3 btn-block rounded-sub-btn text-capitalize submit prt-btn prt-btn-size-md prt-btn-shape-square prt-btn-style-fill prt-btn-color-skincolor "
                                                    type="submit">Submit Details</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="pt-custom contact-section map-p  clearfix">
        <div class="container">
            <!-- row -->
            {{-- <div class="row">
                <div class="col-lg-7 m-auto">
                    <!-- section title -->
                    <div class="section-title title-style-center_text res-991-mt-15">
                        <div class="title-header prt-textcolor-white">
                            <h3>Location</h3>
                            <h2 class="title">Our Offices Location</h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div> --}}
            <div class="row">
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="featured-imagebox featured-imagebox-post style3">
                        <div class="prt-post-thumbnail featured-thumbnail">
                            <img class="img-fluid" src="frontend/images/team-member/team-01-447x350.jpg" alt="image">
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-header">
                                <div class="post-title featured-title">
                                    <h3><a
                                            href="https://www.google.com/maps/place/Disneyland+Park/@33.8120918,-117.9189742,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcd7d12b3b5e6b:0x2ef62f8418225cfa!8m2!3d33.8120918!4d-117.9189742">Australia
                                            Office</a></h3>
                                </div>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>785 15h Street, Office 478 Australia, Au 81566</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-imagebox featured-imagebox-post style3">
                        <div class="prt-post-thumbnail featured-thumbnail">
                            <img class="img-fluid" src="frontend/images/team-member/team-02-447x350.jpg" alt="image">
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-header">
                                <div class="post-title featured-title">
                                    <h3><a
                                            href="https://www.google.com/maps/place/Disneyland+Park/@33.8120918,-117.9189742,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcd7d12b3b5e6b:0x2ef62f8418225cfa!8m2!3d33.8120918!4d-117.9189742">Singapore
                                            Office</a></h3>
                                </div>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>176 W street name, Singapore, 10014</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="featured-imagebox featured-imagebox-post style3">
                        <div class="prt-post-thumbnail featured-thumbnail">
                            <img class="img-fluid" src="frontend/images/team-member/team-03-447x350.jpg" alt="image">
                        </div>
                        <div class="featured-content featured-content-post">
                            <div class="post-header">
                                <div class="post-title featured-title">
                                    <h3><a
                                            href="https://www.google.com/maps/place/Disneyland+Park/@33.8120918,-117.9189742,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcd7d12b3b5e6b:0x2ef62f8418225cfa!8m2!3d33.8120918!4d-117.9189742">USA
                                            Office</a></h3>
                                </div>
                            </div>
                            <div class="post-desc featured-desc">
                                <p>7195 E. San Pablo St. Harlingen, TX 78552</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <!--google_map-->
    <div id="google_map" class="google_map b-map mt_280 res-991-mt-0 pb-50 px-xl-5">
        <div class="container ">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5404230618797!2d-0.12174774859469174!3d51.5033006187238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sin!4v1629115262628!5m2!1sen!2sin"
                    height="400"></iframe>

<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3505.4880403274046!2d77.274591!3d28.525047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDMxJzMwLjIiTiA3N8KwMTYnMjguNSJF!5e0!3m2!1sen!2sin!4v1691475111464!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.488210289671!2d77.27210417468932!3d28.525041888955336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce14ed7b33203%3A0x38a44246edd69988!2sTata%20Motors%20Cars%20Showroom%20-%20Treo%2C%20Okhla%20Industrial%20Area!5e0!3m2!1sen!2sin!4v1688119919876!5m2!1sen!2sin"></iframe>
            </div>
        </div>
    </div> --}}


@endsection
@section('js')
    <script>
        var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
        triggerTabList.forEach(function(triggerEl) {
            var tabTrigger = new bootstrap.Tab(triggerEl)

            triggerEl.addEventListener('click', function(event) {
                event.preventDefault()
                tabTrigger.show()
            })
        })
    </script>
    <script>
        $('.b-map').hide();

        $(document).ready(function() {
            @if (session()->has('partner-from-error'))
                $("#profile-tab").click();
            @endif
        });
    </script>

    {{-- extra page specific js --}}
    <script
        src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
        async defer></script>
    <script>
        var onloadCallback = function() {
            // alert('hell')
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    var recaptchaResponseC = document.getElementById('recaptchaResponseC');
                    recaptchaResponseC.value = token;
                    var recaptchaResponseP = document.getElementById('recaptchaResponseP');
                    recaptchaResponseP.value = token;
                })
            })
        }
    </script>
@endsection
