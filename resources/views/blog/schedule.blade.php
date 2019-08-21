
@extends('layouts.base')
@section('title')

    @push('css')
    <link rel="stylesheet" href="{!! asset('style/blog/css/schedule.css') !!}">
    <link rel="stylesheet" href="{!! asset('style/common/css/sidebar-footer.css') !!}">
    @endpush
@section('content')

<div class="">
    <div class="row search mx-0">
          <form class="form-inline">
          <div class="form-group col-md-2">
            <select class="form-control">
              <option>Country</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <select class="form-control">
              <option>City</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <select class="form-control">
              <option>Hospital</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <select class="form-control">
              <option>Specialist</option>
            </select>
          </div>

          <div class="form-group col-md-2">
            <select class="form-control">
              <option>Doctor</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary col-md-2">Search</button>
        </form>

    </div>
</div>





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

            <div class="container">
              <div class="container post_create">
                <p>Doctor Schedule</p>
              </div>
            </div>



            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>
            <a href="org_profile.html" class="status">

                <div class="container">
                  <div class="container schedule_area">

                    <div class="row">
                      <div class="icon_hospital">
                        <h1><i class="fa fa-hospital-symbol"></i> Rajshahi Canon School</h1>
                      </div>
                    </div>

                    <hr>

                    <div class="row bottom-icon">
                      <div class="icon">
                        <h2><i class="fa fa-user-md"></i> Dr. Asraful Islam</h2>
                        <h3><i class="fa fa-crown"></i>Surgery</h3>
                      </div>
                      <div class="icon">
                        <h3><i class="fa fa-calendar-alt"></i>Satarday to Thursday</h3>
                      </div>
                    </div>

                <hr>

                    <div class="row bottom-icon">
                      <div class="icon"><p class="m-0"><strong>Address:</strong> Bangladesh, Rajshahi City, Boalia</p></div>
                      <div class="icon"><p class="m-0"><strong>Time & Details</strong></p></div>
                    </div>
                  </div>
                </div>
            </a>

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
