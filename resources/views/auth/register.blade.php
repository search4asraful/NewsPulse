<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Register</title>
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/admin-style.css') }}">
</head>
<body>
    <div class="auth-wrapper">
        <div class="signContainer">
            <form method="POST" action="{{ route('register') }}">
                @csrf
    
                <h1>{{ __('Register') }}</h1>
                <span>Enter your email for registeration</span>
                <div>
                    <input type="text" class="@error('name') is-invalid @enderror" name="name" required placeholder="name" autocomplete="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <small><b>{{ $message }}</b></small>
                        </span>
                    @enderror
                </div>
                <div>
                    <input type="email" class="@error('email') is-invalid @enderror" name="email" required placeholder="Email" autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <small><b>{{ $message }}</b></small>
                        </span>
                    @enderror
                </div>
                <div>
                    <input type="password" class="@error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <small><b>{{ $message }}</b></small>
                        </span>
                    @enderror
                </div>
                <div>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                </div>
                <button type="submit">{{ __('Sign Up') }}</button>
            </form>
        </div>
    </div>
</body>
</html>