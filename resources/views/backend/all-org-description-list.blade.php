

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
    <link rel="stylesheet" type="text/css" href="home.css">
   


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
          <img class="img-responsive img-rounded" src="../media/log/img/1.jpg"
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
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <a class="text-center" href="add-doctor-schedule.html">
              <span>Dashboard</span>
            </a>
          </li>


          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Schedule</span>
               <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-doctor-schedule.html">Add Doctor Schedule
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="all-doctor-schedule-list.html">All Schedule List</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Blog</span>
               <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="create-blog-post.html">Create Blog Post
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="all-blog-post-list.html">All Blog Post</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Description</span>
              <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-org-description.html">Add Description
                    <span class="badge badge-pill badge-success">Add</span>
                  </a>
                </li>
                <li>
                  <a href="edit-org-description.html">Edit Description</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Gallery</span>
              <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-gallery-img.html">Upload Image
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="edit-delete-gallery-img.html">Edit or Delete Image</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Patients Comments</span>
              <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-patients-comments.html">Add Patients Comments
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="edit-delete-patients-comments.html">Edit or Delete comments</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Changing Feature</span>
              <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-feature.html">Add Feature
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="edit-delete-feature.html">Edit or Delete Feature</a>
                </li>
              </ul>
            </div>
          </li>


           <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Services</span>
              <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-service.html">Add Services
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="edit-delete-service.html">Edit or Delete Services</a>
                </li>
              </ul>
            </div>
          </li>



          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Genarel Information</span>
              <span class="badge badge-pill badge-warning">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-information.html">Add Information
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="edit-information.html">Edit or Delete info</a>
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
                  <a href="add-nearest-hotel.html">Add Nearest Hotel
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="edit-delete-nearest-hotel.html">Edit or delete Hotel</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Trams & conditions</span>
              <span class="badge badge-pill badge-danger">#</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="add-trams.html">Add Trams & conditions

                  </a>
                </li>
                <li>
                  <a href="edit-trams.html">Edit or delete Trams & conditions</a>
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
                  <a href="add-google-map.html">Add Google maps</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="header-menu">
            <span>Personal</span>
          </li>


          <li>
            <a href="password-setting.html">
              <i class="fa fa-book"></i>
              <span>Setting</span>
              <span class="badge badge-pill badge-primary">Setting</span>
            </a>
          </li>
          <li>
            <a href="help.html">
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
        <span class="badge-sonar"></span>
      </a>
      <a href="../blog/index.com">
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
  <main class="page-content">

    <div class="container-fluid">

<div class="row">
        <div>
          
        </div>
      
      <div class="col-lg-9">
        Content
      </div>
      <div class="col-lg-3">
       
      </div>
        
  </div>

      
      
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>





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


</body>

</html>
