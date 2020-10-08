<section id="header">
    <div class="header first-container">
        <div class="nav-bar">
            <div class="brand">
                <a href="{{ asset('/') }}"><h1><span>L</span>orem <span>I</span>psum</h1></a>
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
                        <li class="notification-icon sub-menu">
{{--                        @if(count(auth()->user()->unreadnotifications) != 0)--}}
                            <div class="notifications-options" onclick="markNotificationAsRead('{{ count(auth()->user()->unreadNotifications) }}')">
                                <img src="{{ asset('/images/notification.png') }}" id="notification_toggle">
                                <span id="notifications-count">{{ count(auth()->user()->unreadnotifications) }}</span>
                            </div>
                                <div class="notifi-box" id="notifi-box">
                                    @forelse(auth()->user()->unreadNotifications as $notification)
                                            @include('layouts.partials.notification/' .
                                         snake_case(class_basename($notification->type)))
                                        @empty
                                            <h2>Sorry, Your List Is Empty...</h2>
                                        <img src="{{ asset('/images/empty.png') }}" alt="" class="empty_list">
                                    @endforelse
                                </div>
                        </li>
{{--                        @endif--}}
                        <li class="display-user-name">
                            <a href="{{ url('/profile/' . Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                        </li>
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

@section('styles')
    <style>
        #header {
            background-color: red;
        }
    </style>
@endsection
