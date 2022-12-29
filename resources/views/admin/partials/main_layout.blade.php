<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - {{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main/app-dark.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/assets/css/shared/iconly.css') }}" />
</head>

<body>
    <script src="{{ asset('admin/assets/js/initTheme.js') }}"></script>
    <div id="app">
        {{-- side bar --}}
        @include('admin.partials.sidebar')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-content">
                @yield('content')
            </div>

            {{-- footer --}}
            @include('admin.partials.footer')
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('admin/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>

    {{-- data tables --}}
    <script src="{{ asset('admin/assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ asset('admin/assets/js/pages/datatables.js') }}"></script>
</body>

</html>
