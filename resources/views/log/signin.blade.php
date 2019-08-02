@extends('layouts.base')

@section('title')

@push('css')
  <link rel="stylesheet" href="{!! asset('style/log/css/signin.css') !!}">
@endpush

@section('content')



  <div class="form-area">

    <div class="container-fluid">

        @if ($errors->any())
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ $error }}
            </div>

          @endforeach
        @endif

      <!-- session message -->
        @if (session()->has('register_success'))
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('register_success') }}
          </div>
        @endif

      <!-- session message -->
        @if (session()->has('login_uerror'))
          <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('login_uerror') }}
          </div>
      @endif
      <!-- end session -->

      <div class="row justify-content-center">

        <div class="col-lg-6 col-sm-6 col-md-6">

          <form class="form-container" action="{{route('signin.post')}}" method="post">
            @csrf
            <div class="row justify-content-center">
              <h4>Sign in</h4>
            </div>
            <div class="row justify-content-center">
              <p>with your Healthline Account</p>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="text" class="form-control" name="email_mobile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email or mobile">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-success btn-block">Submit</button>
            <div class="account">
              <ul>
                <li><a class="forgot_account" href="forgot.html">Forgot Account?</a></li>
                <li><a class="create_account" href="doctor&company-signup.html">Create a Doctor or Hospital Account?</a></li>
                <li><a class="create_account" href="blood-donner-signup.html">Create a Blood Donner Account?</a></li>
              </ul>
            </div>
            <div class="forgot_account">

            </div>
          </form>

        </div>




      </div>
    </div>
  </div>
@endsection

@push('js')
@endpush
