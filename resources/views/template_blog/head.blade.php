<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- META GOOGLE -->
	<meta name="Description" content="SMK Auliya Teladan Mandiri" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>SMK ATM</title>
    
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/landing/css/bootstrap.min.css') }}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/owl/dist/assets/owl.carousel.css') }}">
	<link type="text/css" rel="stylesheet" href="{{ asset('/owl/dist/assets//owl.theme.default.min.css') }}">
	

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('/landing/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('/landing/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			@media (min-width: 992px) {
				.aside-btn{
					display: none ;
				}
			}
		</style>
</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container" style="background-color: #4E6ADB ;">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<h2><a href="{{ url('/') }}" class="logo"><img src=" {{ asset('/landing/img/logo.png') }}" alt=""></a></h2>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form action="{{route('blog.cari')}}" method="get">
								<input class="input" name="cari" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

				<!-- <div class="jumbotron">
					<div class="container">
						<img src=" {{ asset('/landing/img/logo_fix.png') }}" alt="">
					</div>
				</div> -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
					<li><a href=" {{ url('') }} ">Beranda</a></li>
						<li class="has-dropdown">
							<a href="#">Profil</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										<li><a href="{{ route('visimisi') }}">Visi Misi</a></li>
										<li><a href="{{ route('namalambang') }}">Nama & Lambang</a></li>
										<li><a href="{{ route('hymne') }}">Hymne</a></li>
										<li><a href="{{ route('strukturorganisasi') }}">Struktur Organisasi</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="{{ route('blog.list') }}">Berita</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="{{ url('') }}">Home</a></li>
						<li class="has-dropdown">
							<a href="#">Profil</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										<li><a href="{{ route('visimisi') }}">Visi Misi</a></li>
										<li><a href="{{ route('namalambang') }}">Nama & Lambang</a></li>
										<li><a href="{{ route('hymne') }}">Hymne</a></li>
										<li><a href="{{ route('strukturorganisasi') }}">Struktur Organisasi</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="has-dropdown">
							<a href="#">Category</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										@foreach($category_widget as $result1)
											<li><a href="{{ route('blog.category',$result1->slug) }}">{{ $result1->name }}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->