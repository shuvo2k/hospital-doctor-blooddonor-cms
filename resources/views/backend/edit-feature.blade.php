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
          <!-- error message  -->
          @if ($errors->any())

              @foreach ($errors->all() as $error)
                  <div class="alert alert-danger alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                      {{ $error }}
                  </div>
              @endforeach


          @endif
              <div class="">
                <div class="card-body">

                    <div class="container post_create">
                      <p>Add Changing Feature</p>
                    </div>

                  <div class="row">
                    <div class="col-lg-12">


                        <div class="container add_option">

                          <form class="" action="{{ route('dashboard.changing.feature.submit') }}" method="post">
                              @csrf
                            <div class="form-group">
                              <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Feature" name="feature">
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



