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

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






    </head>
<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="/img/MYMEAL.png"> </a>
            <div class="nav-links" id="navLinks">
            </div>
        </nav>

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
</body>
</html>
