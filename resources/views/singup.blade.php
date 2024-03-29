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
    <section class="header" >
        <nav>
            <a href="index.php"><img src="/img/MYMEAL.png"> </a>
            <div class="nav-links" id="navLinks">
            </div>
        </nav>
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->has('message1'))
    <div class="alert alert-danger">
        {{ session()->get('message1') }}
    </div>
@endif



	<div class="d-flex justify-content-center h-100" style="margin-top:-80px;">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square" ></i></span>
					<span><i class="fab fa-google-plus-square"  ></i></span>
					<span><i class="fab fa-twitter-square" ></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="/signupdata" method="POST" >
                {{csrf_field()}}
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" ><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="uname" required="required" placeholder="username">

					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" ><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" name="email" required="required" placeholder="email">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" required="required" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="sign up" class="btn float-right login_btn" >
					</div>
				</form>
			</div>
			<div class="card-footer" >
				<div class="d-flex justify-content-center links">
					Already have an account?<a href="/login">Log In</a>
				</div>
				<div class="d-flex justify-content-center">

				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>
