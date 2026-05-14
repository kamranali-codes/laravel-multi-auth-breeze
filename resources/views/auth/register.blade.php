@extends('layouts.auth')

@section('title', 'Register')

@section('heading')
    Secure authentication<br>
    for modern web<br>
    applications.
@endsection

@section('content')

    <h2 class="auth-title">
        Create<br>account
    </h2>

    <p class="auth-subtitle">
        Register your account to continue.
    </p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4 position-relative">
            <label class="form-label">Full Name</label>

            <input type="text" name="name" value="{{ old('name') }}"
                class="form-control @error('name') is-invalid @enderror" placeholder="Enter your full name"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your full name">

            @error('name')
                <span class="invalid-tooltip">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-4 position-relative">
            <label class="form-label">Email</label>

            <input type="email" name="email" value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Enter a valid email">

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
                placeholder="Create password" data-bs-toggle="tooltip" data-bs-placement="top"
                title="Create strong password">

            @error('password')
                <span class="invalid-tooltip">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4 position-relative">
            <label class="form-label">Confirm Password</label>

            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Re-enter password">
        </div>

        <!-- Login -->
        <div class="mb-4 text-end">
            <a href="{{ route('login') }}" class="auth-link">
                Already registered?
            </a>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-submit w-100">
            Create Account
        </button>

    </form>

@endsection
