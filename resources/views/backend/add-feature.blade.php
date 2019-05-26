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
                      <p>Add Changing Feature</p>
                    </div>

                  <div class="row">
                    <div class="col-lg-12">


                        <div class="container add_option">

                          <form class="" action="#" method="post">
                            <div class="form-group">
                              <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Feature">
                            </div>
                            <button type="submit" class="btn btn-success btn-block mb-2">Add</button>
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



