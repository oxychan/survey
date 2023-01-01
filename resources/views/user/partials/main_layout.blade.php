<!DOCTYPE html>
<html lang="en">

<head>
    <title>e-survey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-dark.css') }}" /> --}}

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="{{ asset('user/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font CSS -->
    <link href="{{ asset('user/assets/css/boxicon.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    @yield('additional-css')



</head>

<body>
    <script src="{{ asset('admin/assets/js/initTheme.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.6.3.js') }}"></script>

    {{-- Navbar --}}
    @include('user.partials.navbar')

    {{-- content is here --}}
    @yield('container')

    {{-- footer --}}
    @include('user.partials.footer')


    <!-- Bootstrap -->
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('user/assets/js/isotope.pkgd.js') }}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    @yield('script')
    <!-- Templatemo -->
    <script src="{{ asset('user/assets/js/templatemo.js') }}"></script>
    <!-- Custom -->
    <script src="{{ asset('user/assets/js/custom.js') }}"></script>


    <script src="{{ asset('admin/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/component-toasts.js') }}"></script>

</body>

</html>
