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
            <div class="">
                <div class="card-body">
                  <div class="container post_create">
                    <p>Create Gallery Photo</p>
                  </div>

                <div class="row">
                  <div class="col-lg-12">


                      <div class="container add_option">

                        <form class="" action="#" method="post">
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Choose file</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                          <div class="form-group" >
                            <label for="exampleFormControlInput1">Add Image Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Image Title">
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


