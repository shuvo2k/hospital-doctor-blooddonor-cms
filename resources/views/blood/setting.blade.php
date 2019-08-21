@extends('layouts.base')
@section('page-title')
@endsection
 {{-- @push('')
 @endpush  --}}
@section('content')
  <div class="container schedule-box">
  <div class="box">
  <a href="blog_detalis.html">
    <div class="post-card">
      <div class="card" style="">
        <img class="card-img-top" src="../media/blog/img/2.jpg" alt="Card image">
        <div class="card-body">
          <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
        </div>
      </div>
    </div>
  </a>



  <a href="blog_detalis.html">
    <div class="post-card">
        <div class="card" style="">
        <img class="card-img-top" src="../media/blog/img/8.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          </div>
        </div>
      </div>
  </a>


    </div>
  </div>


    <div class="main_contant_area">
    <div class="container">
      <div class="row mx-0">
        <div class="col-md-8 left_sidebar p-0">

          <div class="row">
            <div class="col-md-12">
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
              <div class="container post_create">
                <div class="text-left rounded mt-1 mb-1">
                  <span><img src="{{ asset($user->image) }}"
                    class=" img1 card-img-top rounded-circle pl-1"
                    alt="Angular pro sidebar"></span>
                  <a href="{{ route('donor.profile', $user->id) }}">  <span class="font-weight-bold">{{ $user->first_name }} {{ $user->last_name }}</span></a>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">


                  <div class="container add_option">

                    <!--setting form start-->
                    <form class="form container" action="{{ route('donor.profile.update') }}" method="post" id="registrationForm" enctype="multipart/form-data">
                      @csrf
                    
                      <div class="form-group row">

                        <div class="col-xs-6 col-md-6 col-lg-6">
                          <label for="first_name">
                            <h5>First name</h5>
                          </label>
                          <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name }}" title="enter your first name.">
                        </div>
                        <div class="col-xs-6 col-md-6 col-lg-6">
                          <label for="last_name">
                            <h5>Last name</h5>
                          </label>
                          <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $user->last_name }}" title="enter your last name.">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-xs-6">
                          <label for="mobile">
                            <h5>Mobile</h5>
                          </label>
                          <input type="hidden" name="real_mobile" value="{{ $user->mobile_no }}">
                          <input type="number" class="form-control" name="mobile_no" id="mobile" value="{{ $user->mobile_no }}" title="enter your mobile number if any.">
                        </div>
                      </div>
                      <div class="form-group">

                        <div class="col-xs-6">
                          <label for="email">
                            <h5>Email</h5>
                          </label>
                          <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" readonly title="enter your email.">
                        </div>
                      </div>
                      <div class="form-group form-row">

                        <div class="col-xs-6 col-md-6">
                          <label for="birthday">
                            <h5>Date of Birth</h5>
                          </label>
                          <input type="date" class="form-control" name="birthday" id="birth" value="{{ $user->date_of_birth }}" title="birthday">
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <label for="religion">
                            <h5>Religion</h5>
                          </label>

                          <select class="custom-select mr-sm-2" name="religion" id="religion">
                          @if (isset($user->religion))
                              <option selected>{{$user->religion}}</option>
                            @else
                              <option selected disabled>Religion</option>
                          @endif
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Cristian">Critian</option>
                            <option value="Bodho">Bodho</option>
                            <option value="Upojati">Upojati</option>
                            <option value="Eyahudi">Eyahudi</option>
                          </select>
                          </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationDefault01">Height</label>
                          <input type="height" class="form-control" name="height" id="validationDefault01" value="{{ $user->height }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="validationDefault02">Weight</label>
                          <input type="weight" class="form-control" name="weight" id="validationDefault02" value="{{ $user->weight }}" required>
                        </div>
                      </div>



                      <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="inlineFormCustomSelect1">Blood Group</label>
                            <select class="custom-select mr-sm-2" name="blood_group" id="inlineFormCustomSelect1">
                            @if (isset($user->blood_group))
                                <option selected>{{$user->blood_group}}</option>
                              @else
                                <option selected disabled>Blood Group</option>
                            @endif
                              <option value="A+">A+</option>
                              <option value="AB+">AB+</option>
                              <option value="B+">B+</option>
                              <option value="O+">O+</option>
                              <option value="A-">A-</option>
                              <option value="AB-">AB-</option>
                              <option value="B-">B-</option>
                              <option value="O-">O-</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="inlineFormCustomSelect2">Country</label>
                            <select class="custom-select mr-sm-2" name="country" id="inlineFormCustomSelect2">
                              @if (isset($user->country))
                                  <option selected>{{$user->country}}</option>
                                @else
                                  <option selected disabled>Country</option>
                              @endif
                            @foreach ($country as $c)
                              <option value="{{ $c->country_name }}">{{ $c->country_name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="inlineFormCustomSelect3">City</label>
                            <select class="custom-select mr-sm-2" name="city" id="inlineFormCustomSelect3">
                              @if (isset($user->city))
                                  <option selected>{{$user->city}}</option>
                                @else
                                  <option selected disabled>City</option>
                              @endif
                            @foreach ($city as $c)
                              <option value="{{ $c->city_name }}">{{ $c->city_name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="inlineFormCustomSelect4">Area</label>
                            <select class="custom-select mr-sm-2" name="area" id="inlineFormCustomSelect4">
                              @if (isset($user->area))
                                  <option selected>{{$user->area}}</option>
                                @else
                                  <option selected disabled>Area</option>
                              @endif
                            @foreach ($state as $s)
                              <option value="{{ $s->state_name }}">{{ $s->state_name }}</option>
                            @endforeach
                            </select>
                        </div>
                      </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                          </div>
                          <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose Profile Image</label>
                          </div>
                        </div>

                      <div class="form-group">
                        <div class="col-xs-12">
                          <button type="submit" class="btn btn-success btn-block mb-2">Save</button>
                        </div>
                      </div>
                    </form>
                    <!--setting form end-->
                  </div>

                </div>

              </div>

            </div>
          </div>

          </div>



          <div class="col-lg-4">

            <div class="container right_sidebar">

              <div class="row container right-addvartisment mx-0">
                <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
              </div>

              <div class="container content_area_batton">
                <h5>Recent Post</h5>
              </div>

              <div class="container">
                <div class="row">
                  <a class="link" href="blog_detalis.html">
                    <div class="media">
                      <img class="align-self-start mr-1" src="../media/blog/img/11.jpg" alt="Generic placeholder image">
                      <div class="media-body">
                        <h1 class="mt-0">Top-aligned mediaTop-aligned mediaTop-aligned media</h1>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row container right-addvartisment">
                <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
                <br>
              </div>

              <div class="row container right-addvartisment">
                <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
                <br>
              </div>
              <div class="row container right-addvartisment">
                <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
                <br>
              </div>
            </div>

          </div>

      </div>
    </div>

    </div>

@endsection
