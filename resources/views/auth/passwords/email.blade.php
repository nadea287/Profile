@extends('layouts.bloglayout')
@section('content')
    <div class="send-password-reset-wrapper">
        <div class="send-password-reset-banner">
            @if (session('status'))
                <div class="">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                <input id="email" type="email" class="form-control
                        @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span style="color: red; font-weight: 500">
                        <strong>{{ $message }}</strong>
                    </span>
                      @enderror
                <div class="cta-wrapper">
                    <button type="submit" class="cta">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
