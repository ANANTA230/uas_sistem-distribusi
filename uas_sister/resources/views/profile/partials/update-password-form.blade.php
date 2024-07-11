<form method="post" action="{{ route('password.update') }}" class="col-md-12">
@csrf
@method('put')

    <div class="card mb-4">
        <div class="card-header">
            <h5>{{ __('Update Password') }}</h5>
            <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
            @if (session('status') === 'password-updated')
            <div class="mt-3 alert alert-info alert-dismissible" role="alert">
                {{ __('Saved.') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="current_password" class="form-label">Current Password</label>
                <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Current Password" aria-describedby="current_password" required>
                @if($errors->updatePassword->get('current_password'))
                <div id="current_password" class="form-text text-danger">{{ $errors->updatePassword->get('current_password')[0] }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control" name="password" id="new_password" placeholder="New Password" aria-describedby="new_password" required>
                @if($errors->updatePassword->get('password'))
                <div id="new_password" class="form-text text-danger">{{ $errors->updatePassword->get('password')[0] }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="New Password" aria-describedby="password_confirmation" required>
                @if($errors->updatePassword->get('password_confirmation'))
                <div id="password_confirmation" class="form-text text-danger">{{ $errors->updatePassword->get('password_confirmation')[0] }}</div>
                @endif
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>

</form>