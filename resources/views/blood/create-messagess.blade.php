@extends('layouts.base')
@section('page-title')
@endsection
 {{-- @push('')
 @endpush  --}}
@section('content')
    <div class="container schedule-box">
    <div class="box">
    <a href="blog_detalis.html">
      <div class="post-card">
        <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/2.jpg" alt="Card image">
          <div class="card-body">
            <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          </div>
        </div>
      </div>
    </a>

    <a href="blog_detalis.html">
      <div class="post-card">
          <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/2.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
            </div>
          </div>
        </div>
    </a>
    <a href="blog_detalis.html">
      <div class="post-card">
        <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/3.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          </div>
        </div>
      </div>
    </a>

    <a href="blog_detalis.html">
      <div class="post-card">
          <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/4.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
            </div>
          </div>
        </div>
    </a>
    <a href="blog_detalis.html">
      <div class="post-card">
        <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/5.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          </div>
        </div>
      </div>
    </a>

    <a href="blog_detalis.html">
      <div class="post-card">
          <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/6.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
            </div>
          </div>
        </div>
    </a>
    <a href="blog_detalis.html">
      <div class="post-card">
        <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/7.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          </div>
        </div>
      </div>
    </a>

    <a href="blog_detalis.html">
      <div class="post-card">
          <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/8.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
            </div>
          </div>
        </div>
    </a>
    <a href="blog_detalis.html">
      <div class="post-card">
        <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/9.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
          </div>
        </div>
      </div>
    </a>

    <a href="blog_detalis.html">
      <div class="post-card">
          <div class="card" style="">
          <img class="card-img-top" src="../media/blog/img/10.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h1 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
            </div>
          </div>
        </div>
    </a>

      </div>
    </div>


      <div class="main_contant_area">
      <div class="container">
        <div class="row mx-0">
          <div class="col-md-8 left_sidebar p-0">

            <div class="">
              <div class="container post_create mb-2">
                <p class="h6">Massage the Blood Donor</p>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">

                <div class="container post_create">
                  <div class="text-left rounded mt-1 mb-1">
                    <span><img src="https://user-images.githubusercontent.com/25878302/53659076-e2204680-3c5a-11e9-8c00-0c10bcd945e6.jpg"
                      class=" img1 card-img-top rounded-circle pl-1"
                      alt="Angular pro sidebar"></span>
                      <span class="font-weight-bold">Asraful Islam</span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">


                    <div class="container add_option">

                      <!--form start-->
                    <form class="" action="{{ route('donor.post.blood.message') }}" method="post">

                        <div class="form-row">
                        <div class="col-md-12">
                          <label for="date">
                            <p class="mb-0">Hospital Name</p>
                          </label>
                          <input type="text" class="form-control" name="hospital" id="text" placeholder="Hospital Name" title="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="date">
                            <p class="mb-0">Post Delete Date</p>
                          </label>
                          <input type="date" class="form-control" name="date" id="date" placeholder="" title="enter post delete date">
                        </div>
                        <div class="col-md-6">
                          <label for="date">
                            <p class="mb-0">Blood Want Date</p>
                          </label>
                          <input type="date" class="form-control" name="date" id="date" placeholder="" title="enter post delete date">
                        </div>
                        <div class="col-md-6 pb-2">
                          <label for="date">
                            <p class="mb-0">Want Blood Group</p>
                          </label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option value="A+">A+</option>
                            <option value="AB+">AB+</option>
                            <option value="B+">B+</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="AB-">AB-</option>
                            <option value="B-">B-</option>
                            <option value="O-">O-</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-4 mb-3">

                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                              @if (isset($country))
                                  <option selected disabled>Country</option>

                            @foreach ($country as $c)
                              <option value="{{ $c->country_name }}">{{ $c->country_name }}</option>
                            @endforeach
                            @endif
                            </select>

                        </div>
                        <div class="col-md-4 mb-3">

                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                              @if (isset($city))
                                  <option selected disabled>City</option>
                            @foreach ($city as $c)
                              <option value="{{ $c->city_name }}">{{ $c->city_name }}</option>
                            @endforeach
                                @endif
                            </select>

                        </div>
                        <div class="col-md-4 mb-3">

                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                              @if (isset($state))
                                  <option selected disabled>Area</option>

                            @foreach ($state as $s)
                              <option value="{{ $s->state_name }}">{{ $s->state_name }}</option>
                            @endforeach
                            @endif
                            </select>

                        </div>

                      </div>
                      <button type="submit" class="btn btn-success btn-block mb-2">Post</button>
                    </form>
                    <!--form end-->
                    </div>

                  </div>

                </div>

              </div>
            </div>

            </div>



            <div class="col-lg-4">

              <div class="container right_sidebar">

                <div class="row container right-addvartisment mx-0">
                  <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
                </div>

                <div class="container content_area_batton">
                  <h5>Recent Post</h5>
                </div>

                <div class="container">
                  <div class="row">
                    <a class="link" href="blog_detalis.html">
                      <div class="media">
                        <img class="align-self-start mr-1" src="../media/blog/img/11.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h1 class="mt-0">Top-aligned mediaTop-aligned mediaTop-aligned media</h1>
                        </div>
                      </div>
                    </a>

                      <a class="link" href="blog_detalis.html">
                      <div class="media">
                        <img class="align-self-start mr-1" src="../media/blog/img/11.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <h1 class="mt-0">Top-aligned mediaTop-aligned mediaTop-aligned media</h1>
                        </div>
                      </div>
                    </a>



                  </div>
                </div>

                <div class="row container right-addvartisment">
                  <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
                  <br>
                </div>

                <div class="row container right-addvartisment">
                  <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
                  <br>
                </div>
                <div class="row container right-addvartisment">
                  <img class="img-fluid"src="img/3-nt-300x250-2-en.gif" alt="">
                  <br>
                </div>
              </div>
            </div>
        </div>
      </div>
      </div>



      @endsection
      @push('js')
      @endpush
