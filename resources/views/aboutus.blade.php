<style type=text/css> .header {

    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(img/hungry.jpg);

}

</style>

<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{ asset('img/MYMEAL_favicon.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>MYMEAL</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cont.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;800&display=swap" rel="stylesheet">

    <!--Made with love by Mutiullah Samim -->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles-home.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>




<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






    </head>
<body>
    <section class="header">
    <header>
    <a href="index.html" class="brand"><img src="/img/MYMEAL.png" width="250" ></a>
    <div class="menu-btn"></div>

    <div style="background-color:transparent; padding:30px;" class="navigation">
      <div class="navigation-items">

            <a href="/">Home</a>
            <a href="./common/AboutUs.html">About Us</a>
            <a href="./common/contact.php">Contact Us</a>
            <a href="/login">Login</a>
            <a href="/singup">Sign-up</a>
      </div>
    </div>
  </header>

        @if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif


<section class="content" style="color:white ;">
<h2>About Us</h2>

<p>This Mymeal programe was started by greennvibes.lk to help childrens and childrenhomes who are unable to have their day to day meals. This website shows you verified childrenhomes and their contact deatails. You can search your nearest place and you can donate as you wish. </p>

<p>Hunger is the leading cause of death in the world. Our planet has provided us with tremendous resources, but unequal access and inefficient handling leaves millions of people malnourished. If we promote sustainable agriculture with modern technologies and fair distribution systems, we can sustain the whole world’s population and make sure that nobody will ever suffer from hunger again.
</p><br>

<p>
  Every day too many men and women across the globe struggle to feed their children a nutritious meal.
In a world where we produce enough food to feed everyone, 690 million people still go to bed on an empty stomach each night.
Acute food insecurity affected 135 million people in 55 countries in 2019.
Even more – one in three – suffer from some form of malnutrition.

To end world hunger, we all have to take action. Get inspired here:
</p><br>

<p>Eradicating hunger and malnutrition is one of the great challenges of our time. Not only do the consequences of
not enough – or the wrong – food cause suffering and poor health, they also slow progress in many other areas of development like education and employment.</p><br>

<p>In 2015 the global community adopted the 17 Global Goals for Sustainable Development to improve people’s lives by 2030.
Goal 2 – Zero Hunger – pledges to end hunger, achieve food security, improve nutrition and promote sustainable agriculture,
and is the priority of the Mymeal Programme.</p><br>

</section>
</section>

</section>
</body>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</body>
</html>
