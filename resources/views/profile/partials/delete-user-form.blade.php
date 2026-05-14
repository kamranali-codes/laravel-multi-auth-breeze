<section>

    <h4 class="mb-2 fw-bold text-danger">
        Delete Account
    </h4>

    <p class="text-muted mb-4">
        Once your account is deleted, all data and resources will be permanently removed.
        Please download any important information before deleting your account.
    </p>

    <!-- Delete Button -->
    <button class="btn btn-danger"
        data-bs-toggle="modal"
        data-bs-target="#deleteAccountModal">

        Delete Account

    </button>

    <!-- Modal -->
    <div class="modal fade"
        id="deleteAccountModal"
        tabindex="-1"
        aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content border-0 rounded-4">

                <div class="modal-header border-0 pb-0">

                    <h5 class="modal-title fw-bold text-danger">
                        Confirm Account Deletion
                    </h5>

                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body pt-2">

                    <p class="text-muted mb-4">
                        This action is permanent and cannot be undone.
                        Enter your password to confirm account deletion.
                    </p>

                    <form method="POST" action="{{ route('profile.destroy') }}">
                        @csrf
                        @method('DELETE')

                        <!-- Password -->
                        <div class="mb-4 position-relative">

                            <label class="form-label">
                                Password
                            </label>

                            <input type="password"
                                name="password"
                                class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                                placeholder="Enter your password"
                                data-bs-toggle="tooltip"
                                data-bs-placement="top"
                                title="Enter password to confirm deletion">

                            @error('password', 'userDeletion')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2">

                            <button type="button"
                                class="btn btn-light"
                                data-bs-dismiss="modal">

                                Cancel

                            </button>

                            <button type="submit"
                                class="btn btn-danger">

                                Delete Account

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>