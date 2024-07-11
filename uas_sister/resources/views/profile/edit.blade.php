@extends('layouts.dashboard')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        @include('profile.partials.update-profile-information-form')
        @include('profile.partials.update-password-form')
        @include('profile.partials.delete-user-form')
    </div>
</div>
@endsection