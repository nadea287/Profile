@extends('layouts.bloglayout')
@section('content')
    <div class="login_form_page_wrapper">
        <div class="login-form-wrapper register_form_wrapper">
            <h1>Register</h1>
            <form method="POST" action="{{ route('register') }}" class="login-form">
                @csrf
                <div class="txtb">
                    <input id="name" type="text" class="form-control
                           @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name"
                           placeholder="Name">
                    <span class="login-form-span"></span>
                </div>
                @error('name')
                <h4 class="invalid-feedback" role="alert">
                    <strong style="color: red;">{{ $message }}</strong>
                </h4>
                @enderror
                <div class="txtb">
                    <input id="username" type="text" class="form-control
                           @error('username') is-invalid @enderror"
                           name="username" value="{{ old('username') }}"
                           required autocomplete="username" placeholder="Username">
                    <span class="login-form-span"></span>
                </div>
                @error('username')
                <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $message }}</strong>
                        </span>
                @enderror
                <div class="txtb">
                    <input id="email" type="email" class="form-control
                           @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email"
                           placeholder="Email">
                    <span class="login-form-span"></span>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $message }}</strong>
                        </span>
                @enderror
                <div class="txtb">
                    <input id="password" type="password" class="form-control
                           @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password"
                           placeholder="Password">
                    <span class="login-form-span"></span>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $message }}</strong>
                        </span>
                @enderror
                <div class="txtb">
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation" required autocomplete="new-password"
                           placeholder="Confirm Pasword">
                    <span class="login-form-span"></span>
                </div>
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $message }}</strong>
                        </span>
                @enderror
                <div class="cta-wrapper">
                    <button type="submit" class="cta">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
