<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{url('public/css/style.css')}}">
	<link rel="stylesheet" href="{{url('css/slick.css')}}">
        <title>Exam System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .top-banner__image{
                background-size: cover;
            }
            

        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"><b>Digi Exam System</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" >Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success text-right">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </ul>
  </div>
</nav>


	<!-- Navigation -->
	
	<!-- Navigation end -->

	<!-- Top banner -->
	<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
			<div class="top-banner__image">
				<img src="{{url('public/assets/dist/img/Akanksha_photo.jpg')}}" width="300" height="400" alt="author image">
			</div>
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span class="brand-span">Hello! I'm</span>
					<h2 class="top-banner__h2">Akanksha</h2>
				</div>
				<div class="top-banner__text-down">
					<h2 class="top-banner__h2">Srivastava</h2>
					<span class="brand-span">Software Engineer</span>
				</div>
				<p></p>
				
			</div>
		</div>
	</section>
	<!-- Top banner end -->

	<!-- About me -->
	
	<!-- About me end -->

	<!-- Books and CD -->
	
	<!-- Books and CD end -->

	<!-- Counter -->
	
	<!-- Counter -->

	<!-- Blog -->
	
	<!-- Blog end -->

	<!-- Quotes -->
	
	<!-- Quotes end -->

	<!-- Social -->
	
	<!-- Social -->

	<!-- Footer -->
	
	<!-- Footer end -->

	<!-- Scripts -->
	<script src="{{url('public/js/jquery.min.js')}}"></script>
	<script src="{{url('public/js/slick.min.js')}}"></script>
	<script src="{{url('public/js/main.js')}}"></script>

</body>
</html>