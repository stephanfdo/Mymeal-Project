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
      .card-title p{
      margin-bottom: 0px;
      text-transform: uppercase;

      }
      .card-text{
      font-size: 14px;
      font-style: italic;
      padding-bottom: 3px;
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

                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"> {{ session()->get('name'); }}</p>

                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('/user')}}">
                <div class="nav-item nav-category">
              <span class="nav-link">Childrenhomes</span>
            </div>
              </a>

            </li>


            <li class="nav-item">
              <a class="nav-link" href="{{url('/userBook')}}">
                <div class="nav-item nav-category">
              <span class="nav-link">donate</span>
            </div>
              </a>

            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <div class="nav-item nav-category">
              <span class="nav-link">my donations</span>
            </div>
              </a>

            </li>


          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        <div class="main">

  <!-- Actual search box -->
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

  <!-- Another variation with a button -->
<h3 style="color:#39e600;">Book and save your donations</h3>

<br><br>

<form method="POST" action="/addbooking">
{{csrf_field()}}

<select class="form-control" name="chid">
    <option>Select Childrenhome</option>
    @foreach ($values as $data)
        <option value="{{ $data->chid }}" >
            {{ $data->name }} , {{ $data->city }}
        </option>
    @endforeach
</select>

<br><br>
<select class="form-control" name="dtype">
    <option>Select donation type</option>

        <option value="breakfest" >
             Breakfest
        </option>

        <option value="lunch" >
             Lunch
        </option>
        <option value="dinner" >
             Dinner
        </option>
        <option value="other" >
             Other
        </option>

</select>




<br><br>
<div class="container" style="padding-left:8px ;">
   <div class="row">
      <div class='col-sm-6'>
         <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
               <input type='date' class="form-control" name="date" />
               <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>
   </div>
</div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>




<br> <br> <br>


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
