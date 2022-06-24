<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css1/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('css1/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/chartist.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css1/userstyle.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav style="background-color: black ;" class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html">

          </a>

        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
         <img style="height:70px;" src="img/MYMEAL.png" alt="logo" class="logo-dark" />
          <ul class="navbar-nav navbar-nav-right ml-auto">
      <li></li>

            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>






          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">


            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <div class="nav-item nav-category">
              <span class="nav-link">children Homes</span>
            </div>
              </a>

            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <div class="nav-item nav-category"><span class="nav-link">Users</span></div>

              </a>
            </li>






          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        <div class="main">



        <form method="POST" action="/addinformation">
                  {{csrf_field()}}

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"></span>
  <input type="text" class="form-control" placeholder="Name of the children's home" aria-label="Username" aria-describedby="addon-wrapping"  name="childrenhome">
</div>
<br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"></span>
  <input type="text" class="form-control" placeholder="City" aria-label="" aria-describedby="addon-wrapping"  name="city">
</div>
<br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"></span>
  <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="addon-wrapping"  name="address">
</div>
<br>

<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"></span>
  <input type="text" class="form-control" placeholder="Telephone No" aria-label="Username" aria-describedby="addon-wrapping"  name="teleno">
</div>
<br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"></span>
  <input type="text" class="form-control" placeholder="Telephone No 2" aria-label="Username" aria-describedby="addon-wrapping"  name="teleno1">
</div>
<br>
<div class="input-group flex-nowrap">
  <span class="input-group-file" id="addon-wrapping"></span>
  <input type="file" class="form-control" placeholder="Picture" aria-label="Username" aria-describedby="addon-wrapping"  name="picture">
</div>
<br><br>
<center>
<button type="submit" class="btn btn-danger">SAVE</button>
<button type="clear" class="btn btn-primary">CLEAR</button>
</center>


            </form>





</div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js1/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('js1/Chart.min.js') }}"></script>
    <script src="{{ asset('js1/moment.min.js') }}"></script>
    <script src="{{ asset('js1/daterangepicker.js') }}"></script>
    <script src="{{ asset('js1/chartist.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js1/off-canvas.js') }}"></script>
    <script src="{{ asset('js1/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('js1/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
