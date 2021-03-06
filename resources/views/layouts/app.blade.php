<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ToDo') }} - @yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('includes.navbar')
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @include('includes.success')
                        @include('includes.error')
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
