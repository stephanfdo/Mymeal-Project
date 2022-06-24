<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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

    <style type="text/css">



      .card{
      width:50%;
      background-color: #0a3d62;
      color: #fff;
      box-shadow: 0 6px 10px 0 rgba(0,0,0,0.14),
      0 1px 18px 0 rgba(0,0,0,0.12),
      0 3px 5px -1px rgba(0,0,0,0.3);
      }
      .card-body{
      padding: 0px;
      min-height: 0px;
      }
      .card-title,p{
      margin-bottom: 0px;
      text-transform: uppercase;
      }
      .card-text{
      font-size: 10px;
      font-style: italic;
      padding-bottom: 10px;
      }
      ul{
      list-style-type: none;
      padding: 20px;
      }
      li{
      font-weight: 500;
      padding-bottom: 5px;
      }
      li span{
      font-weight: 300;
      padding-left: 5px;
      }
      .bg-custom{
      background-color:#0c2461;
      }
      .bg-custom p{
      padding: 10px;
      line-height: 1;
      }
      .col-4{
      display: flex;
      justify-content: center;
      align-self: center;
      }
      .bg-effects{
      background-color: #1B1464;
      border-top-right-radius: 50px;
      border-bottom-right-radius: 50px;
      padding-left: 10px;
      padding-top: 10px;
      }
      @media(max-width: 992px){
      .card{
      width: 70%;
      }
      }
      @media(max-width: 768px){
      .card{
      width: 70%;
      }
      .container{
      max-width: 100%;
      }
      img{
      display: flex;
      }
      }
      @media(max-width: 615px){
      li{
      font-size: 12px;
      }
      .card{
      width: 90%;
      }
      }





<style>
.card mb-3 img{
height:30px;
width: 30px;

}


</style>




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





            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="images/faces/.jpg" alt="Profile image"> <span class="font-weight-normal">  </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images" alt="Profile image">
                  <p class="mb-1 mt-3"></p>
                  <p class="font-weight-light text-muted mb-0">mail</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
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
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">name</p>

                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <div class="nav-item nav-category">
              <span class="nav-link">Opernage</span>
            </div>
              </a>

            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <div class="nav-item nav-category"><span class="nav-link">My donations</span></div>
                <i class="icon-layers menu-icon"></i>
              </a>
            </li>




            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <div class="nav-item nav-category"><span class="nav-link">Map</span></div>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li>

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        <div class="main">

  <!-- Actual search box -->
  <div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Search">
  </div>

  <!-- Another variation with a button -->
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search by city">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
    </div>
  </div>
<br><br><br>
@foreach($data as $chdata)

  <div class="card mb-3" style="display: flex ;">
  <div>
  <img class="card-img-top" style="width:100px; height:100px; float:left; padding:10px;"  src="{{ asset($chdata->file_path) }}" alt="Card image cap">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$chdata->name}}</h5>
    <p class="card-text"><i class="material-icons">place</i>{{$chdata->city}}</p>
    <p class="card-text"><i class="material-icons">place</i>{{$chdata->address}}</p>
    <p class="card-text"><i class="material-icons">phone</i>{{$chdata->tpno1}}</p>
    <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i>{{$chdata->tpno}}</p>
  </div>
</div>

@endforeach


@foreach($data as $chdata)

<div class="container mt-5" style="width: 140%;">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-8">
            <div class="bg-effects">
              <h2 class="card-title">{{$chdata->name}}</h2>
              <p class="card-text">Bussiness Consultant</p>
            </div>
            <ul>
              <li><i class="material-icons">place</i>{{$chdata->city}}</li>
              <li>Professional :-<span>Consultant</span></li>
              <li>Country :-<span>United Kingdom</span></li>
              <li>Phone :-<span>+012 3654 789</span></li>
              <li>Emails :-<span>Jone.dee@mail.com</span></li>
            </ul>
          </div>
          <div class="col-4 pl-0">
            <img src="men.png" class="img-responsive">
          </div>
        </div>
      </div>
      <div class="bg-custom">
        <p>Visit Now :-<span> W3hubs.com</span></p>
      </div>
    </div>

@endforeach




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
