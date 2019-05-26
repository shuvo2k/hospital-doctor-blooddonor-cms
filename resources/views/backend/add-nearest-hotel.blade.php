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
                    <p>Create Hotel Post</p>
                  </div>

                <div class="row">
                  <div class="col-lg-12">


                      <div class="">

                        <form class="" action="#" method="post">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Write the Hotel Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hotel Name">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Content</label>
                            <textarea class="form-control summernote" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>

                            <div class="form-group">
                                <label for="inputCountry">What Type Hotel</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>5 star</option>
                                  <option>4 star</option>
                                  <option>2 star</option>
                                  <option>1 star</option>
                                </select>
                              </div>
                              <div class="form-group">
                            <label for="exampleFormControlInput1">Address</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hotel Address">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Choose file</label>
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

