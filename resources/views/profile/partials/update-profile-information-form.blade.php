<section>

    <h4 class="mb-3">
        Profile Information
    </h4>

    <p class="text-muted mb-4">
        Update your account profile information and email address.
    </p>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <!-- Name -->
        <div class="mb-3">

            <label class="form-label">
                Name
            </label>

            <input type="text"
                name="name"
                value="{{ old('name', $user->name) }}"
                class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <!-- Email -->
        <div class="mb-4">

            <label class="form-label">
                Email
            </label>

            <input type="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                class="form-control @error('email') is-invalid @enderror">

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <button class="btn btn-primary">
            Save Changes
        </button>

    </form>

</section>