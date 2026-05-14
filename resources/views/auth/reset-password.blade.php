@extends('layouts.auth')

@section('title', 'Reset Password')

@section('heading')
    Create a new<br>
    secure password<br>
    for your account.
@endsection

@section('content')

    <h2 class="auth-title">
        Reset<br>Password
    </h2>

    <p class="auth-subtitle">
        Your new password must be secure and different from previously used passwords.
    </p>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email -->
        <div class="mb-4 position-relative">
            <label class="form-label">Email</label>

            <input type="email" name="email" value="{{ old('email', $request->email) }}"
                class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" autofocus
                data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your registered email">

            @error('email')
                <span class="invalid-tooltip">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4 position-relative">
            <label class="form-label">New Password</label>

            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="Create new password" data-bs-toggle="tooltip" data-bs-placement="top"
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

            <input type="password" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm password"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Re-enter password">

            @error('password_confirmation')
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
            Reset Password
        </button>

    </form>

@endsection
