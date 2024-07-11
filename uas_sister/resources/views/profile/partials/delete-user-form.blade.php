<form method="post" action="{{ route('profile.destroy') }}" class="col-md-12">
@csrf
@method('delete')

    <div class="card mb-4">
        <div class="card-header">
            <h5>{{ __('Delete Account') }}</h5>
            <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>
            @if($errors->userDeletion->get('password'))
            <div class="mt-3 alert alert-danger alert-dismissible" role="alert">
                {{ $errors->userDeletion->get('password')[0] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>
            @endif
        </div>
        <div class="card-body">

            <div>
                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDeleteAccount">{{ __('Delete Account') }}</button>
            </div>

            <div class="modal fade" id="modalDeleteAccount" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">{{ __('Are you sure you want to delete your account?') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>
                        <div class="mt-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="{{ __('Password') }}" aria-describedby="password" required>
                            @error('password')
                            <div id="password" class="form-text text-danger">{{ $message }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</form>