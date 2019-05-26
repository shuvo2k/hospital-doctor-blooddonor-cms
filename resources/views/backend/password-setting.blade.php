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
                        <form class="" action="#" method="post">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">User Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="abc2019">
                          </div>
                            <div class="form-group" >
                              <label for="exampleFormControlInput1">Login Email</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="asraful@gmail.com">
                            </div>
                            <div class="form-group" >
                              <label for="exampleFormControlInput1">Login Mobile</label>
                              <input type="mobile" class="form-control" id="exampleFormControlInput1" placeholder="+880725487">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Old Password</label>
                              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="New Password">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">New Password</label>
                              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="New Password">
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

