@extends('layouts.auth')

@section('title', 'Login')

@section('heading')
    Secure authentication<br>
    for modern web<br>
    applications.
@endsection

@section('content')

    <h2 class="auth-title">
        Welcome<br>Back
    </h2>

    <p class="auth-subtitle">
        Login to continue your account.
    </p>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email -->
        <div class="mb-4 position-relative">
            <label class="form-label">Email</label>

            <input type="email" name="email" value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your valid email">

            @error('email')
                <span class="invalid-tooltip">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4 position-relative">
            <label class="form-label">Password</label>

            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="Enter your password" data-bs-toggle="tooltip" data-bs-placement="top"
                title="Enter your password">

            @error('password')
                <span class="invalid-tooltip">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Actions -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div class="form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">

                <label class="form-check-label" for="remember">
                    Remember
                </label>
            </div>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="auth-link">
                    Forgot password?
                </a>
            @endif

        </div>

        <button type="submit" class="btn btn-submit w-100">
            Log in
        </button>

        <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="auth-link">
                Create new account
            </a>
        </div>

    </form>

@endsection
