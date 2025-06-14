<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.header')
    @yield('cdn')

</head>

<body>
    <!-- page start -->
    <div class="page">
        @include('frontend.layouts.nav')
        <div class="site-main">
            @yield('content')
            @include('frontend.layouts.footer')
        </div>
    </div>
    <!-- Javascript -->
    <script src="{{ url('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ url('frontend/js/jquery-validate.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('frontend/js/slick.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery-waypoints.js') }}"></script>
    <script src="{{ url('frontend/js/numinate.min.js') }}"></script>
    <script src="{{ url('frontend/js/imagesloaded.min.js') }}"></script>
    <script src="{{ url('frontend/js/circle-progress.min.js') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>
    <script src="{{ url('frontend/js/custom.js') }}"></script>
    <!-- Revolution Slider -->
    <script src="{{ url('frontend/revolution/js/revolution.tools.min.js') }}"></script>
    <script src="{{ url('frontend/revolution/js/rs6.min.js') }}"></script>
    <script src="{{ url('frontend/revolution/js/slider.js') }}"></script>
    <!-- Javascript end-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js"
        integrity="sha512-c41hNYfKMuxafVVmh5X3N/8DiGFFAV/tU2oeNk+upk/dfDAdcbx5FrjFOkFhe4MOLaKlujjkyR4Yn7vImrXjzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('js')
</body>

</html>
