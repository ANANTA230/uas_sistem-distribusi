@extends('layouts.dashboard')
@section('container')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-4 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="card-body">
            <h5 class="text-center card-title text-primary">{{ __("You're logged in!") }} 🎉</h5>
            {{-- <p class="mb-4">You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in your profile.</p> --}}
            </div>
            {{-- <div class="col-sm-7">
            </div> --}}
            {{-- <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>  
</div>
@endsection