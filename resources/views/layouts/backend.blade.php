
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
@stack('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.11/dist/summernote-bs4.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{!! asset('style/home.css') !!}">



</head>

<body>
<div class="page-wrapper chiller-theme toggled">

    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="#">pro sidebar</a>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="{{ asset('media/log/img/logo3.png') }}"
                         alt="User picture">
                </div>
                <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
                    <span class="user-role">Administrator</span>
                    <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
                </div>
            </div>
            <!-- sidebar-header  -->

            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <a class="text-center" href="add-doctor-schedule.html">
                            <span>View Your Page</span>
                        </a>
                    </li>

                    <li class="header-menu">
                        <a class="text-center" href="add-doctor-schedule.html">
                            <span>Dashboard</span>
                        </a>
                    </li>


                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Schedule</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.schedule') !!}">Add Doctor Schedule

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.schedule.list') !!}">All Schedule List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Blog</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.blogpost') !!}">Create Blog Post

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.blogpost.list') !!}">All Blog Post</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Description</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.description') !!}">Add Description

                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Gallery</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.gallery') !!}">Upload Image

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.gallery.list') !!}">Edit or Delete Image</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Patients Comments</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.patient.comments') !!}">Add Patients Comments

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.patient.comments.list') !!}">Edit or Delete comments</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Changing Feature</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.changing.feature') !!}">Add Feature

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.changing.feature.list') !!}">Edit or Delete Feature</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Services</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.services') !!}">Add Services

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.services.list') !!}">Edit or Delete Services</a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Genarel Information</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.general.info') !!}">Add Information

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.generalinfo.list') !!}">Edit or Delete info</a>
                                </li>
                            </ul>
                        </div>
                    </li>




                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Nearest Hotel</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.nearest.hotel') !!}">Add Nearest Hotel

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.nearest.hotel.list') !!}">Edit or delete Hotel</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Trams & conditions</span>

                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.terms') !!}">Add Trams & conditions

                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('dashboard.terms.list') !!}">Edit or delete Trams & conditions</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Maps</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{!! route('dashboard.map') !!}">Add Google maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="header-menu">
                        <span>Personal</span>
                    </li>


                    <li>
                        <a href="{!! route('dashboard.settings') !!}">
                            <i class="fa fa-book"></i>
                            <span>Setting</span>

                        </a>
                    </li>
                    <li>
                        <a href="{!! route('dashboard.help') !!}">
                            <i class="fa fa-calendar"></i>
                            <span>Help</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            <a href="message.html">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="password-setting.html">
                <i class="fa fa-cog"></i>

            </a>
            <a href="{{route('signout')}}">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </nav>



    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <div class="page-content">
        <h2>Pro Sidebar</h2>
        <hr>
    </div>
    <!-- sidebar-wrapper  -->
  @yield('content')
    <!-- page-content" -->
</div>
<!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>




<script src="https://cdn.jsdelivr.net/npm/bs4-summernote@0.8.10/dist/summernote-bs4.min.js"></script>
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

@stack('js')
</body>

</html>
