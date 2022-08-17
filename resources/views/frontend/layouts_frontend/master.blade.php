<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend_assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend_assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/frontend_assets/css/responsive.css') }}" rel="stylesheet">

   <link rel="shortcut icon" href="{{ asset('assets/frontend_assetsimages/favicon.png') }}" type="image/x-icon">


    <link rel="icon" href="{{ asset('assets/frontend_assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    @yield('extra_styles')
</head>

<body>
{{-- @include('cookie-consent::index') --}}
    <div class="page-wrapper">
        <!-- Preloader -->
        {{-- <div class="preloader">
            <div class="icon"></div>
        </div> --}}
        {{-- navigation header --}}
        @include('frontend.includes_frontend.header_frontend')
        {{-- Content section --}}
        @yield('content')

        <!-- Main Footer -->
        @include('frontend.includes_frontend.footer')


    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

    <script src="{{ asset('assets/frontend_assets/js/jquery.js')          }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/popper.min.js')      }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/bootstrap.min.js')   }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/jquery-ui.js')       }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/owl.js')             }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/appear.js')          }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/wow.js')             }}"></script>

    <script src="{{ asset('assets/frontend_assets/js/scrollbar.js')       }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/isotope.js')         }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/paroller.js')        }}"></script>
    <script src="{{ asset('assets/frontend_assets/js/custom-script.js')   }}"></script>

    @yield('extra_scripts')


</body>

</html>
