@extends('layouts.backend')
@section('title','')
@push('css')
@endpush

@section('content')
  <main class="page-content">

    <div class="container-fluid">

 <div class="row">
        <div>
          
        </div>
      
      <div class="col-lg-9">
        <!-- error message  -->
        @if ($errors->any())

          @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

              {{ $error }}
            </div>
          @endforeach


        @endif
      <!-- end message -->
            <div class="">
                <div class="card-body">
                  <div class="container post_create">
                    <p>Public Information</p>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="container add_option">
                        <form class="" action="{{route('dashboard.generalinfo.submit')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Company Name or Doctor Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rajshahi Medical college." name="company_name">

                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1234 Apartment, studio, or floor" name="address">
                          </div>
                            <div class="form-group" >
                              <label for="exampleFormControlInput1">Public Email</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="asraful@gmail.com" name="public_email">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Facebook Link</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="facebook" name="facebook_link">
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Mobile</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="+8801738475224" name="mobile_no">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Telephone</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="000-887-5005" name="telephone_no">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputCountry">Country</label>
                                <select id="inputState" class="form-control" name="country_name">
                                  <option selected>Choose...</option>
                                 @if (isset($countries))
                                   @foreach($countries as $country)
                                      <option>{{$country->country_name}}</option>
                                    @endforeach
                                 @endif
                                </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <select id="inputState" class="form-control" name="city_name">
                                  <option selected disabled>Choose...</option>
                                  @if (isset($cities))
                                    @foreach($cities as $city)
                                      <option>{{$city->city_name}}</option>
                                    @endforeach
                                  @endif
                                </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control" name="state_name">
                                  <option selected disabled>Choose...</option>
                                  @if (isset($cities))
                                    @foreach($cities as $city)
                                      @foreach($city->states as $state)
                                        <option>{{$state->state_name}}</option>
                                    @endforeach
                                      @endforeach
                                  @endif
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Select file input</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                            </div>

                          <button type="submit" class="btn btn-success btn-block mb-2">Post</button>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        
      </div>
      <div class="col-lg-3">
       
      </div>
        
  </div>

     
      
    </div>

  </main>
  <!-- page-content" -->
@endsection


@push('js')



@endpush