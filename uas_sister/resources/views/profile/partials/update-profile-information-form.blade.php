
<form method="post" action="{{ route('profile.update') }}" class="col-md-12">
@csrf
@method('patch')

    <div class="card mb-4">
        <div class="card-header">
            <h5>{{ __('Profile Information') }}</h5>
            <p>{{ __("Update your account's profile information and email address.") }}</p>
            @if (session('status') === 'profile-updated')
            <div class="mt-3 alert alert-info alert-dismissible" role="alert">
                {{ __('Saved.') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
            </div>
            @endif
        </div>
        <div class="card-body">
            <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama" aria-describedby="name" required value="{{ old('name', $user->name) }}">
            @if($errors->get('name'))
            <div id="name" class="form-text text-danger">{{ $errors->get('name')[0] }}</div>
            @endif
            </div>

            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" aria-describedby="email" required value="{{ old('email', $user->email) }}">
            @if($errors->get('email'))
            <div id="email" class="form-text text-danger">{{ $$errors->get('email')[0] }}</div>
            @endif
            </div>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="btn text-info p-0">
                            <ins>{{ __('Click here to re-send the verification email.') }}</ins>
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-info">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif

            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>

</form>