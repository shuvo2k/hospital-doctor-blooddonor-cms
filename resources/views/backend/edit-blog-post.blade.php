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

          <div class="card">
                <div class="card-body">
                  <div class="container post_create">
                    <p>Create Blog Post</p>
                  </div>

                <div class="row">
                  <div class="col-lg-12">
                      <div class="">
                        <form class="" action="{{route('dashboard.blogpost.submit')}}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Write the title more than 40-100 letters</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Content</label>
                            <textarea class="form-control summernote" name="contents"  id="exampleFormControlTextarea1 " rows="3"></textarea>
                          </div>
                           <div class="form-group">
                            <label for="exampleFormControlInput1">Write the description more than 200 letters</label>
                            <input type="text" class="form-control" name="description" id="exampleFormControlInput1" placeholder="Description">
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCountry">Blog Catagory</label>
                                <select id="inputState" class="form-control" name="category">
                                  <option selected>Choose...</option>
                                    @if (isset($category))


                                    @foreach($category as $cat)
                                  <option>{{$cat->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Blog Sub Catagory</label>
                                <select id="inputState" class="form-control" name="subcategory">
                                  <option selected>Choose...</option>
                                  <option>Coughing</option>
                                  <option>Runny or stuffy nose</option>
                                  <option>Sneezing</option>
                                  <option>Sore throat</option>
                                  <option>Fever</option>
                                  <option>Headache</option>
                                </select>
                              </div>
                            </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Choose file</label>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                           <div class="form-group">
                            <label for="exampleFormControlInput1">Image Caption</label>
                            <input type="text" name="image_caption" class="form-control" id="exampleFormControlInput1" placeholder="Image Caption">
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

    <script src="https://cdn.jsdelivr.net/npm/bs4-summernote@0.8.10/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('textarea').summernote({
                height: 300,   //set editable area's height
            });
        });
    </script>
@endpush
