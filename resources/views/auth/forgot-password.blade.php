@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('heading')
    Recover access<br>
    to your secure<br>
    account instantly.
@endsection

@section('content')

    <h2 class="auth-title">
        Forgot<br>Password
    </h2>

    <p class="auth-subtitle">
        Enter your registered email address and we'll send you a secure password reset link.
    </p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email -->
        <div class="mb-4 position-relative">
            <label class="form-label">Email</label>

            <input type="email" name="email" value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror" placeholder="Enter your registered email" autofocus
                data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your registered email">

            @error('email')
                <span class="invalid-tooltip">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Back Login -->
        <div class="mb-4 text-end">
            <a href="{{ route('login') }}" class="auth-link">
                Back to login
            </a>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-submit w-100">
            Send Reset Link
        </button>

    </form>

@endsection
