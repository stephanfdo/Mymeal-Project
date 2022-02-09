<style type=text/css> .header {
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(img/mymeal3.jpg);}
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
    </head>
<body>
    <section class="header")>
        <nav>
            <a href="index.php"><img src="/img/MYMEAL.png"> </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="about-us.php">ABOUT US</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="contact.php">Login  <i class="fas fa-user 2x"></i></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>


        <div class="text-box">
        <h1>Make it simple. But significant</h1>
        <p>End hunger, achieve food security and improved nutrition and promote sustainable agriculture</p>
        <a href="#content" class="visit-btn">Visit us</a>
        </div>
    </section>
<body>
<section class="content" id="content">


</section>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<a><button class="btn btn-primary scroll-top" data-scroll="up" type="button">
<i class="fa fa-chevron-up"></i>
</button></a>
<style>
	.scroll-top {
	border-radius: 5px;
	background-color: darkorange;
    width: 40px;
    height: 40px;
    position: fixed;
    bottom: 25px;
    right: 20px;
    display: none;
  	border: none;
  	color: white;
  	padding: 10px 10px;
  	text-align: center;
  	font-size: 16px;
	}
	.scroll-top:hover{
		background-color: red;
	}
</style>

<script>
	$(document).ready(function() {

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }
  });

  $('.scroll-top').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 100);
    return false;
  });

});
</script>

<footer>
	<p>Copyright © 2021 MYMEAL | Powered by Greenvibes Technologies</p>
  <ul>
    <li><a href="https://fb.com/greenvibeslk"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://twitter.com/greenvibeslk"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/greenvibeslk/"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://api.whatsapp.com/send/?phone=%2B94768623177&text&app_absent=0"><i class="fab fa-whatsapp"></i></a></li>
    <li><a href="tel:+94765341551"><i class="fa fa-phone"></i></a></li>
  </ul>
</footer>


  <!-- responsive -->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>



</section>
</body>
</html>
