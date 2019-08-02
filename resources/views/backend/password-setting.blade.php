@extends('layouts.backend')
@section('title','')
@push('css')
@endpush

@section('content')
  <!-- sidebar-wrapper  -->
  <main class="page-content">

    <div class="container-fluid">

       <div class="row">
        <div>
          
        </div>
      
      <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                  <div class="container post_create">
                    <p>Change login Setting</p>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="">
                        <form class="" action="{{route('dashboard.settings.submit')}}" method="post">
                          @csrf
                          <div class="form-group">
                            <label for="exampleFormControlInput1">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="exampleFormControlInput1" placeholder="{{$user->first_name}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="exampleFormControlInput1" placeholder="{{$user->last_name}}">
                          </div>
                            <div class="form-group" >
                              <label for="exampleFormControlInput1">Login Email</label>
                              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="{{$user->email}}">
                            </div>
                            <div class="form-group" >
                              <label for="exampleFormControlInput1">Login Mobile</label>
                              <input type="mobile" name="mobile_no" class="form-control" id="exampleFormControlInput1" placeholder="{{$user->mobile_no}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Old Password</label>
                              <input type="password" name="old_password" class="form-control" id="exampleFormControlInput1" placeholder="New Password">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">New Password</label>
                              <input type="password" name="new_password" class="form-control" id="exampleFormControlInput1" placeholder="New Password">
                            </div>

                          <button type="submit" class="btn btn-success btn-block mb-2">Save</button>
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

