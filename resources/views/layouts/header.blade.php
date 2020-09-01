<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>freeCodeCamp</title>
    <link rel="stylesheet" href="{{ asset('css/profile_sass.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
</head>
<body>

{{--@guest--}}
{{--    <li class="nav-item">--}}
{{--        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--    </li>--}}
{{--    @if (Route::has('register'))--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--        </li>--}}
{{--    @endif--}}
{{--@else--}}
{{--    <div class="mt-2">--}}
{{--        <a class="btn btn-dark btn-sm" href="{{ route('logout') }}"--}}
{{--           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--            {{ __('Logout') }}--}}
{{--        </a>--}}
{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--            @csrf--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endguest--}}


{{--header--}}
<section id="header">
    <div class="header first-container">
        <div class="nav-bar">
            <div class="brand">
                <a href="#hero"><h1><span>L</span>orem <span>I</span>psum</h1></a>
            </div>
            <div class="nav-list">
                <div class="hamburger"><div class="bar"></div></div>
                <ul class="nav-wrapper">
                    @guest()
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                    @else
                        <li>
                            <a data-after="Logout" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</section>
{{--end header--}}

<main>
{{--    <div class="container">--}}
        @yield('content')
{{--    </div>--}}
</main>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
