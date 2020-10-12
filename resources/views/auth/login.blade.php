@extends('layouts.bloglayout')
@section('content')
<div class="login_form_page_wrapper">
    <div class="login-form-wrapper">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <div class="txtb">
                <input type="email" id="email" class="@error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required
                       autocomplete="email" placeholder="Email">
                <span class="login-form-span"></span>
            </div>
            @error('email')
            <div class="invalid-feedback message_display" role="alert">
                <strong style="color: red;">{{ $message }}</strong>
            </div>
            @enderror
            <div class="txtb">
                <input type="password"  class="@error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password" placeholder="Password">
                <span class="login-form-span"></span>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="cta-wrapper">
                <button type="submit" class="cta">Login</button>
            </div>
            <div class="bottom-text">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
            </div>
        </form>
    </div>
</div>
@endsection
