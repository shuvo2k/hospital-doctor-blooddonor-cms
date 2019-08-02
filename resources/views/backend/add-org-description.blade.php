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
      <!-- end message -->
              <div class="card">
                <div class="card-body">
                  <div class="container post_create">
                    <p>Add Description</p>
                  </div>

                  <div class="row">
                    <div class="col-lg-12">


                      <div class="">

                        <form class="" action="{{route('dashboard.description.submit')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control summernote" id="exampleFormControlTextarea1" rows="3" name="description" value="@if (isset($describe))
                            {!! $describe?$describe->description:'' !!}

                            @endif"></textarea>
                          </div>


                          <div class="form-group">
                            <label for="exampleFormControlFile1">Choose file</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                          </div>
                          <img src="@if(isset($describe)) {!! asset($describe->image) !!} @endif" alt="description banner">
                          <button type="submit" class="btn btn-success btn-block mb-2">Update</button>
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

  <script>
    $(document).ready(function() {
      $('textarea').summernote({
        height: 300,   //set editable area's height
      });
    });
  </script>
  @endpush