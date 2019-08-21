@extends('layouts.base')
@section('page-title')
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('style/blog/css/blood-profile.css') }}">
   @endpush
  @section('content')

  <div class="container emp-profile">

      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img src="{{asset($user->image)}}" alt="" />

          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-head">
            <h5>
            {{$user->first_name}} {{ $user->last_name }}
            </h5>
            <h6>
          @if ($user->country)
  {{$user->country}},
          @endif
          @if ($user->city)
          {{ $user->city }},
          @endif
          @if ($user->area)
          {{ $user->area }}
          @endif
            </h6>
            <!-- error message  -->
            @if ($errors->any())

              @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                  {{ $error }}
                </div>
              @endforeach


            @endif
            <!-- session message -->
            @if (session()->has('error'))
              <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('error') }}
              </div>
            @endif
            <!-- session message -->
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
              </div>
            @endif
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Message</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2">

        </div>
      </div>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">

          <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Name:</label>
                </div>
                <div class="col-md-6">
                  <p>{{$user->first_name}} {{ $user->last_name }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Blood</label>
                </div>
                <div class="col-md-6">
                  <p> <strong>{{$user->blood_group}}</strong></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Religion</label>
                </div>
                <div class="col-md-6">
                  <p> <strong>{{ $user->religion }}</strong></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Height</label>
                </div>
                <div class="col-md-6">
                  <p>{{ $user->height }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Weight</label>
                </div>
                <div class="col-md-6">
                  <p> <strong>{{ $user->weight }} kg</strong></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6">
                  <p>{{ $user->email }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Phone</label>
                </div>
                <div class="col-md-6">
                  <p>{{ $user->mobile_no }}</p>
                </div>
              </div>

            </div>


            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              <div class="form-area">
                <form role="form" action="{{ route('donor.send.message') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                  <br style="clear:both">
                  <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                  </div>

                  <button type="submit" id="submit" class="btn btn-primary pull-right ml-1">Submit Form</button>
                </form>
              </div>
            </div>


          </div>
        </div>
      </div>

  </div>


@endsection
@push('js')
@endpush
