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
                    <p>Create Blog Post</p>
                  </div>

                <div class="row">
                  <div class="col-lg-12">
                      <div class="">
                        <form class="" action="#" method="post">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Write the title more than 40-100 letters</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Content</label>
                            <textarea class="form-control summernote" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                           <div class="form-group">
                            <label for="exampleFormControlInput1">Write the description more than 200 letters</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Description">
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCountry">Blog Catagory</label>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>Influenza</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputCity">Blog Sub Catagory</label>
                                <select id="inputState" class="form-control">
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
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                           <div class="form-group">
                            <label for="exampleFormControlInput1">Image Caption</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Image Caption">
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

    <script type="text/javascript">
        jQuery(function ($) {

            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if (
                    $(this)
                        .parent()
                        .hasClass("active")
                ) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .parent()
                        .removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .next(".sidebar-submenu")
                        .slideDown(200);
                    $(this)
                        .parent()
                        .addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });


        });

    </script>
@endpush
