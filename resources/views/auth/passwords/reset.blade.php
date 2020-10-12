@extends('layouts.bloglayout')
@section('content')
    <div class="login_form_page_wrapper">
        <div class="login-form-wrapper">
            <h1>Reset Password</h1>
                <form method="POST" action="{{ route('password.update') }}" class="login-form">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="txtb">
                            <input id="email" type="email"
                                   class="@error('email') is-invalid @enderror"
                                   name="email" value="{{ $email ?? old('email') }}"
                                   required autocomplete="email" autofocus>
                            <span class="login-form-span"></span>
                        </div>
                        @error('email')
                            <span class="">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="txtb">
                            <input id="password" type="password"
                                   class="@error('password') is-invalid @enderror"
                                   name="password" required
                                   autocomplete="new-password" placeholder="Password">
                            <span class="login-form-span"></span>
                            @error('password')
                                <span class="">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="txtb">
                            <input id="password-confirm" type="password"
                                   name="password_confirmation" required
                                   autocomplete="new-password" placeholder="Confirm Password">
                            <span class="login-form-span"></span>
                        </div>
                        <div class="cta-wrapper">
                            <button type="submit" class="cta">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
