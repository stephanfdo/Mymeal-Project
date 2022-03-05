<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styles-home.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
  <title>Home</title>
</head>
<body>

  <header>
    <a href="index.html" class="brand"><img src="/img/MYMEAL.png" width="250" ></a>
    <div class="menu-btn"></div>

    <div class="navigation">
      <div class="navigation-items">

            <a href="index.html">Home</a>
            <a href="./common/AboutUs.html">About Us</a>
            <a href="./common/contact.php">Contact Us</a>
            <a href="./common/login.html">Login</a>
            <a href="./common/signup.php">Sign-up</a>
      </div>
    </div>
  </header>

<section class="home">
  <video class="video-slide active" src="./videos/homevideo2.mp4" autoplay muted loop></video>
  <video class="video-slide" src="./videos/homevideo3.mp4" autoplay muted loop></video>
  <video class="video-slide" src="./videos/homevideo4.mp4" autoplay muted loop></video>


  <div class="content active">
    <h1>Welcome<br> <span></span> </br></h1>
    <p>"" </p>
    <a href="./common/AboutUs.html">Read More</a>
  </div>
  <div class="content">
    <h1>Donate<br> <span></span> </br></h1>
    <p>...........</p>
    <a href="./common/AboutUs.html">Read More</a>
 </div>
 <div class="content">
    <h1>N<br> <span>....</span> </br></h1>
    <p>“...............'</p>
    <a href="./common/AboutUs.html">Read More</a>
 </div>



  <div class="media-icons">
    <a href="https://www.facebook.com/" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
    <a href="https://www.instagram.com/" target="_blank"> <i class="fab fa-instagram"></i> </a>
    <a href="https://twitter.com/" target="_blank"> <i class="fab fa-twitter"></i> </a>
    <a href="https://twitter.com/" target="_blank"> <i class="fab fa-whatsapp"></i> </a>
  </div>

  <div class="slider-navigation">
    <div class="nav-btn active"></div>
    <div class="nav-btn"></div>
    <div class="nav-btn"></div>

</div>

</section>

<!--Footer-->
<footer  class="text-center text-lg-start bg-dark text-muted" style="background-color:  #00b300;">

  <!-- Section: Links  -->
  <section class="footer" style="background-color:  #00b300;">>
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <img src="/img/MYMEAL.png" width="150" >
          </h6>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="color: white;">
            Useful links
          </h6>
          <p style="color: white;">
            <a href="common/aboutus.html" class="text-reset" style="color: white;"> about us </a>
          </p>
          <p style="color: white;">
            <a href="common/contact.php" class="text-reset" style="color: white;">contact us</a>
          </p>
          <p style="color: white;">
            <a href="common/login.html" class="text-reset" style="color: white;">login</a>
          </p>
          <p style="color: white;">
            <a href="common/signup.php" class="text-reset" style="color: white;">sign up</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4" style="color: white;">
            Contact
          </h6>
          <p style="color: white;"><i class="fas fa-home me-3"></i><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Sri Lanka</p>
          <p style="color: white;">
            <i class="fas fa-envelope me-3"></i>
            @outlook.com
          </p>
          <p style="color: white;"><i class="fas fa-phone me-3"></i>+94</p>

        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color:  #00b300; color: white;">>
     &copy; 2022 Copyright:
    <a class="text-reset fw-bold" href="##">GreenVibes.lk</a>
  </div>
  <!-- Copyright -->
</footer>




<script type="text/javascript">
//Javascript of responsive navigation menu

const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");


menuBtn.addEventListener("click", () =>{
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
} );

//Javascript of video slider navigation
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");

var sliderNav =  function(manual){
  btns.forEach((btn) => {
        btn.classList.remove("active");
    });

  slides.forEach((slide) => {
        slide.classList.remove("active");
    });

  contents.forEach((content) => {
        content.classList.remove("active");
    });


   btns[manual].classList.add("active");
   slides[manual].classList.add("active");
   contents[manual].classList.add("active");
 }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
    });
   });
</script>

<!--MD-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>


</body>
</html>
