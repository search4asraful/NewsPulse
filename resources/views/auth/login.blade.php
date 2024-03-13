<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Login</title>
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/admin-style.css') }}">
</head>
<body>
<div class="auth-wrapper">
    <div class="loginContainer">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>{{ __('Sign In') }}</h1>
            <span>Enter your email password</span>
            <div>
                <input type="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <small><b>{{ $message }}</b></small>
                </span>
                @enderror
            </div>
            <div>
                <input type="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <small><b>{{ $message }}</b></small>
                </span>
                @enderror
            </div>
            <div class="remember-me">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
            <a class="hyper-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif

            <button type="submit">{{ __('Login') }}</button>
        </form>
    </div>
</div>
</body>
</html>