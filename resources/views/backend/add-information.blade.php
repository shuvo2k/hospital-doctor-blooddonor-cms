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

            <div class="">
                <div class="card-body">
                  <div class="container post_create">
                    <p>Public Information</p>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="container add_option">
                        <form class="" action="#" method="post">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Company Name or Doctor Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rajshahi Medical college.">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1234 Apartment, studio, or floor">
                          </div>
                            <div class="form-group" >
                              <label for="exampleFormControlInput1">Public Email</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="asraful@gmail.com">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Facebook Link</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="facebook">
                            </div>

                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Mobile</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="+8801738475224">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Telephone</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="000-887-5005">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputCountry">Country</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Select file input</label>
                              <input type="file" class="form-control-file" id="exampleFormControlFile1">
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