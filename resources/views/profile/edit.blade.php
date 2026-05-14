@extends(
    Auth::user()->role === 'admin'
        ? 'admin.layouts.master'
        : (Auth::user()->role === 'vendor'
            ? 'vendor.layouts.master'
            : 'user.layouts.master')
)

@section('title','Profile Settings')

@section('page-title','Profile Settings')

@section('content')

<div class="row g-4">

    <div class="col-lg-6">

        <div class="dashboard-card">

            @include('profile.partials.update-profile-information-form')

        </div>

    </div>

    <div class="col-lg-6">

        <div class="dashboard-card">

            @include('profile.partials.update-password-form')

        </div>

    </div>

    <div class="col-12">

        <div class="dashboard-card">

            @include('profile.partials.delete-user-form')

        </div>

    </div>

</div>

@endsection