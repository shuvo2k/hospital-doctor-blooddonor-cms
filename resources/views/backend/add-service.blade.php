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
                      <p>Create service</p>
                    </div>

                  <div class="row">
                    <div class="col-lg-12">


                        <div class="">

                          <form class="" action="#" method="post">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Service Name</label>
                              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Service Name">
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">Content</label>
                              <textarea class="form-control summernote" id="exampleFormControlTextarea1" rows="3"></textarea>
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